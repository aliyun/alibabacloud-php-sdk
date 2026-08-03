<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelSearchCityPageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelSearchCityPageResponseBody\data\cities;

class data extends Model
{
    /**
     * @var cities[]
     */
    public $cities;

    /**
     * @var bool
     */
    public $hasNext;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'cities' => 'Cities',
        'hasNext' => 'HasNext',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->cities)) {
            Model::validateArray($this->cities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cities) {
            if (\is_array($this->cities)) {
                $res['Cities'] = [];
                $n1 = 0;
                foreach ($this->cities as $item1) {
                    $res['Cities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Cities'])) {
            if (!empty($map['Cities'])) {
                $model->cities = [];
                $n1 = 0;
                foreach ($map['Cities'] as $item1) {
                    $model->cities[$n1] = cities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
