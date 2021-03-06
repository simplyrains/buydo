
<!-- by WinEarth -->
<div class="main">
	<div class="container">
		<!-- BEGIN CONTENT -->
		<div class="row margin-bottom-40">

			<!-- BEGIN CONTENT -->
			<div class="col-md-1 col-sm-1"></div>
			<div class="col-md-10 col-sm-10">
				<h1>Confirm Payment</h1>
				<div class="content-form-page">
					<div class="row">
						<div class="col-md-9 col-sm-9">
							<form class="form-horizontal" role="form" id="form_confirm_credit" method="post" action="<?php echo site_url('transaction/createTransaction'); ?>">
								<fieldset>
									<div class="form-group">
										<label for="creditcard" class="col-lg-4 control-label">Creditcard </label>
										<label for="creditcard" class="col-lg-4 control-label"><?php echo $creditcard;?></label>
									</div>	
								</fieldset>
								<div class="row">
									<label for="description" class="col-lg-4 control-label"><?php echo $itemName;?></label>
									<label for="description" class="col-lg-4 control-label">Quantity x<?php echo $quantity;?></label>
									<label for="description" class="col-lg-4 control-label">Price THB <?php echo $price;?> </label>

								</div>
								<div class="row col-md-12 col-sm-12 pull-right">
									<label for="description" class="col-lg-12 control-label"><strong>Total THB <?php echo $price*$quantity;?></strong></label>

								</div>
								<input type="hidden" name="itemID" value="<?php echo $itemID; ?>" />
                      			<input type="hidden" name="quantity" value="<?php echo $quantity; ?>" />
								<div class="row">
									<div class="col-lg-8 col-md-offset-7 padding-left-0 padding-top-20">                        
										<button type="submit" class="btn btn-primary">Confirm</button>
										<a href=<?php echo site_url('') ?>><button type="button" class="btn btn-default">Cancel</button></a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END CONTENT -->
		</div>
		<!-- END SIDEBAR & CONTENT -->
	</div>
</div>