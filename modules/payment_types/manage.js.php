<script>
{literal}
var columns = 3;
var padding = 12;
var grid_width = $('.col').width();

grid_width = grid_width - (columns * padding);
percentage_width = grid_width / 100; 
$('#manageGrid').flexigrid
  (
    {
        url: "index.php?module=payment_types&view=xml",
        dataType: 'xml',
        colModel : [
            {display: '{/literal}{$LANG.actions}{literal}'    , name : 'actions'       , width : 10 * percentage_width, sortable : false, align: 'center'},
            {display: '{/literal}{$LANG.description}{literal}', name : 'pt_description', width : 70 * percentage_width, sortable : true , align: 'left'},
            {display: '{/literal}{$LANG.enabled}{literal}'    , name : 'enabled'       , width : 20 * percentage_width, sortable : true , align: 'center'}
        ],
        searchitems : [
            {display: '{/literal}{$LANG.id}{literal}'         , name : 'pt_id'},
            {display: '{/literal}{$LANG.description}{literal}', name : 'pt_description', isdefault: true}
        ],
        sortname: "pt_description",
        sortorder: "asc",
        usepager: true,
        pagestat: '{/literal}{$LANG.displaying_items}{literal}',
        procmsg: '{/literal}{$LANG.processing}{literal}',
        nomsg: '{/literal}{$LANG.no_items}{literal}',
        pagemsg: '{/literal}{$LANG.page}{literal}',
        ofmsg: '{/literal}{$LANG.of}{literal}',
        useRp: false,
        rp: 25,
        showToggleBtn: false,
        showTableToggleBtn: false,
        width: 'auto',
        height: 'auto'
    }
  );
{/literal}
</script>
