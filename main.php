<?php


class BigNumbers
{
    public static function add(string $num1, string $num2):string
    {
        $remain = 0;
        $l1 = strlen($num1)-1;
        $l2 = strlen($num2)-1;
        $result = '';
        while($l1>=0 && $l2>=0){
            $val = ((int)$num1[$l1]+(int)$num2[$l2]+(int)$remain);
            $result = ($val%10).$result;
            $remain = (int)($val/10);
            $l1--;
            $l2--;
        }
        while($l1>=0){
            $result = $num1[$l1].$result;
            $l1--;
        }
        while($l2>=0){
            $result = $num2[$l2].$result;
            $l2--;
        }

        return $result;

    }
}

$num = '347856203784560283794659287345928734569283745602873456023475602345876028934567027834650273845602387456902738569287345692873456928347523459872093845702983475029834750289347509283475092837452983475029834750283945702983475092';
$num2 = '38756293875629898354709825470298347602834602783465928734659287346592873465928736459827364598273465928734659287346592873465928734569287345692873456928374569237485692837465928734659287364592734659278364598276349587263985';
$sum = '';
$i=0;

$num = BigNumbers::add($num, $num2);
while (++$i<=100){
    
}
   
echo "$num\n";
