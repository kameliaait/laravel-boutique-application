<div class="pr-10">
  <form action="{{route('products.search')}}" class="d-flex mr-3" >
            <div class="input-group">
                <input type="text" class="form-control rounded-pill ml-15 " name="q" placeholder="Chercher des produits" value="{{request()->q }}"><span class="input-group-btn">
                   <button type="submit" class="btn btn-success rounded-circle  ">

                 <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </span>
            </div>
            
        </form>
       </div>