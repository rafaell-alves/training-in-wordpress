<form class="form-horizontal" action="<?php echo home_url('/');?>"method="get">
<div class="container">
    
    <div class="form-group">
        <input type="search" placeholder="Busca para posts" class="form-control" name="s" value="<?php get_search_query();?>">
    </div>
    <div class=" col-md form-group">
        <button class="btn btn-primary" type="submit">Procurar</butto>
    </div>
   
</div>

</form>