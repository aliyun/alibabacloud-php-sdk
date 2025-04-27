<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponseBody\appInstanceGroupModels\apps;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponseBody\appInstanceGroupModels\nodePool;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponseBody\appInstanceGroupModels\otaInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponseBody\appInstanceGroupModels\tags;

class appInstanceGroupModels extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $appCenterImageId;

    /**
     * @var string
     */
    public $appCenterImageName;

    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceGroupName;

    /**
     * @var string
     */
    public $appInstanceType;

    /**
     * @var string
     */
    public $appInstanceTypeName;

    /**
     * @var string
     */
    public $appPolicyId;

    /**
     * @var apps[]
     */
    public $apps;

    /**
     * @var string
     */
    public $chargeResourceMode;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $maxAmount;

    /**
     * @var int
     */
    public $minAmount;

    /**
     * @var nodePool[]
     */
    public $nodePool;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var otaInfo
     */
    public $otaInfo;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reserveAmountRatio;

    /**
     * @var int
     */
    public $reserveMaxAmount;

    /**
     * @var int
     */
    public $reserveMinAmount;

    /**
     * @var string
     */
    public $resourceStatus;

    /**
     * @var int
     */
    public $scalingDownAfterIdleMinutes;

    /**
     * @var int
     */
    public $scalingStep;

    /**
     * @var string
     */
    public $scalingUsageThreshold;

    /**
     * @var string
     */
    public $sessionTimeout;

    /**
     * @var string
     */
    public $sessionType;

    /**
     * @var bool
     */
    public $skipUserAuthCheck;

    /**
     * @var string
     */
    public $specId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'amount' => 'Amount',
        'appCenterImageId' => 'AppCenterImageId',
        'appCenterImageName' => 'AppCenterImageName',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
        'appInstanceType' => 'AppInstanceType',
        'appInstanceTypeName' => 'AppInstanceTypeName',
        'appPolicyId' => 'AppPolicyId',
        'apps' => 'Apps',
        'chargeResourceMode' => 'ChargeResourceMode',
        'chargeType' => 'ChargeType',
        'expiredTime' => 'ExpiredTime',
        'gmtCreate' => 'GmtCreate',
        'maxAmount' => 'MaxAmount',
        'minAmount' => 'MinAmount',
        'nodePool' => 'NodePool',
        'officeSiteId' => 'OfficeSiteId',
        'osType' => 'OsType',
        'otaInfo' => 'OtaInfo',
        'productType' => 'ProductType',
        'regionId' => 'RegionId',
        'reserveAmountRatio' => 'ReserveAmountRatio',
        'reserveMaxAmount' => 'ReserveMaxAmount',
        'reserveMinAmount' => 'ReserveMinAmount',
        'resourceStatus' => 'ResourceStatus',
        'scalingDownAfterIdleMinutes' => 'ScalingDownAfterIdleMinutes',
        'scalingStep' => 'ScalingStep',
        'scalingUsageThreshold' => 'ScalingUsageThreshold',
        'sessionTimeout' => 'SessionTimeout',
        'sessionType' => 'SessionType',
        'skipUserAuthCheck' => 'SkipUserAuthCheck',
        'specId' => 'SpecId',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->apps)) {
            Model::validateArray($this->apps);
        }
        if (\is_array($this->nodePool)) {
            Model::validateArray($this->nodePool);
        }
        if (null !== $this->otaInfo) {
            $this->otaInfo->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->appCenterImageId) {
            $res['AppCenterImageId'] = $this->appCenterImageId;
        }

        if (null !== $this->appCenterImageName) {
            $res['AppCenterImageName'] = $this->appCenterImageName;
        }

        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
        }

        if (null !== $this->appInstanceType) {
            $res['AppInstanceType'] = $this->appInstanceType;
        }

        if (null !== $this->appInstanceTypeName) {
            $res['AppInstanceTypeName'] = $this->appInstanceTypeName;
        }

        if (null !== $this->appPolicyId) {
            $res['AppPolicyId'] = $this->appPolicyId;
        }

        if (null !== $this->apps) {
            if (\is_array($this->apps)) {
                $res['Apps'] = [];
                $n1 = 0;
                foreach ($this->apps as $item1) {
                    $res['Apps'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->chargeResourceMode) {
            $res['ChargeResourceMode'] = $this->chargeResourceMode;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->maxAmount) {
            $res['MaxAmount'] = $this->maxAmount;
        }

        if (null !== $this->minAmount) {
            $res['MinAmount'] = $this->minAmount;
        }

        if (null !== $this->nodePool) {
            if (\is_array($this->nodePool)) {
                $res['NodePool'] = [];
                $n1 = 0;
                foreach ($this->nodePool as $item1) {
                    $res['NodePool'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->otaInfo) {
            $res['OtaInfo'] = null !== $this->otaInfo ? $this->otaInfo->toArray($noStream) : $this->otaInfo;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reserveAmountRatio) {
            $res['ReserveAmountRatio'] = $this->reserveAmountRatio;
        }

        if (null !== $this->reserveMaxAmount) {
            $res['ReserveMaxAmount'] = $this->reserveMaxAmount;
        }

        if (null !== $this->reserveMinAmount) {
            $res['ReserveMinAmount'] = $this->reserveMinAmount;
        }

        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }

        if (null !== $this->scalingDownAfterIdleMinutes) {
            $res['ScalingDownAfterIdleMinutes'] = $this->scalingDownAfterIdleMinutes;
        }

        if (null !== $this->scalingStep) {
            $res['ScalingStep'] = $this->scalingStep;
        }

        if (null !== $this->scalingUsageThreshold) {
            $res['ScalingUsageThreshold'] = $this->scalingUsageThreshold;
        }

        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }

        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }

        if (null !== $this->skipUserAuthCheck) {
            $res['SkipUserAuthCheck'] = $this->skipUserAuthCheck;
        }

        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['AppCenterImageId'])) {
            $model->appCenterImageId = $map['AppCenterImageId'];
        }

        if (isset($map['AppCenterImageName'])) {
            $model->appCenterImageName = $map['AppCenterImageName'];
        }

        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceGroupName'])) {
            $model->appInstanceGroupName = $map['AppInstanceGroupName'];
        }

        if (isset($map['AppInstanceType'])) {
            $model->appInstanceType = $map['AppInstanceType'];
        }

        if (isset($map['AppInstanceTypeName'])) {
            $model->appInstanceTypeName = $map['AppInstanceTypeName'];
        }

        if (isset($map['AppPolicyId'])) {
            $model->appPolicyId = $map['AppPolicyId'];
        }

        if (isset($map['Apps'])) {
            if (!empty($map['Apps'])) {
                $model->apps = [];
                $n1 = 0;
                foreach ($map['Apps'] as $item1) {
                    $model->apps[$n1++] = apps::fromMap($item1);
                }
            }
        }

        if (isset($map['ChargeResourceMode'])) {
            $model->chargeResourceMode = $map['ChargeResourceMode'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['MaxAmount'])) {
            $model->maxAmount = $map['MaxAmount'];
        }

        if (isset($map['MinAmount'])) {
            $model->minAmount = $map['MinAmount'];
        }

        if (isset($map['NodePool'])) {
            if (!empty($map['NodePool'])) {
                $model->nodePool = [];
                $n1 = 0;
                foreach ($map['NodePool'] as $item1) {
                    $model->nodePool[$n1++] = nodePool::fromMap($item1);
                }
            }
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['OtaInfo'])) {
            $model->otaInfo = otaInfo::fromMap($map['OtaInfo']);
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReserveAmountRatio'])) {
            $model->reserveAmountRatio = $map['ReserveAmountRatio'];
        }

        if (isset($map['ReserveMaxAmount'])) {
            $model->reserveMaxAmount = $map['ReserveMaxAmount'];
        }

        if (isset($map['ReserveMinAmount'])) {
            $model->reserveMinAmount = $map['ReserveMinAmount'];
        }

        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }

        if (isset($map['ScalingDownAfterIdleMinutes'])) {
            $model->scalingDownAfterIdleMinutes = $map['ScalingDownAfterIdleMinutes'];
        }

        if (isset($map['ScalingStep'])) {
            $model->scalingStep = $map['ScalingStep'];
        }

        if (isset($map['ScalingUsageThreshold'])) {
            $model->scalingUsageThreshold = $map['ScalingUsageThreshold'];
        }

        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }

        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }

        if (isset($map['SkipUserAuthCheck'])) {
            $model->skipUserAuthCheck = $map['SkipUserAuthCheck'];
        }

        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
