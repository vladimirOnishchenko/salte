<?php/** * Simpla CMS * * @copyright	2011 Denis Pikusov * @link		http://simplacms.ru * @author		Denis Pikusov * */require_once('Simpla.php');class Messages extends Simpla{    public $filter_limit = "LIMIT 0, 10";    public $filter_order_by = 'ORDER BY m.id DESC';    /*    *    * Функция возвращает страницу по ее id или url (в зависимости от типа)    * @param $id id или url страницы    *    */    public function get_massage($filter=array())    {        $where_id ='';        $where ='';        if(isset($filter['subject_id']))            $where = $this->db->placehold('AND m.subject_id=? ', intval($filter['subject_id']));        if(isset($filter['limit']))            $this->filter_limit = $this->db->placehold('LIMIT ?, ?', intval($filter['limit']), intval($filter['limit'])+10);        if(isset($filter['id']))            $where_id = $this->db->placehold('AND m.id >? ', intval($filter['id']));        $query = "SELECT m.id, m.author, m.text, m.create_data, m.user_id, u.image		          FROM __commes as m		          LEFT JOIN __users as u ON u.id = m.user_id		          WHERE 1 $where $where_id $this->filter_order_by $this->filter_limit";        $this->db->query($query);        return $this->db->results();    }    /*    *    * Функция возвращает страницу по ее id или url (в зависимости от типа)    * @param $id id или url страницы    *    */    public function get_subject($id)    {        if(gettype($id) == 'string')            $where = $this->db->placehold('AND cs.id=? ', $id);        else            $where = $this->db->placehold('AND cs.id=? ', intval($id));        $query = "SELECT cs.id, cs.text, cs.create_date, cs.count_msg, cs.user_id, cs.community_id, cm.image		          FROM __commes_subject as cs 		          LEFT JOIN __communitys as cm ON cm.id=cs.community_id		          WHERE 1 $where";        $this->db->query($query);        return $this->db->result();    }    /*    *    * Функция возвращает страницу по ее id или url (в зависимости от типа)    * @param $id id или url страницы    *    */    public function get_users($subject_id)    {        if(gettype($subject_id) == 'string')            $where = $this->db->placehold('AND cu.subject_id=? ', $subject_id);        else            $where = $this->db->placehold('AND cu.subject_id=? ', intval($subject_id));        $query = "SELECT cu.user_id, cu.countmessage, u.image, cu.user_id, u.username, u.surname		          FROM __commes_users as cu 		          LEFT JOIN __users as u ON u.id=cu.user_id		          WHERE 1 $where";        $this->db->query($query);        return $this->db->results();    }    /*    *    * Функция возвращает страницу по ее id или url (в зависимости от типа)    * @param $id id или url страницы    *    */    public function add_message($message)    {        $query = $this->db->placehold('INSERT INTO __commes SET ?%', $message);        if(!$this->db->query($query))            return false;        $id = $this->db->insert_id();        $users = $this->get_users($message['subject_id']);        foreach ($users as $u)            $users_id[] = $u->user_id;        $query = $this->db->placehold("UPDATE __commes_users SET countmessage=countmessage+1 WHERE user_id in (?@) LIMIT ?", (array)$users_id, count((array)$users_id));        $this->db->query($query);        return $id;    }    /*    *    * Функция возвращает массив страниц, удовлетворяющих фильтру    * @param $filter    *    */    public function get_pages($filter = array())    {        $menu_filter = '';        $visible_filter = '';        $pages = array();        if(isset($filter['menu_id']))            $menu_filter = $this->db->placehold('AND menu_id in (?@)', (array)$filter['menu_id']);        if(isset($filter['visible']))            $visible_filter = $this->db->placehold('AND visible = ?', intval($filter['visible']));        $query = "SELECT id, url, header, name, meta_title, meta_description, meta_keywords, body, menu_id, position, visible		          FROM __pages WHERE 1 $menu_filter $visible_filter ORDER BY position";        $this->db->query($query);        foreach($this->db->results() as $page)            $pages[$page->id] = $page;        return $pages;    }    /*    *    * Создание страницы    *    */    public function add_page($page)    {        $query = $this->db->placehold('INSERT INTO __pages SET ?%', $page);        if(!$this->db->query($query))            return false;        $id = $this->db->insert_id();        $this->db->query("UPDATE __pages SET position=id WHERE id=?", $id);        return $id;    }    /*    *    * Обновить страницу    *    */    public function update_page($id, $page)    {        $query = $this->db->placehold('UPDATE __pages SET ?% WHERE id in (?@)', $page, (array)$id);        if(!$this->db->query($query))            return false;        return $id;    }    /*    *    * Удалить страницу    *    */    public function delete_page($id)    {        if(!empty($id))        {            $query = $this->db->placehold("DELETE FROM __pages WHERE id=? LIMIT 1", intval($id));            if($this->db->query($query))                return true;        }        return false;    }    /*    *    * Функция возвращает массив меню    *    */    public function get_menus()    {        $menus = array();        $query = "SELECT * FROM __menu ORDER BY position";        $this->db->query($query);        foreach($this->db->results() as $menu)            $menus[$menu->id] = $menu;        return $menus;    }    /*    *    * Функция возвращает меню по id    * @param $id    *    */    public function get_menu($menu_id)    {        $query = $this->db->placehold("SELECT * FROM __menu WHERE id=? LIMIT 1", intval($menu_id));        $this->db->query($query);        return $this->db->result();    }}