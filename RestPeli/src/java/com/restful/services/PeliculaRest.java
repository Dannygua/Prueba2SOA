
package com.restful.services;

import com.restful.entidades.Peliculas;
import com.restful.session.PeliculasFacade;
import java.util.List;
import javax.ejb.EJB;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

@Path("Peliculas")

public class PeliculaRest {
        @EJB
    private PeliculasFacade peliculasFacade;

    @GET

    @Produces({MediaType.APPLICATION_JSON})
    public List<Peliculas> findAll() {
        return peliculasFacade.findAll();
    }
    
}
