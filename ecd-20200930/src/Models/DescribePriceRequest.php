<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribePriceRequest extends Model
{
    /**
     * @var int
     */
    public $amount;
    /**
     * @var int
     */
    public $bandwidth;
    /**
     * @var int
     */
    public $duration;
    /**
     * @var int
     */
    public $groupDesktopCount;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var string
     */
    public $internetChargeType;
    /**
     * @var string
     */
    public $osType;
    /**
     * @var int
     */
    public $period;
    /**
     * @var string
     */
    public $periodUnit;
    /**
     * @var string
     */
    public $promotionId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var string
     */
    public $rootDiskCategory;
    /**
     * @var int
     */
    public $rootDiskSizeGib;
    /**
     * @var string
     */
    public $userDiskCategory;
    /**
     * @var int
     */
    public $userDiskSizeGib;
    protected $_name = [
        'amount'             => 'Amount',
        'bandwidth'          => 'Bandwidth',
        'duration'           => 'Duration',
        'groupDesktopCount'  => 'GroupDesktopCount',
        'instanceType'       => 'InstanceType',
        'internetChargeType' => 'InternetChargeType',
        'osType'             => 'OsType',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'promotionId'        => 'PromotionId',
        'regionId'           => 'RegionId',
        'resourceType'       => 'ResourceType',
        'rootDiskCategory'   => 'RootDiskCategory',
        'rootDiskSizeGib'    => 'RootDiskSizeGib',
        'userDiskCategory'   => 'UserDiskCategory',
        'userDiskSizeGib'    => 'UserDiskSizeGib',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->groupDesktopCount) {
            $res['GroupDesktopCount'] = $this->groupDesktopCount;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->rootDiskCategory) {
            $res['RootDiskCategory'] = $this->rootDiskCategory;
        }

        if (null !== $this->rootDiskSizeGib) {
            $res['RootDiskSizeGib'] = $this->rootDiskSizeGib;
        }

        if (null !== $this->userDiskCategory) {
            $res['UserDiskCategory'] = $this->userDiskCategory;
        }

        if (null !== $this->userDiskSizeGib) {
            $res['UserDiskSizeGib'] = $this->userDiskSizeGib;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['GroupDesktopCount'])) {
            $model->groupDesktopCount = $map['GroupDesktopCount'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RootDiskCategory'])) {
            $model->rootDiskCategory = $map['RootDiskCategory'];
        }

        if (isset($map['RootDiskSizeGib'])) {
            $model->rootDiskSizeGib = $map['RootDiskSizeGib'];
        }

        if (isset($map['UserDiskCategory'])) {
            $model->userDiskCategory = $map['UserDiskCategory'];
        }

        if (isset($map['UserDiskSizeGib'])) {
            $model->userDiskSizeGib = $map['UserDiskSizeGib'];
        }

        return $model;
    }
}
