<!-- page -->
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-sm-8">
		<h2><span class="text-capitalize"></span></h2>
		<ol class="breadcrumb">
			<li>
				<a href="<?= base_url(); ?>">Home</a>
			</li>
			<li class="active">
				<strong>List</strong>
			</li>
		</ol>
	</div>
	<div class="col-sm-4">
		<div class="title-action">
			<a href="<?= site_url('gallery/add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
		</div>
	</div>
</div>

<div class="wrapper wrapper-content">
	<div class="row">
		<div class="col-sm-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5><span class="text-capitalize"></span> List <small>(Please use the table below to navigate or filter the results.)</small></h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up"></i>
						</a>
					</div>
				</div>
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTablesView">
							<thead>
								<tr>
									<th width="40px">S. NO.</th>
									<th>PLANT NAME</th>
									<th>MODULE NAME</th>
									<th>STATUS</th>
									<th>ACTION</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if(count($lists) == 0) { ?>
									<tr class="text-center text-uppercase">
										<td colspan="7"><strong>NO RECORD AVAILABLE</strong></td>
									</tr>
								<?php
								} else {
									$i = 0;
									foreach ($lists as $list) {
									$i++; ?>
									<tr>
										<input type="hidden" id="controller_name" value="">
										<td>
											<span class="badge badge-info">&nbsp;<?= $i ?>.&nbsp;</span>
										</td>
										<td>
											<strong><?=  $list->plant_name ?></strong>
										</td>
										<td>
											<span class="badge badge-success"><?= $list->fk_family_id ?></span>
										</td>
										<td>
											<?php if($list->is_active == '1'): ?>
												<button class="btn btn-xs btn-warning status" value="<?= $list->plant_id ?>" data-status="<?= $list->is_active ?>" title="Deactivate"> <i class="fa fa-ban"></i> Deactivate</button>
											<?php endif; ?>
											<?php if($list->is_active == '0'): ?>
												<button class="btn btn-xs btn-success status" value="<?= $list->plant_id ?>" data-status="<? $list->is_active ?>" title="Activate"> <i class="fa fa-check"></i> Activate</button>
											<?php endif; ?>
										</td>
										<td>
											<a href="<?= site_url( '/gallery/' . $list->plant_id) ?>" class="btn btn-xs btn-info" title="Gallery">
												<i class="fa fa-picture-o fa-fw"></i>
											</a>
											<a href="<?= site_url('/edit/' . $list->plant_id) ?>" class="btn btn-xs btn-success" title="Edit">
												<i class="fa fa-pencil fa-fw"></i>
											</a>
											<button class="btn btn-xs btn-danger delete" value="<?= $list->plant_id ?>" title="Delete">
												<i class="fa fa-trash fa-fw"></i>
											</button>
											<!--?php if($this->auth->is_developer()) { ?>
												<a href="<!-?= site_url("{$this->misc->get_class_name()}/remove/" . $list->permission_id); ?>" class="btn btn-default btn-xs">DEL</a>
											<!?php } ?-->
										</td>
									</tr>
									<?php }
								} ?>
							</tbody>
							<tfoot>
								<tr>
									<th width="40px">S. NO.</th>
									<th>PLANT NAME</th>
									<th>MODULE NAME</th>
									<th>STATUS</th>
									<th>ACTION</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
