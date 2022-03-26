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
                      <th scope="col">Name</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                     @forelse($posts as $key => $category)
                                <tr>
                                    <td data-label="@lang('Sl')">{{ $key + 1 }}</td>
                                    <td data-label="@lang('Name')">{{ __($posts->name) }}</td>
                                    
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
                    {{ $posts->links('admin.partials.paginate') }}
                </div>
            </div>
          </div>

        </div>
      </div>
    </section>

@push('modal')


@endpush






@endsection

@push('script')




<script src="{{ asset('assets/admin/js/status-switch.js') }}"></script>

@endpush

