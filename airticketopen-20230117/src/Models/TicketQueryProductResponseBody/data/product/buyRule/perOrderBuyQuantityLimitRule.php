<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\buyRule;

use AlibabaCloud\Dara\Model;

class perOrderBuyQuantityLimitRule extends Model
{
    /**
     * @var int
     */
    public $maxBuyQuantity;

    /**
     * @var int
     */
    public $minBuyQuantity;
    protected $_name = [
        'maxBuyQuantity' => 'MaxBuyQuantity',
        'minBuyQuantity' => 'MinBuyQuantity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxBuyQuantity) {
            $res['MaxBuyQuantity'] = $this->maxBuyQuantity;
        }

        if (null !== $this->minBuyQuantity) {
            $res['MinBuyQuantity'] = $this->minBuyQuantity;
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
        if (isset($map['MaxBuyQuantity'])) {
            $model->maxBuyQuantity = $map['MaxBuyQuantity'];
        }

        if (isset($map['MinBuyQuantity'])) {
            $model->minBuyQuantity = $map['MinBuyQuantity'];
        }

        return $model;
    }
}
