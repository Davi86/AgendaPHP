# Aplicação em PHP de Agenda

# # Depedencias
- Composer - gerenciador de depedencias
    Comandos:
        composer init
        login/wef
        composer update 
        config na libs/composer.json: 
            "autoload": {
                "psr-4": {
                    "Classes\\": "../../class",
                    "Models\\":"../../model"
                }
            }
- FullCalendar