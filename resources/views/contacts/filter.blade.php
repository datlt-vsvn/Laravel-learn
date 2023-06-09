<div class="row">
    <div class="col-md-12">
        <form>
            <div class="row">
                <div class="col">
                    <input type="hidden" class="trash" name="trash" value="{{ request()->query('trash') }}">
                </div>
                <div class="col-md-2">
                    <a href="{{ request()->fullUrlWithQuery(["trash" => false]) }}" class="btn {{ !request()->query('trash') ? 'text-primary' : 'text-secondary' }}">All</a> |
                    <a href="{{ request()->fullUrlWithQuery(["trash" => true]) }}" class="btn {{ request()->query('trash') ? 'text-primary' : 'text-secondary' }}">Trash</a>
                </div>
                <div class="col-md-3">
                    {{-- @include("contacts.company_selection") --}}
                    {{-- @includeIf("contacts.company_selection") --}}
                    {{-- @includeWhen(!empty($companies), "contacts.company_selection") --}}
                    {{-- @includeUnless(empty($companies), 'contacts.company_selection') --}}
                    @includeUnless(empty($company_count), 'contacts.company_selection')
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" value="{{ request()->query('search') }}" id="search-input" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                        <div class="input-group-append">
                            @if (request()->filled('search') || request()->filled('company_id'))
                                <button class="btn btn-outline-secondary" type="button" onclick="document.getElementById('search-input').value = '', document.getElementById('search-select').selectedIndex = 0, this.form.submit()">
                                    <i class="fa fa-refresh"></i>
                                </button>
                            @endif
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
