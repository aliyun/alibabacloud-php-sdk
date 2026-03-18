<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyCuPriceResponseBody\data;

use AlibabaCloud\Dara\Model;

class componentPrices extends Model
{
    /**
     * @var string
     */
    public $componentName;

    /**
     * @var float
     */
    public $discountAmount;

    /**
     * @var float
     */
    public $originalAmount;

    /**
     * @var float
     */
    public $tradeAmount;
    protected $_name = [
        'componentName' => 'ComponentName',
        'discountAmount' => 'DiscountAmount',
        'originalAmount' => 'OriginalAmount',
        'tradeAmount' => 'TradeAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }

        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }

        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
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
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }

        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }

        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
