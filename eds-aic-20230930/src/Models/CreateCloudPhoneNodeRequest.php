<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeRequest\displayConfig;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeRequest\networkInfo;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateCloudPhoneNodeRequest extends Model
{
    /**
     * @description Specifies whether to enable the auto-payment feature.
     *
     * Valid values:
     *
     *   False (default): You must manually complete the payment in the Alibaba Cloud Expenses and Costs console.
     *   true: enables the auto-payment feature.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable the auto-renewal feature.
     *
     * Valid values:
     *
     *   true: enables the auto-renewal feature. In this case, the system automatically renews instances upon expiration.
     *   false (default): disables the auto-renewal feature. In this case, you need to manually renew instances upon expiration.
     *
     * @example true
     *
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
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The billing method. Only the subscription billing method is supported.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The number of cloud phone matrixes you want to purchase.
     *
     * @example 1
     *
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
     * @description The image ID.
     *
     * @example imgc-075cllfeuazh0****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The instance specification.
     *
     * Valid values:
     *
     *   ac.max: By default, this specification allows up to 25 instances. You can adjust this number by using PhoneCount (Value range: 4 to 40).
     *   ac.plus: By default, this specification allows up to 40 instances. You can adjust this number by using PhoneCount (Value range: 4 to 40).
     *
     * @example ac.max
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The office network ID.
     *
     * @example cn-hangzhou+dir-5mwr9azebliva****
     *
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
     * @description The name of the cloud phone matrix.
     *
     * @example node_name
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The subscription duration. The unit is specified by `PeriodUnit`. Valid values:
     *
     *   When `PeriodUnit` is set to **year**: 1.
     *   When `PeriodUnit` is set to **month**: 1, 2, 3, and 6.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration.
     *
     * Valid values:
     *
     *   Month (default)
     *   Year
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The number of instances per cloud phone matrix.
     *
     * @example 25
     *
     * @var int
     */
    public $phoneCount;

    /**
     * @var int
     */
    public $phoneDataVolume;

    /**
     * @description The resolution height. Unit: pixel.
     *
     * @example 1280
     *
     * @var int
     */
    public $resolutionHeight;

    /**
     * @description The resolution width. Unit: pixel.
     *
     * @example 720
     *
     * @var int
     */
    public $resolutionWidth;

    /**
     * @description The shared storage size Unit: GiB.
     *
     * @example 200
     *
     * @var int
     */
    public $serverShareDataVolume;

    /**
     * @description The matrix specification.
     *
     * Valid values:
     *
     *   cpm.gn6.gx1
     *
     * This parameter is required.
     *
     * @example cpm.gn6.gx1
     *
     * @var string
     */
    public $serverType;

    /**
     * @var int
     */
    public $streamMode;

    /**
     * @description The resource tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @var int
     */
    public $upBandwidthLimit;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-2zeekryyc1q3sm72l****
     *
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
        'networkId' => 'NetworkId',
        'networkInfo' => 'NetworkInfo',
        'networkType' => 'NetworkType',
        'nodeName' => 'NodeName',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'phoneCount' => 'PhoneCount',
        'phoneDataVolume' => 'PhoneDataVolume',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionWidth' => 'ResolutionWidth',
        'serverShareDataVolume' => 'ServerShareDataVolume',
        'serverType' => 'ServerType',
        'streamMode' => 'StreamMode',
        'tag' => 'Tag',
        'upBandwidthLimit' => 'UpBandwidthLimit',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate() {}

    public function toMap()
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
            $res['DisplayConfig'] = null !== $this->displayConfig ? $this->displayConfig->toMap() : null;
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
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->networkInfo) {
            $res['NetworkInfo'] = null !== $this->networkInfo ? $this->networkInfo->toMap() : null;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->upBandwidthLimit) {
            $res['UpBandwidthLimit'] = $this->upBandwidthLimit;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudPhoneNodeRequest
     */
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpBandwidthLimit'])) {
            $model->upBandwidthLimit = $map['UpBandwidthLimit'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
