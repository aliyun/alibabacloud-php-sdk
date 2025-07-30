<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\depreciateInfo;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\depreciateInfo\contractActivity\optionIds;
use AlibabaCloud\Tea\Model;

class contractActivity extends Model
{
    /**
     * @description The activity ID.
     *
     * @example ****
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
     * @description The preferential price.
     *
     * @var float
     */
    public $finalFee;

    /**
     * @description The total discount amount.
     *
     * @var float
     */
    public $finalPromFee;

    /**
     * @description The promotion code.
     *
     * @example ****
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
     * @example ****
     *
     * @var float
     */
    public $prodFee;
    protected $_name = [
        'activityId' => 'ActivityId',
        'activityName' => 'ActivityName',
        'finalFee' => 'FinalFee',
        'finalPromFee' => 'FinalPromFee',
        'optionCode' => 'OptionCode',
        'optionIds' => 'OptionIds',
        'prodFee' => 'ProdFee',
    ];

    public function validate() {}

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
