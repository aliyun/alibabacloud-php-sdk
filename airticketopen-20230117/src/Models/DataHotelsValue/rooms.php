<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue\rooms\lowestPrice;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue\rooms\offers;

class rooms extends Model
{
    /**
     * @var string
     */
    public $standardRoomId;

    /**
     * @var lowestPrice
     */
    public $lowestPrice;

    /**
     * @var offers[]
     */
    public $offers;
    protected $_name = [
        'standardRoomId' => 'StandardRoomId',
        'lowestPrice' => 'LowestPrice',
        'offers' => 'Offers',
    ];

    public function validate()
    {
        if (null !== $this->lowestPrice) {
            $this->lowestPrice->validate();
        }
        if (\is_array($this->offers)) {
            Model::validateArray($this->offers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->standardRoomId) {
            $res['StandardRoomId'] = $this->standardRoomId;
        }

        if (null !== $this->lowestPrice) {
            $res['LowestPrice'] = null !== $this->lowestPrice ? $this->lowestPrice->toArray($noStream) : $this->lowestPrice;
        }

        if (null !== $this->offers) {
            if (\is_array($this->offers)) {
                $res['Offers'] = [];
                $n1 = 0;
                foreach ($this->offers as $item1) {
                    $res['Offers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['StandardRoomId'])) {
            $model->standardRoomId = $map['StandardRoomId'];
        }

        if (isset($map['LowestPrice'])) {
            $model->lowestPrice = lowestPrice::fromMap($map['LowestPrice']);
        }

        if (isset($map['Offers'])) {
            if (!empty($map['Offers'])) {
                $model->offers = [];
                $n1 = 0;
                foreach ($map['Offers'] as $item1) {
                    $model->offers[$n1] = offers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
