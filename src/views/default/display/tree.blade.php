@if ($creatable)
	<a class="btn btn-primary navbar-btn" href="{{ $createUrl }}"><i class="fa fa-plus"></i> {{ trans('admin::lang.table.new-entry') }}</a>
@endif
<div class="dd nestable" data-url="{{ $url }}/reorder">
	<ol class="dd-list">
		@include('admin::default.display.tree_children', ['children' => $items])
	</ol>
</div>