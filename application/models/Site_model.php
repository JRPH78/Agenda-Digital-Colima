<?php

class Site_model extends Ci_Model
{
    public function getLineas()
    {
        $this->db->select("00lineas_accion.*, 03habilitador.idH AS idH_habilitador, 03habilitador.nombre");
        $this->db->from("00lineas_accion");
        $this->db->join('03habilitador', '00lineas_accion.idH = 03habilitador.idH');
        //SELECT * FROM lineas_accion JOIN habilitador ON lineas_accion.idH = habilitador.idH;

        $query = $this->db->get();
        // print_r($this->db->last_query());
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }
    public function actualizarPorcentaje($id, $porcentaje){
         $data = array(
            "porcentaje" => $porcentaje
        );
        $this->db->where('numero', $id);
        $this->db->update('00lineas_accion',$data);
    }
    public function actualizarUrl($id, $porcentaje){
         $data = array(
            "url" => $porcentaje
        );
        $this->db->where('numero', $id);
        $this->db->update('00lineas_accion',$data);
    }

    
     public function borrarUrl($id, $porcentaje){
         $data = array(
            "url" => $porcentaje
        );
        $this->db->where('numero', $id);
        $this->db->update('00lineas_accion',$data);
    }


    public function getMetas()
    {
        
        $this->db->select("*");
        $this->db->from("01metas");

        $query = $this->db->get();
        // print_r($this->db->last_query());
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }
    public function actualizarDescMeta($id, $descripcion){
         $data = array(
            "descripcion" => $descripcion
        );
        $this->db->where('numero', $id);
        $this->db->update('01metas',$data);
    }

    public function getEstrategias()
    {
        
        $this->db->select("*");
        $this->db->from("02estrategias");

        $query = $this->db->get();
        // print_r($this->db->last_query());
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }
    public function actualizarDescEstra($id, $descripcion){
         $data = array(
            "descripcion" => $descripcion
        );
        $this->db->where('idE', $id);
        $this->db->update('02estrategias',$data);
    }
    public function getHabilitadores()
    {
        
        $this->db->select("*");
        $this->db->from("03habilitador");

        $query = $this->db->get();
        // print_r($this->db->last_query());
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }

    public function actualizarDescHabili($id, $nombre){
         $data = array(
            "nombre" => $nombre
        );
        $this->db->where('idH', $id);
        $this->db->update('03habilitador',$data);
    }

    public function getGrupos()
    {
        
        $this->db->select("*");
        $this->db->from("groups");

        $query = $this->db->get();
        // print_r($this->db->last_query());
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }
    public function actualizarGrupo($id, $nombre,$descripcion)
    {
        
         $data = array(
            "name" => $nombre,
            "description"=>$descripcion
        );
        $this->db->where('id', $id);
        $this->db->update('groups',$data);
    }
    public function borrarGrp($id, $nombre,$descripcion)
    {
        
         $data = array(
           "deleted"=>1
        );
        $this->db->where('id', $id);
        $this->db->update('groups',$data);
        
       
    }
    
    public function activarGrp($id, $nombre,$descripcion)
    {
        
         $data = array(
           "deleted"=>0
        );
        $this->db->where('id', $id);
        $this->db->update('groups',$data);
        
       
    }
    
    
}