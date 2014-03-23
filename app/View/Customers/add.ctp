<div class="page-header">
    <div class="page-title">
        <h3>Add new customer <small>Add a new customer to the system</small></h3>
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
        <li>
            <?php
                echo $this->Html->link(
                    'Customers',
                    array('controller' => 'customers', 'action' => 'index')
                );
            ?>
        </li>
        <li class="active">Add</li>
    </ul>
</div>
<!-- /breadcrumbs line -->
<form class="form-horizontal form-separate" action="#" role="form">
    <div class="form-group">
        <label class="col-md-2 control-label">Customer ID number</label>
        <div class="col-md-3">
            <input type="number" placeholder="ID number" class="form-control">
        </div>
        <div class="form-actions">
            <input type="submit" value="Check ID number" class="btn btn-success" onClick="$('#error-customer-exists').show();" />
        </div>
        <div id="error-customer-exists" class="panel" style="display: none">
            <div class="panel-body col-md-5">
                <div class="alert alert-warning fade in block-inner">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <i class="icon-cancel-circle"></i>
                    Customer already exists. Do you want to <?php echo $this->Html->link('capture a new application to this customer\'s account?', array('controller' => 'applications', 'action' => 'new')); ?>
                </div>
            </div>
        </div>
    </div>

</form>

