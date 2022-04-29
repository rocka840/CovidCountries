$(start);

function start(){
    $("#Countries").on("click", DropDown);
}

function DropDown(){
    $("#Countries").load("countries.php");
    let Regions = $("<select><option id='#RegionName'></option></select>");
    let Covid = $("<div id='CovidNbrs'></div>");

    $("#Region").html("");
    $("#Regions").append(Regions);

    Regions
}