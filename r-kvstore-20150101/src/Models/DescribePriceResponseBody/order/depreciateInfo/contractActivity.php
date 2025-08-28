<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\depreciateInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\depreciateInfo\contractActivity\optionIds;

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
        'activityId' => 'ActivityId',
        'activityName' => 'ActivityName',
        'finalFee' => 'FinalFee',
        'finalPromFee' => 'FinalPromFee',
        'optionCode' => 'OptionCode',
        'optionIds' => 'OptionIds',
        'prodFee' => 'ProdFee',
    ];

    public function validate()
    {
        if (null !== $this->optionIds) {
            $this->optionIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['OptionIds'] = null !== $this->optionIds ? $this->optionIds->toArray($noStream) : $this->optionIds;
        }

        if (null !== $this->prodFee) {
            $res['ProdFee'] = $this->prodFee;
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
