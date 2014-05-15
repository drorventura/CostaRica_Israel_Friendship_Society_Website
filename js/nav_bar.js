document.body.className='en';

document.write("\
                <div id=\"main_header\">\
                    <div id=\"container_upper\">\
                        <div id=\"left_box_logo\">\
                            <img id=\"logo\" src=\"img/logo.png\" alt=\"CR_IL_logo\" width=\"90\" height=\"45\">\
                        </div>\
                        <div id=\"right_box_text\">\
                            <div id=\"company_he\" dir=\"rtl\"> אגודת ידידות קוסטה-ריקה ישראל </div>\
                            <div id=\"company_en\" dir=\"rtl\"> Costa-Rica Israel Friendship Association </div>\
                        </div>\
                    </div>\
                    <nav>\
                        <ul>\
                            <li>\
                                <a href=\"index.html\" lang=\"en\"'> Home</a>\
                                <a href=\"index.html\" lang=es> Inicio</a>\
                            </li>\
                            <li>\
                                <a href=\"about.html\" lang=\"en\"> About us</a>\
                                <a href=\"about.html\" lang=\"es\"> Sobre Nosotros</a>\
                            </li>\
                            <li>\
                                <a href=\"events.html\" lang=\"en\"> Events</a>\
                                <a href=\"events.html\" lang=\"es\"> Eventos</a>\
                            </li>\
                            <li>\
                                <a href=\"subscribe.html\" lang=\"en\"> Subscribe</a>\
                                <a href=\"subscribe.html\" lang=\"es\"> Suscribir</a>\
                            </li>\
                            <li>\
                                <a href=\"contest.html\" lang=\"en\"> Know Costa Rica Contest</a>\
                                <a href=\"contest.html\" lang=\"es\"> Costa Rica Concurso</a>\
                            </li>\
                            <li>\
                                <a href=\"contact.html\" lang=\"en\"> Contact Us</a>\
                                <a href=\"contact.html\" lang=\"es\"> Contáctenos</a>\
                            </li>\
                            <li id=\"language\">\
                                <a href=\"#\" onclick=\"document.body.className='en'\"> English </a> /\
                                <a href=\"#\" onclick=\"document.body.className='es'\">Español</a>\
                            </li>\
                            <li id=\"hello_user\">\
                                <span lang=\"en\">Hello {{user}}</span>\
                                <span lang=\"es\">Hola {{user}}</span>\
                            </li>\
                        </ul>\
                    </nav>\
                </div>\
");