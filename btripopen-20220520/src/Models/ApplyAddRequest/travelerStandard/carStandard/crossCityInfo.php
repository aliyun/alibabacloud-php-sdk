<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerStandard\carStandard;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerStandard\carStandard\crossCityInfo\crossCityList;

class crossCityInfo extends Model
{
    /**
     * @var crossCityList[]
     */
    public $crossCityList;

    /**
     * @var int
     */
    public $crossCityType;
    protected $_name = [
        'crossCityList' => 'cross_city_list',
        'crossCityType' => 'cross_city_type',
    ];

    public function validate()
    {
        if (\is_array($this->crossCityList)) {
            Model::validateArray($this->crossCityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossCityList) {
            if (\is_array($this->crossCityList)) {
                $res['cross_city_list'] = [];
                $n1 = 0;
                foreach ($this->crossCityList as $item1) {
                    $res['cross_city_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->crossCityType) {
            $res['cross_city_type'] = $this->crossCityType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cross_city_list'])) {
            if (!empty($map['cross_city_list'])) {
                $model->crossCityList = [];
                $n1 = 0;
                foreach ($map['cross_city_list'] as $item1) {
                    $model->crossCityList[$n1] = crossCityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['cross_city_type'])) {
            $model->crossCityType = $map['cross_city_type'];
        }

        return $model;
    }
}
