<div class="panel panel-flat">    <div class="panel-heading">        <h2 class="panel-title">{$community->name}</h2>        <div class="heading-elements">            <ul class="icons-list">                <li><a href="/community/edit/1">Редагувати</a></li>                <li>|</li><li><a href="community/create/1">Створити спільноту</a></li>            </ul>        </div>        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>    <div class="panel-body">    {$community->body}    </div></div>{include file="community/nav_bar.tpl"}<div class="tabbable">    <div class="tab-content">        <div class="tab-pane fade active in" id="topic">            {include file='community/topics.tpl' topics=$topics}            <div class="row">                {foreach $users as $u}                <div class="col-lg-6 col-md-6">                    <div class="panel panel-body">                            <div class="media" style="min-height: 50px;">                                <div class="media-left">                                    <a href="#" data-popup="lightbox">                                        {if $u->image}                                            <img src="files/profile/users/{$u->id}/{$u->image}" class="img-circle img-lg" alt="">                                        {else}                                            <img src="design/s-alte/assets/images/placeholder.jpg" class="img-circle img-lg" alt="">                                        {/if}                                    </a>                                </div>                                <div class="media-body">                                    <h6 class="media-heading">{$u->username} {$u->surname}</h6>                                    <span class="text-muted">Учасник</span>                                </div>                                <div class="media-right media-middle">                                    <ul class="icons-list">                                        <li class="dropdown">                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"                                               aria-expanded="false"><i class="icon-menu9"></i></a>                                            <ul class="dropdown-menu dropdown-menu-right">                                                <li><a href="#"><i class="icon-comment-discussion pull-right"></i>                                                        Написати</a></li>                                                {*<li><a href="#"><i class="icon-phone2 pull-right"></i> Make a*}                                                        {*call</a></li>*}                                                {*<li><a href="#"><i class="icon-mail5 pull-right"></i> Send mail</a>*}                                                {*</li>*}                                                {*<li class="divider"></li>*}                                                {*<li><a href="#"><i class="icon-statistics pull-right"></i>*}                                                        {*Statistics</a></li>*}                                            </ul>                                        </li>                                    </ul>                                </div>                            </div>                        </div>                </div>                {/foreach}            </div>        </div>        <div class="tab-pane fade" id="messages">            <div class="panel panel-flat addTopic">                <div class="panel-body">                </div>            </div>        </div>    </div></div>