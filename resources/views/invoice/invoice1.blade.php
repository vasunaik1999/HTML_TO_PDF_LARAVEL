<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Invoice Template</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			/* .invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			} */

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.total td {
				font-weight:bold;
			}
			/* .invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			} */

			/* @media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			} */

		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<!-- Again create next table || TOP HEADER -->
						<table>
							<tr>
								<td>
									<!-- <h4 style="color:red;">Book Anywhere</h4> -->
									<img src="{{public_path('/images/logo.png')}}" width="180px">
								</td>
								<td>
									<span style="font-weight:bold;">Invoice #:</span> 00123332<br>
									<span style="font-weight:bold;">Created:</span> 2 November 2021<br>
								</td>
							</tr>
						</table>
						<!-- end of first table -->
					</td>
				</tr>
				<tr class="information">
					<td colspan="2">
						<!-- Inner table starts -->
						<table>
							<tr>
								<td>
									NXG Book Anywhere Travel &<br>
									Technologies, Pvt Ltd.<br>
									{{env('OFFICE_ADDRESS_LINE_1')}}<br>
									{{env('OFFICE_ADDRESS_LINE_2')}}
								</td>
								<td>
									www.bookanywhere.in<br>	
									+91 9999999999<br>
									bookanywhere.goa@gmail.com<br>
								</td>
							</tr>
							<tr>
								<td>
									Bill To: Vasu Naik <br>
									8989898989/9090909899 <br>
									vasu@gamil.com <br>
										   
								</td>
							</tr>
						</table>
						<!-- Inner table end here -->
					</td>
				</tr>

				<!-- Payemnt Details -->
				<tr class="heading">
					<td>Payment Method</td>
					<td>Check #</td>
				</tr>
				<tr class="details">
					<td>Check</td>
					<td>109099</td>
				</tr>
				<!-- PAyemnt Details ENDS-->

				<tr class="heading">
					<td>Service</td>
					<td>Price</td>
				</tr>

				<tr class="item">
					<td>Bike Rental</td>
					<td>RS.2999/-</td>
				</tr>
				<tr class="item">
					<td>Car Rental</td>
					<td>RS.2000/-</td>
				</tr>
				<tr class="item">
					<td>Scuba Diving</td>
					<td>RS.2000/-</td>
				</tr>
				<tr class="total">
					<td></td>
					<td>Total: Rs. 6999/-</td>
				</tr>
			</table>
		</div>
	</body>
</html>