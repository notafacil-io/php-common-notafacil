<?php
namespace NotaFacil\Common\Services;

use NotaFacil\Common\Traits\RequestTrait;
use NotaFacil\Common\Resources\NotaFacilResource;
/**
 *  Class responsible for the authentication in the Nota Fácil API.
 */
class CitiesNotaFacil extends BaseService
{
    use RequestTrait;
                                                                                                                                                                                                               
    public function __construct(Array $credentialsNotaFacil)
    {
        parent::__construct();
        $this->credentialsNotaFacil = $credentialsNotaFacil;
    }
    
 
    
    public function listCities(): NotaFacilResource
    {
        return $this->request( $this->base_url() . $this->endpoint->cities->listCities );
    }
    
    public function findCityByName( $cityName ): NotaFacilResource
    {
        return $this->request( $this->base_url() .  str_replace(':city_name', $cityName , $this->endpoint->cities->findCityByName) );
    }


    public function citiesApproved(): NotaFacilResource
    {
        return $this->request( $this->base_url() . $this->endpoint->cities->listAllApproved );
    }

    public function findApprovedByIBGE( $codeIBGE ): NotaFacilResource
    {
        return $this->request( $this->base_url() .  str_replace(':code_ibge', $codeIBGE , $this->endpoint->cities->findApprovedByIBGE) );
    }

}
