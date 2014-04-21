<body style="background:#F6F6F6; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; margin:0; padding:0;">
<div style="background:#F6F6F6; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; margin:0; padding:0;">
<table cellspacing="0" cellpadding="0" border="0" height="100%" width="100%">
<tr>
    <td align="center" valign="top" style="padding:20px 0 20px 0">
        <!-- [ header starts here] -->
        <table bgcolor="#FFFFFF" cellspacing="0" cellpadding="10" border="0" width="650" style="border:1px solid #E0E0E0;">
            <tr>
                <td colspan="3" valign="top"><a href="{{store url=""}}"><img src="{{var logo_url}}" alt="{{var logo_alt}}" style="margin-bottom:10px;" border="0"/></a></td>
            </tr>
            
            <tr>
                <td valign="top">
					Datamarked Aps<br/>
					{{htmlescape var=$order.getCustomerName()}} <br/>
					{{htmlescape var=$order.getCustomerAddress()}} <br/>
					{{htmlescape var=$order.getCustomerCity()}} <br/>
					{{htmlescape var=$order.getCustomerState()}} <br/>
					{{htmlescape var=$order.getCustomerCountry()}} <br/>
                </td>
                <td valign="top" >
					
					{{htmlescape var=$order.getCustomerName()}} <br/>
					{{htmlescape var=$order.getCustomerAddress()}} <br/>
					{{htmlescape var=$order.getCustomerCity()}} <br/>
					{{htmlescape var=$order.getCustomerState()}} <br/>
					{{htmlescape var=$order.getCustomerCountry()}} <br/>
                </td>		
                <td valign="top" align="right">
					
					{{htmlescape var=$order.getCustomerName()}} <br/>
					{{htmlescape var=$order.getCustomerAddress()}} <br/>
					{{htmlescape var=$order.getCustomerCity()}} <br/>
					{{htmlescape var=$order.getCustomerState()}} <br/>
					{{htmlescape var=$order.getCustomerCountry()}} <br/>
                </td>
             </tr>
             
             <tr>
                <td colspan="3" valign="top"><p>&nbsp;</p></td>
             </tr>
             
                          
             <tr>
                <td valign="top">
					Datamarked Aps<br/>
					{{htmlescape var=$order.getCustomerName()}} <br/>
					{{htmlescape var=$order.getCustomerAddress()}} <br/>
					{{htmlescape var=$order.getCustomerCity()}} <br/>
					{{htmlescape var=$order.getCustomerState()}} <br/>
					{{htmlescape var=$order.getCustomerCountry()}} <br/>
                </td>
                <td valign="top" >
					
					{{htmlescape var=$order.getCustomerName()}} <br/>
					{{htmlescape var=$order.getCustomerAddress()}} <br/>
					{{htmlescape var=$order.getCustomerCity()}} <br/>
					{{htmlescape var=$order.getCustomerState()}} <br/>
					{{htmlescape var=$order.getCustomerCountry()}} <br/>
                </td>		
                <td valign="top" align="right">
					
					<h1 style="font-size:22px; font-weight:normal; line-height:22px; margin:0 0 11px 0;">RMA Barcode</h1><br />
					Side 1<br />
					{{var=$order.date}}<br />
					{{var=$order.barcode }}<br />
					RMA-nr. <span style="font-size:22px; font-weight:normal; line-height:22px; margin:0 0 0 50px;">RMA {{var=$rma.id}}</span> <br />
					Contact Person
					
                </td>
             </tr>

            <tr>
				<td colspan="3" >
					<table cellspacing="0" cellpadding="6" border="0" width="100%">
						
						<tr>
							<th style="border-top:1px solid #000000; border-bottom:1px solid #000000;">Type</th>
							<th style="border-top:1px solid #000000; border-bottom:1px solid #000000;">Nummer</th>
							<th style="border-top:1px solid #000000; border-bottom:1px solid #000000;">Beskrivelse</th>
							<th style="border-top:1px solid #000000; border-bottom:1px solid #000000;">Antal</th>
							<th style="border-top:1px solid #000000; border-bottom:1px solid #000000;">Enhedpris</th>
							<th style="border-top:1px solid #000000; border-bottom:1px solid #000000;">Belob</th>
						</tr>
						<tr>
							<td>{{var order.type}</td>
							<td>{{var order.number}}</td>
							<td>{{htmlescape var order.address}}</td>
							<td>{{var order.qty}}</td>
							<td>{{var order.price}}</td>
							<td>{{var order.discount}}</td>
						</tr>
					</table>
				</td>
            </tr>
            
            <tr>
				<td colspan="3">
					<span>Reason:</span> {{var rma.reason}} 
				</td>
            </tr>
            
            <tr>
				<td>
					&nbsp;
				</td>
				<td>
					S/N: {{var rma.serial_no}}<br>
					<h1 style="font-size:22px; font-weight:normal; line-height:22px; margin:0 0 11px 0;">
						adrress1<br>
						adrress2..<br>
						adrress3..<br>
					</h1><br>
					<h1 style="font-size:22px; font-weight:normal; line-height:22px; margin:0 0 11px 0;">
						adrress1<br>
						adrress2..<br>
						
					</h1><br>
					<p style="font-size:12px; font-weight:bold; margin:0 10px 10px 0;">{{var comment}}</p>
				</td>
				<td>
					&nbsp;
				</td>
            </tr>
            
            
            <tr>
                <td colspan="3" bgcolor="#EAEAEA" align="center" style="background:#EAEAEA; text-align:center;"><center><p style="font-size:12px; margin:0;">Thank you again, <strong>{{var store.getFrontendName()}}</strong></strong></p></center></td>
            </tr>
        </table>
    </td>
</tr>
</table>
</div>
</body>
