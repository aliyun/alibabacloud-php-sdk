<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddRequest;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyAddRequest\travelerStandard\carCitySet;
use AlibabaCloud\Tea\Model;

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
        'userId'     => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carCitySet) {
            $res['car_city_set'] = [];
            if (null !== $this->carCitySet && \is_array($this->carCitySet)) {
                $n = 0;
                foreach ($this->carCitySet as $item) {
                    $res['car_city_set'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return travelerStandard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['car_city_set'])) {
            if (!empty($map['car_city_set'])) {
                $model->carCitySet = [];
                $n                 = 0;
                foreach ($map['car_city_set'] as $item) {
                    $model->carCitySet[$n++] = null !== $item ? carCitySet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
