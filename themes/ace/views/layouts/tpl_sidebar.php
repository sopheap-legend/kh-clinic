<!--
<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <?php //echo TbHtml::linkButton('', array('url'=>Yii::app()->urlManager->createUrl('settings/index'),'color' => TbHtml::BUTTON_COLOR_DANGER,'icon'=>'ace-icon fa fa-cog','size'=> TbHtml::BUTTON_SIZE_SMALL)); ?>
        <?php //echo TbHtml::linkButton('', array('url'=>Yii::app()->urlManager->createUrl('client/admin'),'color' => TbHtml::BUTTON_COLOR_WARNING,'icon'=>'ace-icon fa fa-group','size'=> TbHtml::BUTTON_SIZE_SMALL)); ?>
        <?php //echo TbHtml::linkButton('', array('url'=>Yii::app()->urlManager->createUrl('report/SaleReportTab'),'color' => TbHtml::BUTTON_COLOR_SUCCESS,'icon'=>'ace-icon fa fa-signal','size'=> TbHtml::BUTTON_SIZE_SMALL)); ?>
        <?php //echo TbHtml::linkButton('', array('url'=>Yii::app()->urlManager->createUrl('report/SaleInvoice'),'color' => TbHtml::BUTTON_COLOR_INFO,'icon'=>'ace-icon fa fa-pencil','size'=> TbHtml::BUTTON_SIZE_SMALL)); ?>
    </div>
    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>
            <span class="btn btn-info"></span>
            <span class="btn btn-warning"></span>
            <span class="btn btn-danger"></span>
    </div>
</div><!--#sidebar-shortcuts-->
<?php 
$this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_LIST,
    'submenuHtmlOptions'=>array('class'=>'submenu'),
    'encodeLabel' => false,
    'items' => array(
            array('label'=>'<span class="menu-text">' . strtoupper(Yii::t('menu', 'Dashboard')) . '</span>', 'icon'=>'menu-icon fa fa-tachometer', 'url'=>Yii::app()->urlManager->createUrl('dashboard/view'), 'active'=>$this->id .'/'. $this->action->id=='dashboard/view'?true:false,
                    'visible'=> Yii::app()->user->checkAccess('report.index')
            ),
            array('label'=>'<span class="menu-text">'. strtoupper(Yii::t('menu','Clinc Info')) . '</span>', 'icon'=>'glyphicon glyphicon-tower','url'=>Yii::app()->urlManager->createUrl('client/admin'),
                           'active'=>$this->id=='employee' || $this->id=='clinic' || $this->id=='treatment' || $this->id=='item',
                           'visible'=> Yii::app()->user->checkAccess('store.update') || Yii::app()->user->checkAccess('clinic.index') || Yii::app()->user->checkAccess('client.index'),
                           'items'=>array(
                               array('label'=>Yii::t('menu', 'Clinic'), 'icon'=> TbHtml::ICON_HOME, 'url'=>Yii::app()->urlManager->createUrl('clinic/admin'), 'active'=>$this->id .'/'. $this->action->id=='clinic/admin',
                                   'visible'=> Yii::app()->user->checkAccess('clinic.index') || Yii::app()->user->checkAccess('clinic.create') || Yii::app()->user->checkAccess('clinic.update') || Yii::app()->user->checkAccess('clinic.delete')
                               ),
                               array('label'=>Yii::t('menu', 'Employee'), 'icon'=> TbHtml::ICON_USER, 'url'=>Yii::app()->urlManager->createUrl('employee/admin'), 'active'=>$this->id .'/'. $this->action->id=='employee/admin',
                                   'visible'=> Yii::app()->user->checkAccess('employee.index') || Yii::app()->user->checkAccess('employee.create') || Yii::app()->user->checkAccess('employee.update') || Yii::app()->user->checkAccess('employee.delete')
                               ),
                               array('label'=>Yii::t('menu', 'Treatment'), 'icon'=> TbHtml::ICON_PLUS_SIGN, 'url'=>Yii::app()->urlManager->createUrl('treatment/admin'), 'active'=>$this->id .'/'. $this->action->id=='treatment/admin',
                                   'visible'=> Yii::app()->user->checkAccess('treatment.index') || Yii::app()->user->checkAccess('treatment.create') || Yii::app()->user->checkAccess('treatment.update') || Yii::app()->user->checkAccess('treatment.delete')
                               ),
                               array('label'=>Yii::t('menu', 'Item'), 'icon'=> TbHtml::ICON_SHOPPING_CART, 'url'=>Yii::app()->urlManager->createUrl('Item/admin'), 'active'=>$this->id .'/'. $this->action->id=='Item/admin',
                                   'visible'=> Yii::app()->user->checkAccess('item.index') || Yii::app()->user->checkAccess('item.create') || Yii::app()->user->checkAccess('item.update') || Yii::app()->user->checkAccess('item.delete')
                               ),
            )),            
            array('label'=>'<span class="menu-text">'. strtoupper(Yii::t('menu','Patient')) . '</span>', 'icon'=>'menu-icon fa fa-group','url'=>Yii::app()->urlManager->createUrl('contact/admin'),
                           'active'=>$this->id=='priceTier' || strtolower($this->id)=='default' || $this->id=='contact' || $this->id=='settings' || $this->id=='location',
                           //'visible'=>Yii::app()->user->checkAccess('store.update'),
                           'items'=>array(
                               array('label'=>Yii::t('menu','Patient'),'icon'=> TbHtml::ICON_COG, 'url'=>Yii::app()->urlManager->createUrl('contact/index'), 'active'=>$this->id=='Patient','visible'=>Yii::app()->user->checkAccess('contact.index')),                               
            )),
            array('label'=>'<span class="menu-text">'. strtoupper(Yii::t('menu','Settings')) . '</span>', 'icon'=>'menu-icon fa fa-cogs','url'=>Yii::app()->urlManager->createUrl('settings/index'),
                           'active'=>$this->id=='priceTier' || strtolower($this->id)=='default' || $this->id=='store' || $this->id=='settings' || $this->id=='location',
                           'visible'=>Yii::app()->user->checkAccess('store.update'),
                           'items'=>array(
                               array('label'=>Yii::t('menu','Shop Setting'),'icon'=> TbHtml::ICON_COG, 'url'=>Yii::app()->urlManager->createUrl('settings/index'), 'active'=>$this->id=='settings','visible'=>Yii::app()->user->checkAccess('store.update')),                               
            )),
            array('label'=>'<span class="menu-text">' . strtoupper(Yii::t('menu', 'About US')) . '</span>', 'icon'=>'menu-icon fa fa-info-circle', 'url'=>Yii::app()->urlManager->createUrl('site/about'), 'active'=>$this->id .'/'. $this->action->id=='site/about'),
    ), 
)); 
?>

<!-- #section:basics/sidebar.layout.minimize -->
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>

<!-- /section:basics/sidebar.layout.minimize -->
<script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
</script>