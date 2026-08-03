<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelSearchHotelListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelSearchHotelListResponseBody\data\hotels;

class data extends Model
{
    /**
     * @var hotels[]
     */
    public $hotels;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'hotels' => 'Hotels',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->hotels)) {
            Model::validateArray($this->hotels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotels) {
            if (\is_array($this->hotels)) {
                $res['Hotels'] = [];
                $n1 = 0;
                foreach ($this->hotels as $item1) {
                    $res['Hotels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Hotels'])) {
            if (!empty($map['Hotels'])) {
                $model->hotels = [];
                $n1 = 0;
                foreach ($map['Hotels'] as $item1) {
                    $model->hotels[$n1] = hotels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
