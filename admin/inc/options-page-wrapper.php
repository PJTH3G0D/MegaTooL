<div class="wpgel-options">

<h2>MEGA TOOL</h2>
	<div class="wpgel-bootstrap-tabs">
		<!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>

	<li role="presentation" ><a href="#home" aria-controls="home" role="tab"
	data-toggle="tab">Business Information</a></li> <li role="presentation"><a
	href="https://www.localadworks.com/local-seo-plugin/" target="_blank">Local
	SEO</a></li>
  <li role="presentation"><a href="#business-listings"
	aria-controls="business-listings" role="tab" data-toggle="tab">Business
	Listings Scan</a></li>
<li role="presentation"><a href="#upgrade"
	aria-controls="upgrade" role="tab" data-toggle="tab">Business Listings
	Aggregation</a></li>
		<!-- Tab panes --> <div class="tab-content">

			<div role="tabpanel" class="tab-pane active" id="description">

			<div class="row"> <div class="col-md-12">

			        <h3>Decription</h3>
 <a
					href="https://www.localadworks.com//"
					rel="nofollow">cellphonem3ga.com</a></i></p> <p
					class="upgrade-p"><strong>Tags:</strong> <a
					href="https://wordpress.org/plugins/tags/analytics">analytics</a>, <a
					href="https://wordpress.org/plugins/tags/business-listings">business
					listings</a>, <a
					href="https://wordpress.org/plugins/tags/ecommerce">ecommerce</a>, <a
					href="https://wordpress.org/plugins/tags/keyword-research">keyword
					research</a>,
          <a href="https://wordpress.org/plugins/tags/local-seo">local seo</a>, <a href="https://wordpress.org/plugins/tags/rank-tracking">rank
					tracking</a>,
          <a href="https://wordpress.org/plugins/tags/search-engine-optimization">searchengine optimization</a>,
          <a href="https://wordpress.org/plugins/tags/seo">seo</a>,
          <a href="https://wordpress.org/plugins/tags/social-media">social
					media</a>,
          <a href="https://wordpress.org/plugins/tags/keyword-research">SEO
					tools</a>,
          <a href="https://wordpress.org/plugins/tags/keyword-research">SEO
					audit</a>,
          <a href="https://wordpress.org/plugins/tags/keyword-research">SEO
					checker</a></p>

			  </div><!-- .col-md-6 --> </div><!-- .row -->

			</div><!-- #Description -->
      <div role="tabpanel" class="tab-pane"
			id="home">

			<div class="row"> <div class="col-md-6">
           <!-- Added php functionality-->
			  <?php if( !isset( $wpgel_localseo_name ) || $wpgel_localseo_name == ''
			  ): ?>

				<h3>Please Enter Your Business Information</h3>

					<form name="wpgel_localseo_website_form" id="scan-form"
					class="diagnostic-scan" method="post">

					<input type="hidden" name="wpgel_localseo_form_submitted" value="Y">

						<table class="form-table"> <tr valign="top"> <td><label
						for="wpgel_localseo_name">Business Name</label> <br /><input
						name="wpgel_localseo_name" id="wpgel_localseo_name" type="text"
						value="" class="regular-text" placeholder="Business Name" /></td>
						<td><label for="wpgel_localseo_address">Address</label> <br /><input
						name="wpgel_localseo_address" id="wpgel_localseo_address"
						type="text" value="" class="regular-text" placeholder="Business
						Address" /></td> </tr> <tr valign="top"> <td><label
						for="wpgel_localseo_state">Business Phone Number</label> <br
						/><input name="wpgel_localseo_phone" id="wpgel_localseo_phone"
						type="text" value="" class="regular-text" placeholder="Business
						phone Code" /></td> <td><label
						for="wpgel_localseo_city">City</label> <br /><input
						name="wpgel_localseo_city" id="wpgel_localseo_city" type="text"
						value="" class="regular-text" placeholder="Business City" /></td>
						</tr> <tr valign="top"> <td><label
						for="wpgel_localseo_website">Website</label> <br /><input
						name="wpgel_localseo_website" id="wpgel_localseo_website"
						type="text" value="" class="regular-text"
						placeholder="http://www.wpgel.com" /></td> <td><label
						for="wpgel_localseo_state">State</label> <br /><input
						name="wpgel_localseo_state" id="wpgel_localseo_state" type="text"
						value="" class="regular-text" placeholder="Business State" /></td>
						</tr> <tr valign="top"> <td></td> <td><label
						for="wpgel_localseo_state">Zip</label> <br /><input
						name="wpgel_localseo_zip" id="wpgel_localseo_zip" type="text"
						value="" class="regular-text" placeholder="Business Zip Code"
						/></td> </tr> </table>

						<h3>Google Accounts</h3>

						<table class="form-table"> <tr valign="top"> <td><label
						for="wpgel_localseo_googleplus">Google+ Page ID</label> <br /><input
						name="wpgel_localseo_googleplus" id="wpgel_localseo_googleplus"
						type="text" value="" class="regular-text"
						placeholder="114423817099513339464" /></td> <td></td> <td><label
						for="wpgel_localseo_youtube">YouTube Channel Name</label> <br
						/><input name="wpgel_localseo_youtube" id="wpgel_localseo_youtube"
						type="text" value="" class="regular-text"
						placeholder="gregsmithequipment" /></td> </tr> <tr valign="top">
						<td><input class="btn btn-primary" type="submit" id="scan-submit"
						name="wpgel_localseo_website_submit" value="Save" /></td> </tr>
						</table>

					</form>
        <!-- Added Php function -->
				<?php else: ?>

				<h3>Business Information</h3>

				<p>Your Business Information has been saved.<br /><br />You can change
				this information at any time by editing the fields below and clicking
				the "Update" button.</p>

					<form name="wpgel_localseo_website_form" method="post" action="">

					<input type="hidden" name="wpgel_localseo_form_submitted" value="Y">

						<table class="form-table"> <tr valign="top"> <td><label
						for="wpgel_localseo_name">Business Name</label> <br /><input
						name="wpgel_localseo_name" id="wpgel_localseo_name" type="text"
						value="<?php echo $wpgel_localseo_name; ?>" /></td> <td><label
						for="wpgel_localseo_address">Address</label> <br /><input
						name="wpgel_localseo_address" id="wpgel_localseo_address"
						type="text" value="<?php echo $wpgel_localseo_address; ?>" /></td>
						</tr> <table class="form-table"> <tr valign="top"> <td><label
						for="wpgel_localseo_phone">Phone Number</label> <br /><input
						name="wpgel_localseo_phone" id="wpgel_localseo_phone" type="text"
						value="<?php echo $wpgel_localseo_phone; ?>" /></td> <td><label
						for="wpgel_localseo_city">City</label> <br /><input
						name="wpgel_localseo_city" id="wpgel_localseo_city" type="text"
						value="<?php echo $wpgel_localseo_city; ?>" /></td> </tr> <tr
						valign="top"> <td><label
						for="wpgel_localseo_website">Website</label> <br /><input
						name="wpgel_localseo_website" id="wpgel_localseo_website"
						type="text" value="<?php echo $wpgel_localseo_website; ?>" /></td>
						<td><label for="wpgel_localseo_state">State</label> <br /><input
						name="wpgel_localseo_state" id="wpgel_localseo_state" type="text"
						value="<?php echo $wpgel_localseo_state; ?>" /></td> </tr> <tr
						valign="top"> <td></td>
            <!--Added php funtion -->
             <td><label for="wpgel_localseo_zip">Zip
						Code</label> <br /><input name="wpgel_localseo_zip"
						id="wpgel_localseo_zip" type="text" value="
            <?php echo
						$wpgel_localseo_zip; ?>" /></td> </tr> </table>

						<h3>Google Accounts</h3>

						<table class="form-table"> <tr valign="top"> <td><label
						for="wpgel_localseo_googleplus">Google Plus Page ID</label> <br
						/><input name="wpgel_localseo_googleplus"
						id="wpgel_localseo_googleplus" type="text" value="<?php echo
						$wpgel_localseo_googleplus; ?>" /></td> <td><label
						for="wpgel_localseo_youtube">YouTube Channel Name</label> <br
						/><input name="wpgel_localseo_youtube" id="wpgel_localseo_youtube"
						type="text" value="<?php echo $wpgel_localseo_youtube; ?>" /></td>
						<td></td> </tr> </table>

						<br /><br />

						<table> <tr valign="top"> <td><input class="btn btn-primary"
						type="submit" name="wpgel_localseo_usename_submit" value="Update"
						/></td> </tr> </table>

					</form>

					<?php endif; ?>

				</div><!-- .col-md-6 -->

				<div class="col-md-6">

				<?php if( isset( $wpgel_localseo_name ) && $wpgel_localseo_name !== ''
				){ ?>

				<h3 class="reporting-h3">Your Business Listing on Google Maps</h3>

				<div class="google-maps-div"> <iframe width="100%" height="500px"
				frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place?q=<?php echo
				str_replace(" ","%20","$wpgel_localseo_name"); ?>%2C<?php echo
				str_replace(" ","%20","$wpgel_localseo_address"); ?>%2C%20<?php echo
				"$wpgel_localseo_city"; ?>%2C%20<?php echo "$wpgel_localseo_state";
				?>%2C%20United%20States&key=AIzaSyADCDKwoT_vjQiP_XJU84oQsR_z7umEbuo"
				allowfullscreen></iframe> </div>

				<p class="text-align-center">If your business does not show up on the
				map or shows up incorrectly it means your business is not listined
				correctly with Google.</p>

				<p class="text-align-center">To correct any errors please see the Local
				SEO Guide within your Local SEO Tools.</p>

				<?php } ?>

				</div><!-- .col-md-6 -->

			</div><!-- .row -->

			<hr />

			<div class="row"> <div class="col-md-6">

			  <?php if( isset( $wpgel_localseo_googleplus ) &&
			  $wpgel_localseo_googleplus !== '' ){ ?>

				<h3 class="reporting-h3">Google Plus Page</h3>

				<div class="reporting-div"> <script
				src="https://apis.google.com/js/platform.js" async defer></script>
          <!-- Php Function -->
				<g:page href="https://plus.google.com/
        <?php echo
				"$wpgel_localseo_googleplus";
        ?>"></g:page> </div><!-- .reporting-div-->
<!-- Php Function -->
				<?php }
        elseif( $wpgel_localseo_name !== '' ) {
          ?>
<!-- Php Function Closed -->
				<h3 class="reporting-h3">Create a Google Plus Local Business Page</h3>

				<div class="create-acct-btn"> <a class="btn btn-success
				social-media-account-btn" href="https://www.google.com/business/"
				target="_blank">Create Page</a> </div><!-- .create-acct-btn -->

				<?php } else { ?>

				<?php } ?>

			  </div><!-- .col-md-6 --> <div class="col-md-6">

				<?php if( isset( $wpgel_localseo_youtube ) && $wpgel_localseo_youtube
				!== '' ){ ?>

			  <h3 class="reporting-h3">YouTube Videos Playlist</h3>

			  <div class="youtube-videos"> <iframe
			  src="http://www.youtube.com/embed/?listType=user_uploads&list=<?php echo
			  "$wpgel_localseo_youtube"; ?>" width="100%" height="400"
			  frameBorder="0"></iframe> </div><!-- .youtube-videos -->

			  <?php } elseif( $wpgel_localseo_name !== '' ) { ?>

				<h3 class="reporting-h3">Create a YouTube Channel</h3>

				<div class="create-acct-btn"> <a class="btn btn-success
				social-media-account-btn" href="https://www.youtube.com/create_channel"
				target="_blank">Create Channel</a> </div><!-- .create-acct-btn -->

				<?php } else { ?>

				<?php } ?>

			  </div><!-- .col-md-6 --> </div><!-- .row -->

			</div><!-- #home -->

			<div role="tabpanel" class="tab-pane" id="local-seo-operations">

				<h3>Local SEO Tools and Reporting</h3>

					<div class="local-seo-opperations-div"> <iframe
					name="local-seo-opperations-iframe"
					src="https://www.localadworks.com/local-seo-plugin/"></iframe> </div>

			</div><!-- #local-seo-operations -->

			<div role="tabpanel" class="tab-pane" id="business-listings">

				<h3>Scan Business Listings</h3>

					<p class="upgrade-p"><strong>Please Note:</strong>  By creating you
					listing only once you can automatically create, correct and aggregate
					your business listing on over 50 of the top Business listing websites
					online like Yelp, Yahoo Local Business, YP.com and many more.  You
					will also be able to post to all your local listings at once with
					fresh information and content like announcements, coupons, deals,
					special events and more.  For these Plugin Features you will need a
					<strong>Local SEO + Business Listings Account</strong> or a
					<strong>SEO Full Service Account</strong>.  For more informationplease
					click on the <strong>Upgrade Tab</strong>.</p>

				<div class="row">

				  <div class="col-md-6">

						<form name="local-listing-scan" target="local-listing-scan"
						id="scan-form" class="diagnostic-scan"
						action="https://www.optimizelocation.com/partner/localadworks/listing-report.html"
						method="post">

							<table class="form-table display-none"> <tr valign="top">
							<td><label for="business_name">Business Name</label></td>
							<td><input type="text" id="scan-name" class="required
							validate[required]" name="name" value="<?php echo
							$wpgel_localseo_name; ?>" ></td> </tr> <tr valign="top">
							<td><label for="address">Address</label></td> <td><input
							type="text" id="scan-address" class="required validate[required]"
							name="address" value="<?php echo $wpgel_localseo_address;
							?>"></td> </tr> <tr valign="top"> <td><label
							for="city">City</label></td> <td><input type="text" id="scan-city"
							name="city" value="<?php echo $wpgel_localseo_city; ?>"></td>
							</tr> <tr valign="top"> <td><label for="state">State</label></td>
							<td><input type="text" id="scan-state" name="state" value="<?php
							echo $wpgel_localseo_state; ?>"></td> </tr> <tr valign="top">
							<td><label for="zip">Zip</label></td> <td><input type="text"
							id="scan-zip" class="required validate[funcCall[zipcode]]"
							name="zip" value="<?php echo $wpgel_localseo_zip; ?>"></td> </tr>
							<tr valign="top"> <td><label for="phone">Phone Number</label></td>
							<td><input type="text" id="scan-phone-fullLine" class="required
							validate[funcCall[phoneUS]]" stype="tel" name="phone" value="<?php
							echo $wpgel_localseo_zip; ?>"></td> <tr valign="top"> <td><label
							for="wpgel_localseo_website">Website</label></td> <td><input
							name="wpgel_localseo_website" id="wpgel_localseo_website"
							type="text" class="regular-text" value="<?php echo
							$wpgel_localseo_website; ?>" /></td> </tr> </table>

							<input class="btn btn-success scan-business-listings-btn"
							type="submit" id="scan-submit"
							name="wpgel_localseo_website_submit" value="Run Business Listings
							Scan" data-toggle="collapse" data-target="#collapseBusinessScan"
							aria-expanded="false" aria-controls="collapseBusinessScan" />

						</form>

				</div><!-- .col-md-6 -->

				<div class="col-md-6">

				</div><!-- .col-md-6 -->

				</div><!-- .row -->

					<div class="local-listing-scan collapse" id="collapseBusinessScan">
					<iframe name="local-listing-scan"
					src="https://www.optimizelocation.com/partner/localadworks/diagnostic.html"></iframe>
					</div>

			</div><!-- #business-listings -->

			<div role="tabpanel" class="tab-pane" id="manage-listings">

				<h3>Manage Listings</h3>

					<div id="manage-business-listings"> <iframe
					src="https://localadworks.optimizelocation.com"></iframe> </div>

			</div><!-- .manage-listings -->

			<div role="tabpanel" class="tab-pane" id="upgrade">

			<h3>Create, Correct and Aggregate Your Local Listings</h3>

				<div class="information-div">

					<p class="upgrade-p">Upgrade your account to a <strong>Local SEO +
					Business Listings</strong> or <strong>SEO Full Service
					Account</strong> and get the full power of the <strong>Local SEO and
					Business Listings Wordpress Plugin</strong>.</p>

					<p class="upgrade-p">To upgrade your account please click on the
					<strong>Upgrade Tab</strong>.

					<h3>Local Listings Benefits of an Upgraded Account</h3>

					<ol> <li><strong>Create Missing Business Listings or Correct Listing
					Errors</strong> - With a upgraded account you will be able to supply
					your business listing information once and automatically create any
					missing listings or correct any listing errors found in the Business
					Listings Scan.  This feature alone will save you hours of tedious work
					and dramatically increase your website's rankings by giving your
					business legitimacy in the eyes of the search engines.  Your website
					and business information will also be found across the internet
					wherever potential clients and customers are looking. <br /><br />
					<button type="button" class="btn btn-primary btn-md preview-btn"
					data-toggle="modal" data-target="#business-listings-preview">Preview
					Listings Management</button></li> <div class="modal fade"
					id="business-listings-preview" tabindex="-1" role="dialog"
					aria-labelledby="business-listings-previewLabel"> <div
					class="modal-dialog modal-lg" role="document"> <div
					class="modal-content"> <div class="modal-header"> <button
					type="button" class="close" data-dismiss="modal"
					aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="business-listings-previewLabel">Business
					Listings Management</h4> </div> <div class="modal-body"> <img
					class="modal-images aligncenter" src="<?php echo $wpgel_plugin_url .
					'images/manage-local-listings-tab.jpg'; ?>"> <img class="modal-images
					aligncenter" src="<?php echo $wpgel_plugin_url .
					'images/manage-local-listings-tab-2.jpg'; ?>"> </div> <div
					class="modal-footer"> <button type="button" class="btn btn-default"
					data-dismiss="modal">Close</button> </div> </div> </div> </div>
					<li><hr /><strong>Manage Your Social Networks and Listings</strong> -
					Manage your Social Networks and Listing Pages across all networks from
					one page.  Post updates, events, links videos and more to any or all
					of you Business Citation Networks with a click of the mouse.  One of
					the many factors search enigines look at when rankings businesses for
					local results is the volume and quality of content a business has on
					their listings page.  A premium account will allow you to easily
					supply, aggregate and update this content. <br /><br /> <button
					type="button" class="btn btn-primary btn-md preview-btn"
					data-toggle="modal" data-target="#listing-content-preview">Preview
					Citation Management</button></li> <div class="modal fade"
					id="listing-content-preview" tabindex="-1" role="dialog"
					aria-labelledby="listing-content-previewLabel"> <div
					class="modal-dialog modal-lg" role="document"> <div
					class="modal-content"> <div class="modal-header"> <button
					type="button" class="close" data-dismiss="modal"
					aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="listing-content-previewLabel">Manage Your
					Social Netwirks and Listings</h4> </div> <div class="modal-body"> <img
					class="modal-images aligncenter" src="<?php echo $wpgel_plugin_url .
					'images/update-accounts.jpg'; ?>"> </div> <div class="modal-footer">
					<button type="button" class="btn btn-default"
					data-dismiss="modal">Close</button> </div> </div> </div> </div>
					<li><hr /><strong>Monitor Business Reviews</strong> - Monitor your
					business reviews across all your listing Citation Networks.  You will
					be able to promote your positive reviews on your website and other
					listing sites to increase their viability, SEO impact, and exposure.
					You will also be able to monitor for negative reviews about your
					business and immediately respond to them, reach a resolution with the
					client or customer, and have them removed.  <br /><br /> <button
					type="button" class="btn btn-primary btn-md preview-btn"
					data-toggle="modal" data-target="#monitor-reviews">Preview Review
					Monitor</button></li> <div class="modal fade" id="monitor-reviews"
					tabindex="-1" role="dialog" aria-labelledby="monitor-reviewsLabel">
					<div class="modal-dialog modal-lg" role="document"> <div
					class="modal-content"> <div class="modal-header"> <button
					type="button" class="close" data-dismiss="modal"
					aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="monitor-reviewsLabel">Monitor Reviews</h4>
					</div> <div class="modal-body"> <img class="modal-images aligncenter"
					src="<?php echo $wpgel_plugin_url . 'images/monitor-reviews.jpg'; ?>">
					</div> <div class="modal-footer"> <button type="button" class="btn
					btn-default" data-dismiss="modal">Close</button> </div> </div> </div>
					</div> <li><hr /><strong>Increased Local SEO Tools and Reporting
					Capabilities</strong> - Upon upgrading you will immediately be able to
					access the below additional capabilities for you plugin's SEO Tools
					and Reporting.  This will supercharge your ability to out rank your
					competitors in Local Search. <br /><br />

						<table class="pricing" width="100%"> <tbody> <tr> <td
						bgcolor="#f5f5f5" width="50%"> <h4>Power Listings 110 + Business
						Citations</h4> </td> <td bgcolor="#f5f5f5" width="50%"></td> </tr>
						<tr> <td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Premium Power Listing Licoal SEO
						Plugin</strong></td> <td style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Power Listing Suite & Reporting</strong></td>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Creation of 110 + Business
						Listings</strong></td> <td style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Correction of Information of 110 + Business
						Listings</strong></td> <td style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Location Content Management</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Local Product, Services, Events and Menu Item
						Aggregation and Submission</strong></td> <td style="border-bottom:
						1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Business Review Monitoring and
						Reporting</strong></td> <td style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr>
						</tbody> </table>

						<table class="pricing" width="100%"> <tbody> <tr> <td
						style="border-bottom: 1px dotted black;" width="50%"> <h4>SEO Road
						Map</h4> </td> <td style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes -
						<strong>Actionable</strong></strong></center></td> </tr> </tbody>
						</table>

						<table class="pricing" width="100%"> <tbody> <tr> <td
						bgcolor="#f5f5f5" width="50%"> <h4>Local SEO Suite - Account
						Limits</h4> </td> <td bgcolor="#f5f5f5" width="50%"></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Number of Websites</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>1</strong></center></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;" width="50%"><strong>Max
						Number of Keywords - Rank Tracking</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>100</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;" width="50%"><strong>Max
						Number of Search Engines</strong></td> <td style="border-bottom: 1px
						dotted black;" width="50%"><center><strong>5</strong></center></td>
						</tr> <tr> <td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Search Engine Results Pages Scan
						Depth</strong></td> <td style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>3</strong></center></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;" width="50%"><strong>Max
						Number of Analyzed Competitor's Rankings </strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>7</strong></center></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;" width="50%"><strong>Max
						Number of Backlinks Analyzed</strong></td> <td style="border-bottom:
						1px dotted black;"
						width="50%"><center><strong>5,000</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;" width="50%"><strong>Max
						Number of Competitors in Backlink Report</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>4</strong></center></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;" width="50%"><strong>Max
						Number of Competitors in Backlink Spy</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>5</strong></center></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;" width="50%"><strong>Max
						Number of Competitor Backlinks Analyzed</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>1,000</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;" width="50%"><strong>SEO
						Technical Audit Max Pages</strong></td> <td style="border-bottom:
						1px dotted black;"
						width="50%"><center><strong>1,000</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;" width="50%"><strong>Max
						Number of Analyzed Landing Pages</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>100</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;" width="50%"><strong>Web
						Buzz Monitoring Keyword Terms</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>20</strong></center></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><strong>Backlink Watch Scans</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>2 / Month</strong></center></td> </tr>
						</tbody> </table> <table class="pricing" width="100%"> <tbody> <tr>
						<td bgcolor="#f5f5f5" width="50%"> <h4>Website Submissions</h4>
						</td> <td bgcolor="#f5f5f5" width="50%"></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;" width="50%"><strong>Local
						Directories - Citations</strong></td> <td style="border-bottom: 1px
						dotted black;" width="50%"><center><strong>Up To
						65</strong></center></td> </tr> <tr> <td style="border-bottom: 1px
						dotted black;" width="50%"><strong>Standard SE
						Directories</strong></td> <td style="border-bottom: 1px dotted
						black;" width="50%"><center><strong>Up To 35</strong></center></td>
						</tr> <tr> <td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Content Directories</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Up To 41</strong></center></td> </tr>
						<tr> <td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Blog Directories</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Up To 34</strong></center></td> </tr>
						<tr> <td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Auto SE Directories</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Up To 38</strong></center></td> </tr>
						</tbody> </table> <table class="pricing" width="100%"> <tbody> <tr>
						<td bgcolor="#f5f5f5" width="50%"> <h4>Competitor Metrics</h4> </td>
						<td bgcolor="#f5f5f5" width="50%"></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><strong>Competitor Traffic Tool</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Competitor Link Profile Tool</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Competitor Social Citation Tool</strong></td>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Competitor Rank Tracking Tool</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr>
						</tbody> </table> <table class="pricing" width="100%"> <tbody> <tr>
						<td bgcolor="#f5f5f5" width="50%"> <h4>Keyword Research</h4> </td>
						<td bgcolor="#f5f5f5" width="50%"></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;" width="50%"><strong>Keyword
						Research Tool</strong></td> <td style="border-bottom: 1px dotted
						black;" width="50%"><center><strong>Yes</strong></center></td> </tr>
						<tr> <td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Competitor Keyword Spy</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td width="50%"><strong>Webmasters Keyword Tool</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr>
						</tbody> </table> <table class="pricing" width="100%"> <tbody> <tr>
						<td bgcolor="#f5f5f5" width="50%"> <h3>Site Technical Audit</h3>
						</td> <td bgcolor="#f5f5f5" width="50%"></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;" width="50%"><strong>Local
						SEO On-Page Analysis</strong></td> <td style="border-bottom: 1px
						dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr>
						</tbody> </table> <table class="pricing" width="100%"> <tbody> <tr>
						<td bgcolor="#f5f5f5" width="50%"> <h4>On-Page Optimization</h4>
						</td> <td bgcolor="#f5f5f5" width="50%"></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;" width="50%"><strong>On-Page
						Issues Analysis Tool</strong></td> <td style="border-bottom: 1px
						dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Landing Page Analysis Tool</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Page Speed Analysis Tool</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Mobile Analysis Tool</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Popular Pages Analysis Tool</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr>
						</tbody> </table> <table class="pricing" width="100%"> <tbody> <tr>
						<td bgcolor="#f5f5f5" width="50%"> <h4>Internal Links</h4> </td> <td
						bgcolor="#f5f5f5" width="50%"></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><strong>Internal Link Optimization</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Link Text Analysis</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Page Authority Analysis</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Landing Page Analysis</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr>
						</tbody> </table> <table class="pricing" width="100%"> <tbody> <tr>
						<td bgcolor="#f5f5f5" width="50%"> <h4>Link Building</h4> </td> <td
						bgcolor="#f5f5f5" width="50%"></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;" width="50%"><strong>Manual,
						High Quality Link Building</strong></td> <td style="border-bottom:
						1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Current Link Quality Tool</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Toxic Link Tools</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Toxic Link Reporting To SE's</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr>
						</tbody> </table> <table class="pricing" width="100%"> <tbody> <tr>
						<td bgcolor="#f5f5f5" width="50%"> <h4>Social Metrics</h4> </td> <td
						bgcolor="#f5f5f5" width="50%"></td> </tr> <tr> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><strong>Facebook Insights</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Social Media Citation Building</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;" width="50%"><strong>Web
						Buzz Monitoring Tool</strong></td> <td style="border-bottom: 1px
						dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr> <tr>
						<td style="border-bottom: 1px dotted black;"
						width="50%"><strong>Social Engagement Tool</strong></td> <td
						style="border-bottom: 1px dotted black;"
						width="50%"><center><strong>Yes</strong></center></td> </tr>
						</tbody> </table>

						</li> </ol>

					<br /><br />

					<hr />

				</div><!-- .information-div -->

			</div><!-- #upgrade -->

			<div role="tabpanel" class="tab-pane" id="how-to-videos">

				<h3>How To Videos</h3>

					<p class="upgrade-p">Below you will find an ever growing Play List of
					Local SEO and Plugin How To Videos.  More are being added daily, so
					please continue to check this tab.</p>

				<h3>Local SEO Tutorials</h3>

					The <strong>Local SEO Videos</strong> are an ever growing collection
					of tutorials, discussions, strategies and much more on the topics of
					Local Search Engine Optimization and Internet Marketing.  Click
					<strong>PLAYLIST</strong> in the upper left hand corner of the video
					player to scroll through the available videos.  The videos are in
					order from most recently added to oldest to make it easy for you to
					get the latest information on a daily basis.</p>

					<div class="how-to--youtube-videos-div"> <iframe width="650"
					height="400"
					src="https://www.youtube.com/embed/videoseries?list=PLV3IL9QBL7J5Yi5ubMVumBCHSXrSfZO93"
					frameborder="0" allowfullscreen></iframe> </div>

				<h3>Plugin tutorials</h3>

					<p class="upgrade-p"><strong>Please Note:</strong> Much of the
					functionality depicted in the tutorial videos require an upgraded
					account.  To upgrade your account for as little as $14.99 per month,
					please click on the <strong>Local SEO Tab</strong> and log in to your
					account.  To follow along with the tutorials you can switch tabs back
					and forth without the video reloading, or you can click the YouTube
					icon in the lower right hand corner of the player to open the video in
					a new tab.  Click <strong>PLAYLIST</strong> in the upper left hand
					corner of the video player to scroll through the available videos.</p>

					<div class="how-to--youtube-videos-div"> <iframe width="650"
					height="400"
					src="https://www.youtube.com/embed/videoseries?list=PLG03K8N3fOP87NlijeP9ExB2p4lT-Kqzg"
					frameborder="0" allowfullscreen></iframe> </div>

			</div><!-- .manage-listings -->

			<div role="tabpanel" class="tab-pane" id="contact">

					<div class="local-seo-opperations-div"> <iframe
					name="local-seo-opperations-iframe"
					src="https://www.localadworks.com/contact-us/"></iframe> </div>

			</div><!-- .manage-listings -->

			<div role="tabpanel" class="tab-pane" id="upgrade-plugin">

					<div class="local-seo-opperations-div"> <iframe
					name="local-seo-opperations-iframe"
					src="https://www.localadworks.com/local-seo-plugin/upgrade-account-premium-plugin/"></iframe>
					</div>

			</div><!-- .manage-listings --> <div role="tabpanel" class="tab-pane"
			id="faq">

			<div class="row"> <div class="col-md-12">

			        <h3>FAQ</h3> <p class="upgrade-p"><strong>Do I need to be an SEO
			        expert to utilize this Plugin?</strong></p> <p
			        class="upgrade-p">No, SEO expertise is NOT required to utilize
			        this Plugin and optimize your website for Local Search. In fact by
			        using this plugin and following the Step by Step Local SEO Guide
			        we will walk you through the entire process and with a little
			        effort you can learn to become an SEO expert.</p> <p
			        class="upgrade-p"><strong>Can I change my business
			        information?</strong></p> <p class="upgrade-p">Yes, simply make
			        any changes under the Business Information tab and click update to
			        recheck your listing results.</p> <p class="upgrade-p"><strong>Do
			        you offer support for the free version of the Plugin?</strong></p>
			        <p class="upgrade-p">Yes. We are here to help. Just post you
			        question under the support tab within the WordPress Repo on our
			        Plugin page or, for the fastest results visit this resource where
			        you can contact us immediately and find out more: <a
			        href="https://www.localadworks.com/contact-us/"
			        target="_blank">Contact Us</a> </p>
			  </div><!-- .col-md-6 --> </div><!-- .row -->

			</div><!-- #Faq -->

	</div><!-- .bootstrap-tabs -->

</div><!-- ,wpgel-options -->
