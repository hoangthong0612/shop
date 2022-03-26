@extends('admin.layouts.app')

@section('panel')


    <div class=" row d-flex align-items-center mb-30 justify-content-between">
      <div class="col-lg-6 col-sm-6">
          <h4 class="pagetitle">Data Tables</h4>
      </div>
      <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 d-flex justify-content-end">
            <button class="btn btn-sm btn-primary add"> <i class="fa-solid fa-plus"></i> Thêm mới</button>

      </div>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive-md table-responsive ">
                    <table class="table ">
                  <thead class="bg-primary text-white border-0">
                    <tr class="border-0">
                      <th scope="col">STT</th>
                      <th scope="col">Thể loại</th>
                      <th scope="col">Tình trạng</th>
                      <th scope="col">Trạng thái</th>
                    </tr>
                  </thead>
                  <tbody>
                     @forelse($categories as $key => $category)
                                <tr>
                                    <td data-label="@lang('Sl')">{{ $key + 1 }}</td>
                                    <td data-label="@lang('Name')">{{ __($category->name) }}</td>
                                    <td data-label="@lang('Status')">
                                         <div class="__status_switch form-check form-switch" data-action="{{ route('admin.category.status.change', $category->id) }}" data-status="{{ $category->status }}" data-id="{{ $category->id }}">
                                    </div>
                                    </td>
                                    <td data-label="@lang('Action')">
                                        <button type="button" class="icon-btn edit" data-toggle="tooltip" data-category="{{ json_encode($category->only('id', 'name')) }}" data-original-title="Edit">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </td>
                                </tr>
                    @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                </tr>
                    @endforelse

                  </tbody>
                </table>

                </div>
            
                <div class="card-footer py-4">
                    {{ $categories->links('admin.partials.paginate') }}
                </div>
            </div>
          </div>

        </div>
      </div>
    </section>

@push('modal')
    <div id="modal" class="modal fade"  tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('New Category')</h5>
                    <button type="button " class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="">
                    @csrf
                    <div class="modal-body">
                        <input class="form-control plan_id" type="hidden" name="id">
                        <div class="form-group">
                            <label class="font-weight-bold"> @lang('Name') :</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">@lang('Cancel')</button>
                        <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                    </div>
                </form>

            </div>
        </div>
    </div> 

@endpush






@endsection

@push('script')
<script>
    "use strict";
    (function($) {
        $('.edit').on('click', function() {
            var modal = $('#modal');
            let action = "{{ route('admin.category.update', ':id') }}";
            let category = JSON.parse($(this).attr('data-category'));
            $(modal).find('.modal-title').text("@lang('Edit Category')")
            $(modal).find('button[type=submit]').text("@lang('Update')")
            $(modal).find('input[name=name]').val(category.name)
            $(modal).find('form').attr('action', action.replace(':id', category.id))
            console.log(category.id);
            modal.modal('show');
        });

        $('.add').on('click', function() {
            var modal = $('#modal');
            let action = "{{ route('admin.category.store') }}";
            $(modal).find('form').trigger("reset");
            $(modal).find('form').attr('action', action);
            $(modal).find('.modal-title').text("@lang('New Category')")
            $(modal).find('button[type=submit]').text("@lang('Save')")
            modal.modal('show');
        });
    })(jQuery);

</script>


<script src="{{ asset('assets/admin/js/status-switch.js') }}"></script>

@endpush

