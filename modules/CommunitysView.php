<?php/** * Created by PhpStorm. * User: user * Date: 14.04.18 * Time: 22:29 */require_once('View.php');class CommunitysView extends View{    function fetch()    {        $filter['visible'] = 1;        $communitys = $this->communitys->get_communitys($filter);        $this->design->assign('communitys', $communitys);        return $this->design->fetch('communitys.tpl');    }}