<form action="#" role="form" style="display: none;">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h6 class="panel-title">
                <i class="icon-man"></i> Customer Details
            </h6>
        </div>
        <div class="panel-body">

            <!-- General information -->
            <div class="block-inner">
                <div class="block-inner">
                    <h6 class="heading-hr">
                        <i class="icon-user"></i> General information <small class="display-block">General information about the customer</small>
                    </h6>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label>First name</label>
                            <input type="text" class="form-control" placeholder="Customer's first name">
                        </div>
                        <div class="col-md-3">
                            <label>Last name</label>
                            <input type="text" class="form-control" placeholder="Customer's last name">
                        </div>
                        <div class="col-md-3">
                            <label>ID number</label>
                            <input type="number" class="form-control" placeholder="Customer's identification number">
                        </div>
                        <div class="col-md-3">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="John Doe">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Contact numbers</label>
                            <div class="input-group">
                                <span class="input-group-addon">Mobile</span>
                                <input type="phone" class="form-control" data-mask="9999999999" placeholder="Mobile number" value="0714912757">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>&nbsp;</label>
                            <div class="input-group">
                                <span class="input-group-addon">Home&nbsp;</span>
                                <input type="text" class="form-control" data-mask="9999999999" placeholder="Home telephone number" value="0214617696">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>&nbsp;</label>
                            <div class="input-group">
                                <span class="input-group-addon">Office&nbsp;</span>
                                <input type="tel" class="form-control" data-mask="9999999999" placeholder="Work telephone number">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /general information -->

            <div class="clearfix"><br /></div>
            <!-- Addresses -->
            <div class="block-inner">
                <div class="block-inner">
                    <h6 class="heading-hr">
                        <i class="icon-location3"></i>Addresses <small class="display-block">Customer work, postal and home addresses</small>
                    </h6>
                </div>

                <div class="block-inner">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-default" id="home-address">
                                    <div class="panel-heading">
                                        <h6 class="panel-title text-info">
                                            <i class="icon-home2"></i>Home Address
                                        </h6>
                                    </div>
                                    <div class="panel-body">
                                        <input type="text" class="form-control" placeholder="Address line 1" value="23 Tottenham Avenue">
                                        <input type="text" class="form-control" placeholder="Address line 2">
                                        <input type="text" class="form-control" placeholder="Suburb" value="Melrose Estate">
                                        <input type="text" class="form-control" placeholder="City" value="Johannesburg">
                                        <select name="select" class="form-control" value="opt1">
                                            <option value="opt1">Select Province</option>
                                            <option value="opt2">Gauteng</option>
                                            <option value="opt3">Western Cape</option>
                                            <option value="opt4">Kwa-Zulu Natal</option>
                                            <option value="opt5">Eastern Cape</option>
                                            <option value="opt6">Free State</option>
                                            <option value="opt7">Limpopo</option>
                                            <option value="opt8">Mpumalanga</option>
                                            <option value="opt8">North West</option>
                                            <option value="opt8">Northern Cape</option>
                                        </select>
                                        <input type="number" class="form-control" placeholder="Postal Code" value="2196">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h6 class="panel-title text-info">
                                            <i class="icon-mail3"></i>Postal Address <a href="#" class="copy-address">(same as home)</a>
                                        </h6>
                                    </div>
                                    <div class="panel-body">
                                        <input type="text" class="form-control" placeholder="Address line 1">
                                        <input type="text" class="form-control" placeholder="Address line 2">
                                        <input type="text" class="form-control" placeholder="Suburb">
                                        <input type="text" class="form-control" placeholder="City">
                                        <select name="select" class="form-control">
                                            <option value="opt1">Select Province</option>
                                            <option value="opt2">Gauteng</option>
                                            <option value="opt3">Western Cape</option>
                                            <option value="opt4">Kwa-Zulu Natal</option>
                                            <option value="opt5">Eastern Cape</option>
                                            <option value="opt6">Free State</option>
                                            <option value="opt7">Limpopo</option>
                                            <option value="opt8">Mpumalanga</option>
                                            <option value="opt8">North West</option>
                                            <option value="opt8">Northern Cape</option>
                                        </select>
                                        <input type="number" class="form-control" placeholder="Postal Code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h6 class="panel-title text-info">
                                            <i class="icon-office"></i>Work Address <a href="#" class="copy-address">(same as home)</a>
                                        </h6>
                                    </div>
                                    <div class="panel-body">
                                        <input type="text" class="form-control" placeholder="Address line 1">
                                        <input type="text" class="form-control" placeholder="Address line 2">
                                        <input type="text" class="form-control" placeholder="Suburb">
                                        <input type="text" class="form-control" placeholder="City">
                                        <select name="select" class="form-control">
                                            <option value="opt1">Select Province</option>
                                            <option value="opt2">Gauteng</option>
                                            <option value="opt3">Western Cape</option>
                                            <option value="opt4">Kwa-Zulu Natal</option>
                                            <option value="opt5">Eastern Cape</option>
                                            <option value="opt6">Free State</option>
                                            <option value="opt7">Limpopo</option>
                                            <option value="opt8">Mpumalanga</option>
                                            <option value="opt8">North West</option>
                                            <option value="opt8">Northern Cape</option>
                                        </select>
                                        <input type="number" class="form-control" placeholder="Postal Code">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /education -->
            <div class="clearfix"><br /></div>
            <!-- Work experience -->
            <div class="block-inner">
                <div class="block-inner">
                    <h6 class="heading-hr">
                        <i class="icon-accessibility"></i>Kin <small class="display-block">Customers next of kin details</small>
                    </h6>
                </div>

                <div class="block-inner">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h6 class="panel-title text-info"><i class="icon-users"></i></h6></div>
                                    <div class="panel-body">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                        <input type="tel" class="form-control" placeholder="Contact Number">
                                        <input type="text" class="form-control" placeholder="Relationship">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="well text-center">
                                        <button type="button" class="btn btn-success" id="add-kin"><i class="icon-user-plus2"></i> Add new kin</button>
                                    </div>
                                </div>
                                <div class="panel panel-default" id="second-kin" style="display: none">
                                    <div class="panel-heading">
                                        <h6 class="panel-title text-info">
                                            <i class="icon-users"></i>
                                        </h6>
                                    </div>
                                    <div class="panel-body">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                        <input type="tel" class="form-control" placeholder="Contact Number">
                                        <input type="text" class="form-control" placeholder="Relationship">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /work experience -->

            <div class="clearfix"><br /></div>
            <!-- Additions -->
            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-briefcase2"></i>Employment <small class="display-block">Customer employment information</small>
                </h6>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label>Company name</label>
                        <input type="text" class="form-control" placeholder="Customer's first name">
                    </div>
                    <div class="col-md-3">
                        <label>Years of employment</label>
                        <input type="text" class="form-control" placeholder="Customer's last name">
                    </div>
                    <div class="col-md-3">
                        <label>HR contact person</label>
                        <input type="number" class="form-control" placeholder="Customer's identification number">
                    </div>
                    <div class="col-md-3">
                        <label>HR contact number</label>
                        <input type="email" class="form-control" placeholder="John Doe">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label>Position held</label>
                        <input type="text" class="form-control" placeholder="Customer's first name">
                    </div>
                    <div class="col-md-3">
                        <label>Monthly salary</label>
                        <input type="text" class="form-control" placeholder="Customer's last name">
                    </div>
                    <div class="col-md-3">
                        <label>Salary date</label>
                        <input type="number" class="form-control" placeholder="Customer's identification number">
                    </div>
                </div>
            </div>
            <!-- /additions -->
            <div class="clearfix"><br /></div>
            <div class="block-inner">
                <h6 class="heading-hr">
                    <i class="icon-crown"></i>Banking <small class="display-block">Customer banking information</small>
                </h6>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Bank name</label>
                        <input type="text" class="form-control" placeholder="Customer's first name">
                    </div>
                    <div class="col-md-4">
                        <label>Branch</label>
                        <input type="text" class="form-control" placeholder="Customer's last name">
                    </div>
                    <div class="col-md-4">
                        <label>Branch code</label>
                        <input type="number" class="form-control" placeholder="Customer's identification number">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Account number</label>
                        <input type="text" class="form-control" placeholder="Customer's first name">
                    </div>
                    <div class="col-md-4">
                        <label>Type of account</label>
                        <input type="text" class="form-control" placeholder="Customer's last name">
                    </div>
                    <div class="col-md-4">
                        <label>Debit order date</label>
                        <input type="number" class="form-control" placeholder="Customer's identification number">
                    </div>
                </div>
            </div>

            <div class="form-actions text-left">
                <input type="submit" value="Save details" class="btn btn-success">
            </div>

        </div>
    </div>
</form>
