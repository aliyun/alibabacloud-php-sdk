<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\GetPolarXPriceResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\GetPolarXPriceResponseBody\orderPriceList\rules;
use AlibabaCloud\Tea\Model;

class orderPriceList extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $originalAmount;

    /**
     * @var string
     */
    public $discountAmount;

    /**
     * @var string
     */
    public $tradeAmount;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $totalCostAmount;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'DBInstanceName'  => 'DBInstanceName',
        'originalAmount'  => 'OriginalAmount',
        'discountAmount'  => 'DiscountAmount',
        'tradeAmount'     => 'TradeAmount',
        'payType'         => 'PayType',
        'totalCostAmount' => 'TotalCostAmount',
        'rules'           => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->totalCostAmount) {
            $res['TotalCostAmount'] = $this->totalCostAmount;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderPriceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['TotalCostAmount'])) {
            $model->totalCostAmount = $map['TotalCostAmount'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
