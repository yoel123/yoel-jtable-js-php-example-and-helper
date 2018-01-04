

function y_jtable(selector,title,action_src,table_id,fields_obj)
{
		jt_obj = y_jtable_obj(title,action_src,table_id,fields_obj);
	    $(selector).jtable(jt_obj);
		 
        //Load  list from server
        $(selector).jtable('load');
		
		$(".ui-dialog-titlebar-close").html('<span class="ui-button-icon ui-icon ui-icon-closethick"></span><span class="ui-button-icon-space"> </span>');
	
}//end y_jtable

function y_jtable_child(title,data,selector,click_selector,action_src,table_id,fields_obj)
{
	jt_obj = y_jtable_obj(title,action_src,table_id,fields_obj);
	jt_obj.actions.listAction = action_src+'?action=show_by_id&tbl='+table_id+'&id=' + data.record.id;
	
	$(selector).jtable('openChildTable',
		click_selector.closest('tr'),
		jt_obj,
		function (data) { //opened handler
			data.childTable.jtable('load');
		});
	
}//end y_jtable_child

//example use (will implement soon i hope)
/*

        display: function (studentData) {
                       
					   //Create an image that will be used to open child table
                        var $img = $('<img src="/Content/images/Misc/phone.png" title="Edit phone numbers" />');
                      
					  //Open child table when user clicks the image
                        $img.click(function () {
                            y_jtable_child("title","actions.php",0,table_fields_obj);
							      });
                        //Return image to show on the person row
                        return $img;
                    }
                },
                  

*/



/////////////////y_jtable_obj//////////////////

function y_jtable_obj(title,action_src,table_id,fields_obj)
{
	
	obj={
            title: title,
            paging: true, //Enable paging
            pageSize: 10, //Set page size (default: 10)
            sorting: true, //Enable sorting
            defaultSorting: 'id ASC', //Set default sorting
            actions: {
                listAction: action_src+'?action=show&tbl='+table_id,
                deleteAction: action_src+'?action=deleate&tbl='+table_id,
                updateAction: action_src+'?action=edit&tbl='+table_id,
                createAction: action_src+'?action=add&tbl='+table_id
            },
            fields: fields_obj
		};
	
	return obj;
	
}//end y_jtable_obj

