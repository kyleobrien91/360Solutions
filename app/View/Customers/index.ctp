<!-- Page header -->
<div class="page-header">
    <div class="page-title">
        <h3>Customers <small>All the customers that are currently registered with 360 Solutions</small></h3>
    </div>

    <div class="header-info-buttons">
        <div class="collapse" id="header-info-buttons">
            <div class="well">
                <ul class="info-buttons">
                    <li><a href="#"><i class="icon-calendar4"></i> <span>21 March 2014</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Breadcrumbs line -->
<div class="breadcrumb-line">
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Customers</li>
    </ul>
</div>
<!-- /breadcrumbs line -->


<!-- Info blocks -->
<div class="container">
    <div class="row">
        <ul class="info-blocks">
            <li class="bg-warning">
                <div class="top-info">
                    <a href="#">Add new customer</a>
                </div>
                <a href="#"><i class="icon-users"></i></a>
                <a href="#"><span class="bottom-info bg-primary">Add a new customer to the system</span></a>
            </li>
            <li class="bg-warning">
                <div class="top-info">
                    <a href="#">Add Airtime</a>
                </div>
                <a href="#"><i class="icon-phone2"></i></a>
                <a href="#"><span class="bottom-info bg-primary">Add airtime to a customer's account</span></a>
            </li>
            <li class="bg-warning">
                <div class="top-info">
                    <a href="#">Process Blacklist</a>
                </div>
                <a href="#"><i class="icon-notification"></i></a>
                <a href="#"><span class="bottom-info bg-primary">Blacklist a device attached to a customer</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- /info blocks -->

<div class="panel panel-default">
    <div class="panel-heading"><h2 class="panel-title"><i class="icon-table"></i> Customers</h2></div>
    <div class="datatable-selectable">
        <table class="table">
            <thead>
                <tr>
                    <th>ID Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>Number of Contracts</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>9101011234567</td>
                    <td>Kyle</td>
                    <td>O'Brien</td>
                    <td>obrienkyle91@gmail.com</td>
                    <td>0714912757</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu icons-right">
                                <li><a href="#"><i class="icon-spinner"></i> Access</a></li>
                                <li>
                                <?php
                                    echo $this->Html->link(
                                        '<i class="icon-pencil"></i> Edit',
                                        array('controller' => 'customers', 'action' => 'edit', 1),
                                        array('escape' => false)
                                    );
                                ?>
                                </li>
                                <li><a href="#"><i class="icon-remove3"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>8704150000000</td>
                    <td>Jamie</td>
                    <td>Joubert</td>
                    <td>jamie@360solutions.co.za</td>
                    <td>0831234567</td>
                    <td>3</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu icons-right">
                                <li><a href="#"><i class="icon-spinner"></i> Access</a></li>
                                <li>
                                    <?php
                                        echo $this->Html->link(
                                            '<i class="icon-pencil"></i> Edit',
                                            array('controller' => 'customers', 'action' => 'edit', 1),
                                            array('escape' => false)
                                        );
                                    ?>
                                </li>
                                <li><a href="#"><i class="icon-remove3"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>6589123478951</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>johndoe@unknown.com</td>
                    <td>10111</td>
                    <td>5</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu icons-right">
                                <li><a href="#"><i class="icon-spinner"></i> Access</a></li>
                                <li><a href="client_edit.html"><i class="icon-pencil"></i> Edit</a></li>
                                <li><a href="#"><i class="icon-remove3"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>9101011234567</td>
                    <td>Kyle</td>
                    <td>O'Brien</td>
                    <td>obrienkyle91@gmail.com</td>
                    <td>0714912757</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu icons-right">
                                <li><a href="#"><i class="icon-spinner"></i> Access</a></li>
                                <li><a href="client_edit.html"><i class="icon-pencil"></i> Edit</a></li>
                                <li><a href="#"><i class="icon-remove3"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>9101011234567</td>
                    <td>Kyle</td>
                    <td>O'Brien</td>
                    <td>obrienkyle91@gmail.com</td>
                    <td>0714912757</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu icons-right">
                                <li><a href="#"><i class="icon-spinner"></i> Access</a></li>
                                <li><a href="client_edit.html"><i class="icon-pencil"></i> Edit</a></li>
                                <li><a href="#"><i class="icon-remove3"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>9101011234567</td>
                    <td>Kyle</td>
                    <td>O'Brien</td>
                    <td>obrienkyle91@gmail.com</td>
                    <td>0714912757</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu icons-right">
                                <li><a href="#"><i class="icon-spinner"></i> Access</a></li>
                                <li><a href="client_edit.html"><i class="icon-pencil"></i> Edit</a></li>
                                <li><a href="#"><i class="icon-remove3"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>9101011234567</td>
                    <td>Kyle</td>
                    <td>O'Brien</td>
                    <td>obrienkyle91@gmail.com</td>
                    <td>0714912757</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu icons-right">
                                <li><a href="#"><i class="icon-spinner"></i> Access</a></li>
                                <li><a href="client_edit.html"><i class="icon-pencil"></i> Edit</a></li>
                                <li><a href="#"><i class="icon-remove3"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>9101011234567</td>
                    <td>Kyle</td>
                    <td>O'Brien</td>
                    <td>obrienkyle91@gmail.com</td>
                    <td>0714912757</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu icons-right">
                                <li><a href="#"><i class="icon-spinner"></i> Access</a></li>
                                <li><a href="client_edit.html"><i class="icon-pencil"></i> Edit</a></li>
                                <li><a href="#"><i class="icon-remove3"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>9101011234567</td>
                    <td>Kyle</td>
                    <td>O'Brien</td>
                    <td>obrienkyle91@gmail.com</td>
                    <td>0714912757</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu icons-right">
                                <li><a href="#"><i class="icon-spinner"></i> Access</a></li>
                                <li><a href="client_edit.html"><i class="icon-pencil"></i> Edit</a></li>
                                <li><a href="#"><i class="icon-remove3"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>9101011234567</td>
                    <td>Kyle</td>
                    <td>O'Brien</td>
                    <td>obrienkyle91@gmail.com</td>
                    <td>0714912757</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu icons-right">
                                <li><a href="#"><i class="icon-spinner"></i> Access</a></li>
                                <li><a href="client_edit.html"><i class="icon-pencil"></i> Edit</a></li>
                                <li><a href="#"><i class="icon-remove3"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>9101011234567</td>
                    <td>Kyle</td>
                    <td>O'Brien</td>
                    <td>obrienkyle91@gmail.com</td>
                    <td>0714912757</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu icons-right">
                                <li><a href="#"><i class="icon-spinner"></i> Access</a></li>
                                <li><a href="client_edit.html"><i class="icon-pencil"></i> Edit</a></li>
                                <li><a href="#"><i class="icon-remove3"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>9101011234567</td>
                    <td>Kyle</td>
                    <td>O'Brien</td>
                    <td>obrienkyle91@gmail.com</td>
                    <td>0714912757</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu icons-right">
                                <li><a href="#"><i class="icon-spinner"></i> Access</a></li>
                                <li><a href="client_edit.html"><i class="icon-pencil"></i> Edit</a></li>
                                <li><a href="#"><i class="icon-remove3"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
