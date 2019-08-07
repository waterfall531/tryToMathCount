class sort(){
public function qc(){
        $array = [];
        for ($i = 0 ; $i < 8 ; $i++){
            $array[] = rand(0,255);//,rand(0,255),rand(0,255)
        }

        $this->echogq($array);
        $pivot = $array[count($array)-1];
        unset($array[count($array)-1]);
        $array = $this->change($array,$pivot);
        $this->echogq($array);
    }

    private function change($array,$pivot,$layer = 1){
        $pev = $next = [];
        foreach ($array as $item){
            if ($item > $pivot){
                $next[] = $item;
            }else{
                $pev[] = $item;
            }
        }

         if (count($pev)>1){
            $pevPivot = $pev[count($pev)-1];
            unset($pev[count($pev)-1]);
            $pev = $this->change($pev,$pevPivot,$layer +1);
        }

        if ($layer ==1){
            $this->echogq(array_merge($pev,[$pivot],$next));
        }

        if (count($next)>1){
            $nextPivot = $next[count($next)-1];
            unset($next[count($next)-1]);
            $next = $this->change($next,$nextPivot,$layer +1);
        }

        if ($layer ==1){
            $this->echogq(array_merge($pev,[$pivot],$next));
        }

        return array_merge($pev,[$pivot],$next);
    }

    private function echogq($array){
        $str = '';
        foreach ($array as $item) {
            $str .= '<span style="width: 100px;height:100px;color:rgba(0,0,0,0);background-color: rgb('.$item.','.$item.','.$item.');">123</span>';
        }
        echo '</br>';
        echo $str;
    }
}
