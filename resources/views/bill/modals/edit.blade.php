<div id="editBillModal" class="modal fade">
	<div class="modal-dialog">
		<form class="modal-content form-horizontal" method="POST" action="/bills/{{ $bill->id }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="PUT">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title">{{ trans('labels.bills.modals.edit.title') }}</h3>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label class="col-sm-3 control-label">{{ trans('labels.bills.properties.label') }}</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="label" value="{{ $bill->label }}" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">{{ trans('labels.bills.properties.amount') }}</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="amount" value="{{ $bill->amount }}">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">{{ trans('labels.bills.properties.start_date') }}</label>
					<div class="col-sm-8">
						<div class="input-group">
							<input type="text" class="form-control datepicker" name="start_date" value="{{ $bill->start_date }}" required>
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">{{ trans('labels.bills.properties.frequency') }}</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="frequency" value="{{ $bill->frequency }}" required>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.bills.modals.edit.close_button') }}</button>
				<button type="submit" class="btn btn-primary">{{ trans('labels.bills.modals.edit.save_button') }}</button>
			</div>
		</form>
	</div>
</div>