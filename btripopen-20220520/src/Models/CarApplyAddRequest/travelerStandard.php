<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddRequest\travelerStandard\carCitySet;

class travelerStandard extends Model
{
    /**
     * @var carCitySet[]
     */
    public $carCitySet;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'carCitySet' => 'car_city_set',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        if (\is_array($this->carCitySet)) {
            Model::validateArray($this->carCitySet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->carCitySet) {
            if (\is_array($this->carCitySet)) {
                $res['car_city_set'] = [];
                $n1 = 0;
                foreach ($this->carCitySet as $item1) {
                    $res['car_city_set'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['car_city_set'])) {
            if (!empty($map['car_city_set'])) {
                $model->carCitySet = [];
                $n1 = 0;
                foreach ($map['car_city_set'] as $item1) {
                    $model->carCitySet[$n1++] = carCitySet::fromMap($item1);
                }
            }
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
