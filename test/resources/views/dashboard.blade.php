@extends('admin.master')
@section('sectiondata')
<!-- main content start-->

<body class="cbp-spmenu-push">
    <div class="main-content">
        <div id="page-wrapper">
            <div class="main-page">
                <div class="row-one">
                    <div class="col-md-4 widget">
                        <div class="stats-left ">
                            <h5></h5>
                            <h4></h4>
                        </div>
                        <div class="stats-right">
                            <label>

                            </label>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-4 widget states-mdl">
                        <div class="stats-left">
                            <h5></h5>
                            <h4></h4>
                        </div>
                        <div class="stats-right">
                            <label></label>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-4 widget states-last">
                        <div class="stats-left">
                            <h5></h5>
                            <h4></h4>
                        </div>
                        <div class="stats-right">
                            <label></label>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <!-- <h3 class="title1">Inbox</h3> -->
                <!-- <div class="inbox-page">
            <h4>Today</h4>
            <div class="inbox-row widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i1.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Janiya</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <div class="mail">
                        <p>Nullam quis risus eget urna mollis ornare</p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>30 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="mail-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                            ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                            truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow" id="accordion1" role="tablist" aria-multiselectable="true">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i2.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Walsh</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <div class="mail">
                        <p>Mollis nullam quis risus eget ornare</p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                    aria-expanded="true" aria-controls="collapseTwo">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>30 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="mail-body">
                        <p>Quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                            it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i3.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Skolski</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                    aria-expanded="true" aria-controls="collapsethree">
                    <div class="mail">
                        <p>Ornare vel eu leo nullam quis urna mollis </p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseThree">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>30 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="mail-body">
                        <p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                            put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                            anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i4.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Emoori</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <div class="mail">
                        <p>Vely Ornare leo nullam quis risus mollis </p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                                    aria-expanded="true" aria-controls="collapsefour">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>30 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="mail-body">
                        <p> Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="inbox-page row">
            <h4>Yesterday Messages</h4>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i2.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6> Walsh </h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <div class="mail">
                        <p>Mollis nullam quis risus eget urna ornare</p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"
                                    aria-expanded="true" aria-controls="collapseFive">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>29 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="mail-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                            ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch Brunch 3
                            wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch Nihil.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i1.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Janiya</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"
                    aria-expanded="true" aria-controls="collapsesix">
                    <div class="mail">
                        <p>Nullam quis risus eget urna mollis ornare</p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"
                                    aria-expanded="true" aria-controls="collapseSix">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>29 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                    <div class="mail-body">
                        <p>Officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor assumenda shoreditch et. Nihil anim
                            keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i3.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Skolski</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSev"
                    aria-expanded="true" aria-controls="collapsesev">
                    <div class="mail">
                        <p>Ornare vel eu leo nullam quis urna mollis </p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSev"
                                    aria-expanded="true" aria-controls="collapseSev">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>29 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapseSev" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsev">
                    <div class="mail-body">
                        <p>wolf moon officia aute, non cupidatat skateboard dolor brunch aliqua put a bird on it
                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i4.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Emoori</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight"
                    aria-expanded="true" aria-controls="collapseEight">
                    <div class="mail">
                        <p>Vely Ornare leo nullam eget urna mollis </p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight"
                                    aria-expanded="true" aria-controls="collapseEight">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>29 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight">
                    <div class="mail-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                            ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                            truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="inbox-page row">
            <h4>Older Messages</h4>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i2.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6> Walsh</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine"
                    aria-expanded="true" aria-controls="collapsenine">
                    <div class="mail">
                        <p>Mollis nullam quis risus ornare vel leo</p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine"
                                    aria-expanded="true" aria-controls="collapseNine">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>29 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
                    <div class="mail-body">
                        <p>Skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                            moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt sapiente ea proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i1.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Janiya</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen"
                    aria-expanded="true" aria-controls="collapseTen">
                    <div class="mail">
                        <p>Nullam quis risus mollis ornare leo</p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen"
                                    aria-expanded="true" aria-controls="collapseTen">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>28 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingten">
                    <div class="mail-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                            ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                            truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                            bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                            keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i3.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Skolski</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true"
                    aria-controls="collapse11">
                    <div class="mail">
                        <p>Ornare vel quis risus eget urna mollis </p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11"
                                    aria-expanded="true" aria-controls="collapse11">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>28 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                    <div class="mail-body">
                        <p>Nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i4.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Emoori</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true"
                    aria-controls="collapse12">
                    <div class="mail">
                        <p>Vely Ornare leo nullam quis risus eget </p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12"
                                    aria-expanded="true" aria-controls="collapse12">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>27 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                    <div class="mail-body">
                        <p>Anim pariatur cliche repreh enderit brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i1.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Janiya</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true"
                    aria-controls="collapse13">
                    <div class="mail">
                        <p>Vely Ornare quis risus eget urna mollis </p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13"
                                    aria-expanded="true" aria-controls="collapse13">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>26 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                    <div class="mail-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                            ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                            truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon temsunt </p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i3.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Skolski</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="true"
                    aria-controls="collapse14">
                    <div class="mail">
                        <p>Vely Ornare leo nullam quis risus eget </p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15"
                                    aria-expanded="true" aria-controls="collapse15">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>26 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                    <div class="mail-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                            ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                            truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                            bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                            keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i1.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Janiya</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true"
                    aria-controls="collapse15">
                    <div class="mail">
                        <p>Nullam quis risus mollis ornare vel eu leo</p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15"
                                    aria-expanded="true" aria-controls="collapse15">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>26 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                    <div class="mail-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                            ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                            truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                            bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                            keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i2.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6> Walsh</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true"
                    aria-controls="collapse16">
                    <div class="mail">
                        <p>Mollis nullam quis risus eget urna</p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16"
                                    aria-expanded="true" aria-controls="collapse16">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>25 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                    <div class="mail-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                            ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                            truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua putica
                            sapiente ea proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i3.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Skolski</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="true"
                    aria-controls="collapse17">
                    <div class="mail">
                        <p>Ornare vel eu leo nullam quis urna mollis </p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17"
                                    aria-expanded="true" aria-controls="collapse17">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>25 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
                    <div class="mail-body">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                            ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                            truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                            bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                            keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="inbox-row widget-shadow">
                <div class="mail "> <input type="checkbox" class="checkbox"> </div>
                <div class="mail"><img src="images/i4.png" alt="" /></div>
                <div class="mail mail-name">
                    <h6>Emoori</h6>
                </div>
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="true"
                    aria-controls="collapse18">
                    <div class="mail">
                        <p>Vely Ornare leo nullam quis risus mollis </p>
                    </div>
                </a>
                <div class="mail-right">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                            <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                        </a>
                        <ul class="dropdown-menu float-right">
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18"
                                    aria-expanded="true" aria-controls="collapse18">
                                    <i class="fa fa-reply mail-icon"></i>
                                    Reply
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <i class="fa fa-download mail-icon"></i>
                                    Archive
                                </a>
                            </li>
                            <li>
                                <a href="#" class="font-red" title="">
                                    <i class="fa fa-trash-o mail-icon"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mail-right">
                    <p>10 Dec</p>
                </div>
                <div class="clearfix"> </div>
                <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
                    <div class="mail-body">
                        <p>Laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua coffee nulla assumenda
                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt sapiente ea proident.</p>
                        <form>
                            <input type="text" placeholder="Reply to sender" required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
            </div>
        </div>
        @endsection