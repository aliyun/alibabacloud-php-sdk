<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\depreciateInfo;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\depreciateInfo\contractActivity\optionIds;
use AlibabaCloud\Tea\Model;

class contractActivity extends Model
{
    /**
     * @description The activity ID.
     *
     * @example 41120065996xxxxx
     *
     * @var int
     */
    public $activityId;

    /**
     * @description The activity name.
     *
     * @example contract promotion_order_xxx discount
     *
     * @var string
     */
    public $activityName;

    /**
     * @description The price after the promotion.
     *
     * @example 20522.4
     *
     * @var float
     */
    public $finalFee;

    /**
     * @description The total discount amount.
     *
     * @example 3621.6
     *
     * @var float
     */
    public $finalPromFee;

    /**
     * @description The promotion ID.
     *
     * @example wanhua_activity
     *
     * @var string
     */
    public $optionCode;

    /**
     * @description The promotion IDs.
     *
     * @var optionIds
     */
    public $optionIds;

    /**
     * @description The original price.
     *
     * @example 24144.0
     *
     * @var float
     */
    public $prodFee;
    protected $_name = [
        'activityId'   => 'ActivityId',
        'activityName' => 'ActivityName',
        'finalFee'     => 'FinalFee',
        'finalPromFee' => 'FinalPromFee',
        'optionCode'   => 'OptionCode',
        'optionIds'    => 'OptionIds',
        'prodFee'      => 'ProdFee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }
        if (null !== $this->finalFee) {
            $res['FinalFee'] = $this->finalFee;
        }
        if (null !== $this->finalPromFee) {
            $res['FinalPromFee'] = $this->finalPromFee;
        }
        if (null !== $this->optionCode) {
            $res['OptionCode'] = $this->optionCode;
        }
        if (null !== $this->optionIds) {
            $res['OptionIds'] = null !== $this->optionIds ? $this->optionIds->toMap() : null;
        }
        if (null !== $this->prodFee) {
            $res['ProdFee'] = $this->prodFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contractActivity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }
        if (isset($map['FinalFee'])) {
            $model->finalFee = $map['FinalFee'];
        }
        if (isset($map['FinalPromFee'])) {
            $model->finalPromFee = $map['FinalPromFee'];
        }
        if (isset($map['OptionCode'])) {
            $model->optionCode = $map['OptionCode'];
        }
        if (isset($map['OptionIds'])) {
            $model->optionIds = optionIds::fromMap($map['OptionIds']);
        }
        if (isset($map['ProdFee'])) {
            $model->prodFee = $map['ProdFee'];
        }

        return $model;
    }
}
