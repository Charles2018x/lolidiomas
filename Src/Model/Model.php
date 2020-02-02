<?php

namespace Src\Model;
use Src\Handller\OpenDataBase;

class Model extends OpenDataBase{
    public function getCmsHome($id){
        $CmsHome;
        $OpenMysqli = $this->getData();

        $executa = "select * from CmsLayout where id = '" . $id . "'";
        $query = $OpenMysqli->query($executa);

        while ($dados = mysqli_fetch_object($query)){
            $CmsHome = $dados->home;
        }
        return $CmsHome;
    }
}