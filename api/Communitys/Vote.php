<?php/** * Created by PhpStorm. * User: user * Date: 23.05.18 * Time: 12:23 */namespace Communitys;use Simpla;class Vote extends Simpla{    public function count_vote($filter)    {        if(!empty($this->debug->set)){            $filter['debug'] = "Vote:count_vote:filter";            $this->debug->console_log($filter);        }        if(isset($filter['type']))            $vote_type = $this->db->placehold('AND tv.type=?', intval($filter['type']));        if(isset($filter['topic_id']))            $topic_id = $this->db->placehold('AND tv.topic_id=?', intval($filter['topic_id']));        $query = /** @lang text */            "SELECT count(distinct tv.id) as count                         FROM __communitys_topic_votes as tv                         WHERE 1 $vote_type $topic_id";        $this->db->query($query);        $result = $this->db->result();        if(!empty($this->debug->set)){            $result->debug = "Vote:count_vote";            $this->debug->console_log($result);        }        return $result;    }    public function add_vote()    {        $query = $this->db->placehold( /** @lang text */            "SELECT tv.id             FROM __communitys_topic_votes as tv              WHERE tv.user_id=? AND tv.topic_id", $params['user_id'], $params['topic_id']);        $this->db->query($query);    }    public function is_vote($params)    {        if(!empty($this->debug->set)){            $params['debug'] = "Vote:is_vote";            $this->debug->console_log($params);        }        $query = $this->db->placehold( /** @lang text */            "SELECT tv.id             FROM __communitys_topic_votes as tv              WHERE tv.user_id=? AND tv.topic_id", $params['user_id'], $params['topic_id']);        $this->db->query($query);        $result = $this->db->result();        return empty($result->id) ? false : $result->id;    }}