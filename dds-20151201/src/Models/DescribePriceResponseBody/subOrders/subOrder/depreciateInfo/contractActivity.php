<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\depreciateInfo;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\depreciateInfo\contractActivity\optionIds;
use AlibabaCloud\Tea\Model;

class contractActivity extends Model
{
    /**
     * @var int
     */
    public $activityId;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var float
     */
    public $finalFee;

    /**
     * @var float
     */
    public $finalPromFee;

    /**
     * @var string
     */
    public $optionCode;

    /**
     * @var optionIds
     */
    public $optionIds;

    /**
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
