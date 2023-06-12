HOLA
<!DOCTYPE html>
<html>
<head>
    <style>
    /* Estilos personalizados para la tabla */
    .container {
        width: 100%;
        max-width: 768px;
        margin: 0 auto;
        padding: 20px;
    }

    h1, h2 {
        text-align: center;
    }

    table {
        width: 85%;
        margin: 0 auto; /* Añadir esta línea para centrar la tabla */
        margin-bottom: 1rem;
        color: #212529;
        border-collapse: collapse;
        table-layout: auto; /* Cambiar de fixed a auto */
    }

    th,
    td {
        padding: 0.75rem;
        vertical-align: middle;
        border-top: 1px solid #dee2e6;
        text-align: center;
    }

    th {
        background-color: #f8f9fa;
        font-weight: bold;
    }

    /* Estilos adicionales */
    .page {
        width: 21cm;
        height: 29.7cm;
        page-break-after: always;
    }
    </style>
</head>
<body>
<div class="page">
    <div class="container">
        <h1>Reporte de proyectos creados</h1>
        <h2>Ministerio de Innovación de El Salvador</h2>
        
        <table>
            <thead>
                <tr>
                    <th>Nombre del proyecto</th>
                    <th>Fuente de fondos</th>
                    <th>Monto planificado</th>
                    <th>Monto patrocinado</th>
                    <th>Monto de fondos propios</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->NombreProyecto }}</td>
                        <td>{{ $proyecto->fuenteFondos }}</td>
                        <td>{{ $proyecto->MontoPlanificado }}</td>
                        <td>{{ $proyecto->MontoPatrocinado }}</td>
                        <td>{{ $proyecto->MontoFondosPropios }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
    
</body>
</html>
