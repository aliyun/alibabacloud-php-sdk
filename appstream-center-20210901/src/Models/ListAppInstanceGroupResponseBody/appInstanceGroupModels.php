<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels\apps;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels\nodePool;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels\otaInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels\resourceTags;
use AlibabaCloud\Tea\Model;

class appInstanceGroupModels extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @example img-8z4nztpaqvay4****
     *
     * @var string
     */
    public $appCenterImageId;

    /**
     * @example aig-9ciijz60n4xsv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceGroupName;

    /**
     * @example __dynamic__
     *
     * @var string
     */
    public $appInstanceType;

    /**
     * @example pg-g3k5wa2ms2****
     *
     * @var string
     */
    public $appPolicyId;

    /**
     * @var bool
     */
    public $appPolicyImageCheck;

    /**
     * @var string
     */
    public $appPolicyVersion;

    /**
     * @var apps[]
     */
    public $apps;

    /**
     * @example Node
     *
     * @var string
     */
    public $chargeResourceMode;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 2022-04-27T16:00:00.000+00:00
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example 2022-04-26T15:06:16.000+00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxAmount;

    /**
     * @example 1
     *
     * @var int
     */
    public $minAmount;

    /**
     * @description The resource groups.
     *
     * @var nodePool[]
     */
    public $nodePool;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The type of the operating system.
     *
     * Valid value:
     *
     *   Windows
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @var otaInfo
     */
    public $otaInfo;

    /**
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 20
     *
     * @var string
     */
    public $reserveAmountRatio;

    /**
     * @example 5
     *
     * @var int
     */
    public $reserveMaxAmount;

    /**
     * @example 1
     *
     * @var int
     */
    public $reserveMinAmount;

    /**
     * @example AVAILABLE
     *
     * @var string
     */
    public $resourceStatus;

    /**
     * @description The tags added to the resources.
     *
     * @var resourceTags[]
     */
    public $resourceTags;

    /**
     * @example 5
     *
     * @var int
     */
    public $scalingDownAfterIdleMinutes;

    /**
     * @example 10
     *
     * @var int
     */
    public $scalingStep;

    /**
     * @example 85
     *
     * @var string
     */
    public $scalingUsageThreshold;

    /**
     * @example 15
     *
     * @var string
     */
    public $sessionTimeout;

    /**
     * @example false
     *
     * @var bool
     */
    public $skipUserAuthCheck;

    /**
     * @example spec-8o18t8uc31qib0****
     *
     * @var string
     */
    public $specId;

    /**
     * @example PUBLISHED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'amount'                      => 'Amount',
        'appCenterImageId'            => 'AppCenterImageId',
        'appInstanceGroupId'          => 'AppInstanceGroupId',
        'appInstanceGroupName'        => 'AppInstanceGroupName',
        'appInstanceType'             => 'AppInstanceType',
        'appPolicyId'                 => 'AppPolicyId',
        'appPolicyImageCheck'         => 'AppPolicyImageCheck',
        'appPolicyVersion'            => 'AppPolicyVersion',
        'apps'                        => 'Apps',
        'chargeResourceMode'          => 'ChargeResourceMode',
        'chargeType'                  => 'ChargeType',
        'expiredTime'                 => 'ExpiredTime',
        'gmtCreate'                   => 'GmtCreate',
        'maxAmount'                   => 'MaxAmount',
        'minAmount'                   => 'MinAmount',
        'nodePool'                    => 'NodePool',
        'officeSiteId'                => 'OfficeSiteId',
        'osType'                      => 'OsType',
        'otaInfo'                     => 'OtaInfo',
        'productType'                 => 'ProductType',
        'regionId'                    => 'RegionId',
        'reserveAmountRatio'          => 'ReserveAmountRatio',
        'reserveMaxAmount'            => 'ReserveMaxAmount',
        'reserveMinAmount'            => 'ReserveMinAmount',
        'resourceStatus'              => 'ResourceStatus',
        'resourceTags'                => 'ResourceTags',
        'scalingDownAfterIdleMinutes' => 'ScalingDownAfterIdleMinutes',
        'scalingStep'                 => 'ScalingStep',
        'scalingUsageThreshold'       => 'ScalingUsageThreshold',
        'sessionTimeout'              => 'SessionTimeout',
        'skipUserAuthCheck'           => 'SkipUserAuthCheck',
        'specId'                      => 'SpecId',
        'status'                      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->appCenterImageId) {
            $res['AppCenterImageId'] = $this->appCenterImageId;
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
        if (null !== $this->appPolicyId) {
            $res['AppPolicyId'] = $this->appPolicyId;
        }
        if (null !== $this->appPolicyImageCheck) {
            $res['AppPolicyImageCheck'] = $this->appPolicyImageCheck;
        }
        if (null !== $this->appPolicyVersion) {
            $res['AppPolicyVersion'] = $this->appPolicyVersion;
        }
        if (null !== $this->apps) {
            $res['Apps'] = [];
            if (null !== $this->apps && \is_array($this->apps)) {
                $n = 0;
                foreach ($this->apps as $item) {
                    $res['Apps'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['NodePool'] = [];
            if (null !== $this->nodePool && \is_array($this->nodePool)) {
                $n = 0;
                foreach ($this->nodePool as $item) {
                    $res['NodePool'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['OtaInfo'] = null !== $this->otaInfo ? $this->otaInfo->toMap() : null;
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
        if (null !== $this->resourceTags) {
            $res['ResourceTags'] = [];
            if (null !== $this->resourceTags && \is_array($this->resourceTags)) {
                $n = 0;
                foreach ($this->resourceTags as $item) {
                    $res['ResourceTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->skipUserAuthCheck) {
            $res['SkipUserAuthCheck'] = $this->skipUserAuthCheck;
        }
        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInstanceGroupModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AppCenterImageId'])) {
            $model->appCenterImageId = $map['AppCenterImageId'];
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
        if (isset($map['AppPolicyId'])) {
            $model->appPolicyId = $map['AppPolicyId'];
        }
        if (isset($map['AppPolicyImageCheck'])) {
            $model->appPolicyImageCheck = $map['AppPolicyImageCheck'];
        }
        if (isset($map['AppPolicyVersion'])) {
            $model->appPolicyVersion = $map['AppPolicyVersion'];
        }
        if (isset($map['Apps'])) {
            if (!empty($map['Apps'])) {
                $model->apps = [];
                $n           = 0;
                foreach ($map['Apps'] as $item) {
                    $model->apps[$n++] = null !== $item ? apps::fromMap($item) : $item;
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
                $n               = 0;
                foreach ($map['NodePool'] as $item) {
                    $model->nodePool[$n++] = null !== $item ? nodePool::fromMap($item) : $item;
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
        if (isset($map['ResourceTags'])) {
            if (!empty($map['ResourceTags'])) {
                $model->resourceTags = [];
                $n                   = 0;
                foreach ($map['ResourceTags'] as $item) {
                    $model->resourceTags[$n++] = null !== $item ? resourceTags::fromMap($item) : $item;
                }
            }
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
        if (isset($map['SkipUserAuthCheck'])) {
            $model->skipUserAuthCheck = $map['SkipUserAuthCheck'];
        }
        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
