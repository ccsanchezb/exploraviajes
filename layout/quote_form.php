<form class="form-inline" role="form" method="post" action="" id="quote_form">
    <div class="form-group" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo">
        <div class="input-group">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-user"></span>
            </div>
            <input class="form-control input-sm" type="text" name="names" placeholder="Nombres">
        </div>
    </div>
    <div class="form-group" data-toggle="tooltip" data-placement="top" title="Ingrese su correo electronico">
        <div class="input-group">
            <div class="input-group-addon">@</div>
            <input class="form-control input-sm" type="email" name="email" placeholder="Email">
        </div>
    </div>
    <div class="form-group" data-toggle="tooltip" data-placement="top" title="Telefono de contacto">
        <div class="input-group">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-earphone"></span>
            </div>
            <input class="form-control input-sm" type="number" name="phone" placeholder="Telefono">
        </div>
    </div>
    <div class="form-group" data-toggle="tooltip" data-placement="top" title="Seleccione su destino">
        <div class="input-group">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-plane"></span>
            </div>
            <select name="destino" id="" class="form-control input-sm">
                <option value="">Destino</option>
                <option value="">Amazonas</option>
                <option value="">San Andres</option>
                <option value="">Panama</option>
            </select>
        </div>
    </div>
    <div class="form-group" data-toggle="tooltip" data-placement="top" title="Elija su fecha de salida">
        <div class="input-group">
            <div class="input-group-addon" for="">
                <span class="glyphicon glyphicon-calendar"></span>
            </div>
            <input type="date" class="form-control input-sm" id="salida" name="fecha_salida">
        </div>
    </div>
    <div class="form-group" data-toggle="tooltip" data-placement="top" title="Elija su fecha de llegada">
        <div class="input-group">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </div>
            <input type="date" class="form-control input-sm" name="fecha_llegada">
        </div>
    </div>
    <div class="form-group" data-toggle="tooltip" data-placement="top" title="Ingrese el número de adultos">
        <div class="input-group">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-plus"></span>
            </div>
            <input type="number" class="form-control input-sm" name="adultos" placeholder="Número de adultos">
        </div>
    </div>
    <div class="form-group" data-toggle="tooltip" data-placement="top" title="Ingrese el número de niños">
        <div class="input-group">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-plus"></span>
            </div>
            <input type="number" class="form-control input-sm" name="ninos" placeholder="Número de niños">
        </div>
    </div>
    <div class="form-group" data-toggle="tooltip" data-placement="top" title="Ingrese el número de bebés">
        <div class="input-group">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-plus"></span>
            </div>
            <input type="number" class="form-control input-sm" name="bebes" placeholder="Número de bebes">
        </div>
    </div>
    <div class="form-group" data-toggle="tooltip" data-placement="top" title="Ingrese el número de bebés">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
</form>