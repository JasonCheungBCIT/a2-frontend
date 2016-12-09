<h1 class="text-center">{pagetitle}</h1>
<hr>

<div class="col-md-4 col-md-offset-4">
    {model}
    <dl class="dl-horizontal">
        <dt>Ingredient ID</dt>
        <dd>{id}</dd>
            
        <dt>Name</dt>
        <dd>{name}</dd>
    
        <dt>Price</dt>
        <dd>{price}</dd>
    
        <dt>Type</dt>
        <dd>{type}</dd>
    
        <dt>Per Box</dt>
        <dd>{perBox}</dd>

        <dt>On Hand</dt>
        <dd>{onHand}</dd>
    </dl> 
    {/model}       
    <div class="text-center">
        <a href="{controller_url}/edit/{model}{id}{/model}" class="btn btn-primary">Edit</a>
        <a href="{controller_url}" class="btn btn-default">Return</a>     
    </div>
</div>  
   