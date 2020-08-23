   <div class="row mt-5 bg-primary">
            <div class="footer">
                <div class="pull-left p-4">
			&copy; <span class="current-year"></span><span class="text-bold text-uppercase">Dhaka Metropolitan Police</span>. <span>Copyright © 2018 . SE Project Group -2</span>
		</div>
            </div>
        </div>
</div>


          <!--Data table -->
          	<!--datatable Start-->

	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.2.5/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

    <script type="text/javascript">
		$(document).ready(function() {
		  $('#example').DataTable( {
		    "bFilter": true,
		    "pageLength": 20,
		    dom: 'Bfrtip',
		    buttons: [

		              {
		              extend: 'print',
		              exportOptions: {
		              columns: ':visible'
		              },
		              customize: function(win) {
		              $(win.document.body).find( 'table' ).find('td:last-child, th:last-child').remove();
		              }
		              }
		            ],


		    columnDefs: [ {
		      targets: -1,
		      visible: true
		    } ]
		  } );
		} );
    </script>

    <!--Datatable end-->


</body>
</html>
