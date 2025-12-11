<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeRequest\displayConfig;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeRequest\networkInfo;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeRequest\tag;

class CreateCloudPhoneNodeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $bandwidthPackageType;

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
     * @var displayConfig
     */
    public $displayConfig;

    /**
     * @var int
     */
    public $downBandwidthLimit;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $isSingleImgDisk;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var networkInfo
     */
    public $networkInfo;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
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
    public $resolutionHeight;

    /**
     * @var int
     */
    public $resolutionWidth;

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
    public $streamMode;

    /**
     * @var int
     */
    public $swapSize;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var int
     */
    public $upBandwidthLimit;

    /**
     * @var string
     */
    public $useTemplate;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'bandwidthPackageType' => 'BandwidthPackageType',
        'bizRegionId' => 'BizRegionId',
        'chargeType' => 'ChargeType',
        'count' => 'Count',
        'displayConfig' => 'DisplayConfig',
        'downBandwidthLimit' => 'DownBandwidthLimit',
        'imageId' => 'ImageId',
        'instanceType' => 'InstanceType',
        'isSingleImgDisk' => 'IsSingleImgDisk',
        'networkId' => 'NetworkId',
        'networkInfo' => 'NetworkInfo',
        'networkType' => 'NetworkType',
        'nodeName' => 'NodeName',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'phoneCount' => 'PhoneCount',
        'phoneDataVolume' => 'PhoneDataVolume',
        'promotionId' => 'PromotionId',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionWidth' => 'ResolutionWidth',
        'serverShareDataVolume' => 'ServerShareDataVolume',
        'serverType' => 'ServerType',
        'streamMode' => 'StreamMode',
        'swapSize' => 'SwapSize',
        'tag' => 'Tag',
        'upBandwidthLimit' => 'UpBandwidthLimit',
        'useTemplate' => 'UseTemplate',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (null !== $this->displayConfig) {
            $this->displayConfig->validate();
        }
        if (null !== $this->networkInfo) {
            $this->networkInfo->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }

        if (null !== $this->bandwidthPackageType) {
            $res['BandwidthPackageType'] = $this->bandwidthPackageType;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->displayConfig) {
            $res['DisplayConfig'] = null !== $this->displayConfig ? $this->displayConfig->toArray($noStream) : $this->displayConfig;
        }

        if (null !== $this->downBandwidthLimit) {
            $res['DownBandwidthLimit'] = $this->downBandwidthLimit;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->isSingleImgDisk) {
            $res['IsSingleImgDisk'] = $this->isSingleImgDisk;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->networkInfo) {
            $res['NetworkInfo'] = null !== $this->networkInfo ? $this->networkInfo->toArray($noStream) : $this->networkInfo;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
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

        if (null !== $this->resolutionHeight) {
            $res['ResolutionHeight'] = $this->resolutionHeight;
        }

        if (null !== $this->resolutionWidth) {
            $res['ResolutionWidth'] = $this->resolutionWidth;
        }

        if (null !== $this->serverShareDataVolume) {
            $res['ServerShareDataVolume'] = $this->serverShareDataVolume;
        }

        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }

        if (null !== $this->streamMode) {
            $res['StreamMode'] = $this->streamMode;
        }

        if (null !== $this->swapSize) {
            $res['SwapSize'] = $this->swapSize;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->upBandwidthLimit) {
            $res['UpBandwidthLimit'] = $this->upBandwidthLimit;
        }

        if (null !== $this->useTemplate) {
            $res['UseTemplate'] = $this->useTemplate;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }

        if (isset($map['BandwidthPackageType'])) {
            $model->bandwidthPackageType = $map['BandwidthPackageType'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['DisplayConfig'])) {
            $model->displayConfig = displayConfig::fromMap($map['DisplayConfig']);
        }

        if (isset($map['DownBandwidthLimit'])) {
            $model->downBandwidthLimit = $map['DownBandwidthLimit'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IsSingleImgDisk'])) {
            $model->isSingleImgDisk = $map['IsSingleImgDisk'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['NetworkInfo'])) {
            $model->networkInfo = networkInfo::fromMap($map['NetworkInfo']);
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
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

        if (isset($map['ResolutionHeight'])) {
            $model->resolutionHeight = $map['ResolutionHeight'];
        }

        if (isset($map['ResolutionWidth'])) {
            $model->resolutionWidth = $map['ResolutionWidth'];
        }

        if (isset($map['ServerShareDataVolume'])) {
            $model->serverShareDataVolume = $map['ServerShareDataVolume'];
        }

        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }

        if (isset($map['StreamMode'])) {
            $model->streamMode = $map['StreamMode'];
        }

        if (isset($map['SwapSize'])) {
            $model->swapSize = $map['SwapSize'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpBandwidthLimit'])) {
            $model->upBandwidthLimit = $map['UpBandwidthLimit'];
        }

        if (isset($map['UseTemplate'])) {
            $model->useTemplate = $map['UseTemplate'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
