<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeCloudPhoneNodePriceRequest extends Model
{
    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $count;

    /**
     * @var bool
     */
    public $isSingleImgDisk;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var int
     */
    public $phoneCount;

    /**
     * @var int
     */
    public $phoneDataVolume;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var int
     */
    public $serverShareDataVolume;

    /**
     * @var string
     */
    public $serverType;

    /**
     * @var int
     */
    public $swapSize;
    protected $_name = [
        'bizRegionId' => 'BizRegionId',
        'chargeType' => 'ChargeType',
        'count' => 'Count',
        'isSingleImgDisk' => 'IsSingleImgDisk',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'phoneCount' => 'PhoneCount',
        'phoneDataVolume' => 'PhoneDataVolume',
        'promotionId' => 'PromotionId',
        'serverShareDataVolume' => 'ServerShareDataVolume',
        'serverType' => 'ServerType',
        'swapSize' => 'SwapSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->isSingleImgDisk) {
            $res['IsSingleImgDisk'] = $this->isSingleImgDisk;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->phoneCount) {
            $res['PhoneCount'] = $this->phoneCount;
        }

        if (null !== $this->phoneDataVolume) {
            $res['PhoneDataVolume'] = $this->phoneDataVolume;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->serverShareDataVolume) {
            $res['ServerShareDataVolume'] = $this->serverShareDataVolume;
        }

        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }

        if (null !== $this->swapSize) {
            $res['SwapSize'] = $this->swapSize;
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
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['IsSingleImgDisk'])) {
            $model->isSingleImgDisk = $map['IsSingleImgDisk'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PhoneCount'])) {
            $model->phoneCount = $map['PhoneCount'];
        }

        if (isset($map['PhoneDataVolume'])) {
            $model->phoneDataVolume = $map['PhoneDataVolume'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['ServerShareDataVolume'])) {
            $model->serverShareDataVolume = $map['ServerShareDataVolume'];
        }

        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }

        if (isset($map['SwapSize'])) {
            $model->swapSize = $map['SwapSize'];
        }

        return $model;
    }
}
