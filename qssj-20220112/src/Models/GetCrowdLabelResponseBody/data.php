<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetCrowdLabelResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 20220518
     *
     * @var string
     */
    public $closingDate;

    /**
     * @var string
     */
    public $labelName;

    /**
     * @example 51263.16
     *
     * @var float
     */
    public $orderAmount;

    /**
     * @example 591.33
     *
     * @var float
     */
    public $purchaseAmount;

    /**
     * @example 27036.0
     *
     * @var float
     */
    public $searchVolume;
    protected $_name = [
        'closingDate'    => 'ClosingDate',
        'labelName'      => 'LabelName',
        'orderAmount'    => 'OrderAmount',
        'purchaseAmount' => 'PurchaseAmount',
        'searchVolume'   => 'SearchVolume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->closingDate) {
            $res['ClosingDate'] = $this->closingDate;
        }
        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }
        if (null !== $this->orderAmount) {
            $res['OrderAmount'] = $this->orderAmount;
        }
        if (null !== $this->purchaseAmount) {
            $res['PurchaseAmount'] = $this->purchaseAmount;
        }
        if (null !== $this->searchVolume) {
            $res['SearchVolume'] = $this->searchVolume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClosingDate'])) {
            $model->closingDate = $map['ClosingDate'];
        }
        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }
        if (isset($map['OrderAmount'])) {
            $model->orderAmount = $map['OrderAmount'];
        }
        if (isset($map['PurchaseAmount'])) {
            $model->purchaseAmount = $map['PurchaseAmount'];
        }
        if (isset($map['SearchVolume'])) {
            $model->searchVolume = $map['SearchVolume'];
        }

        return $model;
    }
}
