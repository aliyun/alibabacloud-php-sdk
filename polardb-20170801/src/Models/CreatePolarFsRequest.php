<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreatePolarFsRequest\customBucketPathList;

class CreatePolarFsRequest extends Model
{
    /**
     * @var int
     */
    public $accelerateStorageSize;

    /**
     * @var string
     */
    public $accelerateSwitch;

    /**
     * @var string
     */
    public $accelerateType;

    /**
     * @var string
     */
    public $authorizedUserIds;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $creationCategory;

    /**
     * @var int
     */
    public $customBucketCount;

    /**
     * @var string
     */
    public $customBucketPath;

    /**
     * @var customBucketPathList[]
     */
    public $customBucketPathList;

    /**
     * @var string
     */
    public $customOssAk;

    /**
     * @var string
     */
    public $customOssSk;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $storageSpace;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $usedTime;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accelerateStorageSize' => 'AccelerateStorageSize',
        'accelerateSwitch' => 'AccelerateSwitch',
        'accelerateType' => 'AccelerateType',
        'authorizedUserIds' => 'AuthorizedUserIds',
        'autoRenew' => 'AutoRenew',
        'autoUseCoupon' => 'AutoUseCoupon',
        'creationCategory' => 'CreationCategory',
        'customBucketCount' => 'CustomBucketCount',
        'customBucketPath' => 'CustomBucketPath',
        'customBucketPathList' => 'CustomBucketPathList',
        'customOssAk' => 'CustomOssAk',
        'customOssSk' => 'CustomOssSk',
        'DBClusterId' => 'DBClusterId',
        'DBType' => 'DBType',
        'payType' => 'PayType',
        'period' => 'Period',
        'promotionCode' => 'PromotionCode',
        'regionId' => 'RegionId',
        'storageSpace' => 'StorageSpace',
        'storageType' => 'StorageType',
        'usedTime' => 'UsedTime',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->customBucketPathList)) {
            Model::validateArray($this->customBucketPathList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerateStorageSize) {
            $res['AccelerateStorageSize'] = $this->accelerateStorageSize;
        }

        if (null !== $this->accelerateSwitch) {
            $res['AccelerateSwitch'] = $this->accelerateSwitch;
        }

        if (null !== $this->accelerateType) {
            $res['AccelerateType'] = $this->accelerateType;
        }

        if (null !== $this->authorizedUserIds) {
            $res['AuthorizedUserIds'] = $this->authorizedUserIds;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }

        if (null !== $this->creationCategory) {
            $res['CreationCategory'] = $this->creationCategory;
        }

        if (null !== $this->customBucketCount) {
            $res['CustomBucketCount'] = $this->customBucketCount;
        }

        if (null !== $this->customBucketPath) {
            $res['CustomBucketPath'] = $this->customBucketPath;
        }

        if (null !== $this->customBucketPathList) {
            if (\is_array($this->customBucketPathList)) {
                $res['CustomBucketPathList'] = [];
                $n1 = 0;
                foreach ($this->customBucketPathList as $item1) {
                    $res['CustomBucketPathList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customOssAk) {
            $res['CustomOssAk'] = $this->customOssAk;
        }

        if (null !== $this->customOssSk) {
            $res['CustomOssSk'] = $this->customOssSk;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->storageSpace) {
            $res['StorageSpace'] = $this->storageSpace;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AccelerateStorageSize'])) {
            $model->accelerateStorageSize = $map['AccelerateStorageSize'];
        }

        if (isset($map['AccelerateSwitch'])) {
            $model->accelerateSwitch = $map['AccelerateSwitch'];
        }

        if (isset($map['AccelerateType'])) {
            $model->accelerateType = $map['AccelerateType'];
        }

        if (isset($map['AuthorizedUserIds'])) {
            $model->authorizedUserIds = $map['AuthorizedUserIds'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }

        if (isset($map['CreationCategory'])) {
            $model->creationCategory = $map['CreationCategory'];
        }

        if (isset($map['CustomBucketCount'])) {
            $model->customBucketCount = $map['CustomBucketCount'];
        }

        if (isset($map['CustomBucketPath'])) {
            $model->customBucketPath = $map['CustomBucketPath'];
        }

        if (isset($map['CustomBucketPathList'])) {
            if (!empty($map['CustomBucketPathList'])) {
                $model->customBucketPathList = [];
                $n1 = 0;
                foreach ($map['CustomBucketPathList'] as $item1) {
                    $model->customBucketPathList[$n1] = customBucketPathList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CustomOssAk'])) {
            $model->customOssAk = $map['CustomOssAk'];
        }

        if (isset($map['CustomOssSk'])) {
            $model->customOssSk = $map['CustomOssSk'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StorageSpace'])) {
            $model->storageSpace = $map['StorageSpace'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
