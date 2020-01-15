<html>

<head>
    <title>Session contatore</title>
</head>

<body>
    <%
        Integer contatore = (Integer)session.getAttribute("contatore");
        
        if( contatore == null || contatore == 0 ) 
        {
            out.println("Benvenuto e la prima volta che visiti la pagina");
            contatore = 1;
        } 
        else 
        {
            out.println("Bentornato e la "+contatore" volta che visiti la pagina");
            contatore++;
        }
        session.setAttribute("contatore", contatore);
    %>
</body>

</html>