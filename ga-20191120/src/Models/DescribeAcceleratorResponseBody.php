<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\basicBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\crossDomainBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\ipSetConfig;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\serviceManagedInfos;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeAcceleratorResponseBody extends Model
{
    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The bandwidth metering method. Valid values:
     *
     *   **BandwidthPackage:** billed based on bandwidth plans.
     *   **CDT**: billed based on data transfer.
     *
     * @example CDT
     *
     * @var string
     */
    public $bandwidthBillingType;

    /**
     * @description The details about the basic bandwidth plan that is associated with the GA instance.
     *
     * @var basicBandwidthPackage
     */
    public $basicBandwidthPackage;

    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance with which the GA instance is associated.
     *
     * @example cen-hjkduu767hc****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The timestamp that indicates when the GA instance is created.
     *
     * @example 1650643200
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The type of cross-border acceleration. This parameter is returned for GA instances whose bandwidth metering method is pay-by-data-transfer (CDT).
     *
     * Only **bpgPro** may be returned, which indicates BGP (Multi-ISP) Pro lines.
     * @example bpgPro
     *
     * @var string
     */
    public $crossBorderMode;

    /**
     * @description Indicates whether cross-border acceleration is enabled.
     * - **true**: yes
     * - **false**: no
     * @example false
     *
     * @var bool
     */
    public $crossBorderStatus;

    /**
     * @description The details about the cross-border acceleration bandwidth plan that is associated with the GA instance.
     *
     * This array is returned only for GA instances that are created on the international site (alibabacloud.com).
     * @var crossDomainBandwidthPackage
     */
    public $crossDomainBandwidthPackage;

    /**
     * @description Indicates whether cross-border acceleration is enabled.
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var string
     */
    public $crossPrivateState;

    /**
     * @description The ID of the Anti-DDoS Pro/Premium instance that is associated with the GA instance.
     *
     * @example ddoscoo-cn-zz11vq7j****
     *
     * @var string
     */
    public $ddosId;

    /**
     * @description The description of the GA instance.
     *
     * @example Accelerator
     *
     * @var string
     */
    public $description;

    /**
     * @description The canonical name (CNAME) that is assigned to the GA instance.
     *
     * @example ga-bp15u1i2hmtbk8c3i****.aliyunga0019.com
     *
     * @var string
     */
    public $dnsName;

    /**
     * @description The timestamp that indicates when the GA instance expires.
     *
     * @example 1653235200
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description The billing method of the GA instance.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The configurations of the acceleration area.
     *
     * @var ipSetConfig
     */
    public $ipSetConfig;

    /**
     * @description The name of the GA instance.
     *
     * @example Accelerator
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID of the GA instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 6FEA0CF3-D3B9-43E5-A304-D217037876A8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmw2vwdbujqbq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The CNAME that is used to integrate the GA instance with the Anti-DDoS service.
     *
     * @example ga-bp1f609c76zg6zuna****-1.aliyunga0047.com
     *
     * @var string
     */
    public $secondDnsName;

    /**
     * @description The ID of the service that manages the GA instance.
     *
     * >  This parameter is returned only if the value of **ServiceManaged** is **true**.
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Indicates whether the GA instance is managed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The actions that you can perform on the managed instance.
     *
     * >  * This parameter is returned only if the value of **ServiceManaged** is **true**.
     * >*   You can perform only specific actions on a managed instance.
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @description The specification of the GA instance. Valid values:
     *
     *   **1**: Small Ⅰ
     *   **2**: Small Ⅱ
     *   **3**: Small Ⅲ
     *   **5**: Medium Ⅰ
     *   **8**: Medium Ⅱ
     *   **10**: Medium Ⅲ
     *   **20**: Large Ⅰ
     *   **30**: Large Ⅱ
     *   **40**: Large Ⅲ
     *   **50**: Large Ⅳ
     *   **60**: Large Ⅴ
     *   **70**: Large Ⅵ
     *   **80**: Large VⅡ
     *   **90**: Large VⅢ
     *   **100**: Super Large Ⅰ
     *   **200**: Super Large Ⅱ
     *
     * Different specifications provide different capabilities. For more information, see [Instance specifications](https://help.aliyun.com/document_detail/153127.html).
     * @example 1
     *
     * @var string
     */
    public $spec;

    /**
     * @description The status of the GA instance. Valid values:
     *
     *   **init**: The GA instance is being initialized.
     *   **active**: The GA instance is available.
     *   **configuring**: The GA instance is being configured.
     *   **binding**: The GA instance is being associated.
     *   **unbinding**: The GA instance is being disassociated.
     *   **deleting**: The GA instance is being deleted.
     *   **finacialLocked**: The GA instance is locked due to overdue payments.
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The tags of the GA instance.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description Indicates whether the GA instance can be upgraded. Valid values:
     *
     *   **notUpgradable:** The GA instance does not need to be upgraded.
     *   **upgradable:** The GA instance can be upgraded to the latest version.
     *   **upgradeFailed:** The GA instance failed to be upgraded.
     *
     * @example notUpgradable
     *
     * @var string
     */
    public $upgradableStatus;
    protected $_name = [
        'acceleratorId'               => 'AcceleratorId',
        'bandwidthBillingType'        => 'BandwidthBillingType',
        'basicBandwidthPackage'       => 'BasicBandwidthPackage',
        'cenId'                       => 'CenId',
        'createTime'                  => 'CreateTime',
        'crossBorderMode'             => 'CrossBorderMode',
        'crossBorderStatus'           => 'CrossBorderStatus',
        'crossDomainBandwidthPackage' => 'CrossDomainBandwidthPackage',
        'crossPrivateState'           => 'CrossPrivateState',
        'ddosId'                      => 'DdosId',
        'description'                 => 'Description',
        'dnsName'                     => 'DnsName',
        'expiredTime'                 => 'ExpiredTime',
        'instanceChargeType'          => 'InstanceChargeType',
        'ipSetConfig'                 => 'IpSetConfig',
        'name'                        => 'Name',
        'regionId'                    => 'RegionId',
        'requestId'                   => 'RequestId',
        'resourceGroupId'             => 'ResourceGroupId',
        'secondDnsName'               => 'SecondDnsName',
        'serviceId'                   => 'ServiceId',
        'serviceManaged'              => 'ServiceManaged',
        'serviceManagedInfos'         => 'ServiceManagedInfos',
        'spec'                        => 'Spec',
        'state'                       => 'State',
        'tags'                        => 'Tags',
        'upgradableStatus'            => 'UpgradableStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->bandwidthBillingType) {
            $res['BandwidthBillingType'] = $this->bandwidthBillingType;
        }
        if (null !== $this->basicBandwidthPackage) {
            $res['BasicBandwidthPackage'] = null !== $this->basicBandwidthPackage ? $this->basicBandwidthPackage->toMap() : null;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->crossBorderMode) {
            $res['CrossBorderMode'] = $this->crossBorderMode;
        }
        if (null !== $this->crossBorderStatus) {
            $res['CrossBorderStatus'] = $this->crossBorderStatus;
        }
        if (null !== $this->crossDomainBandwidthPackage) {
            $res['CrossDomainBandwidthPackage'] = null !== $this->crossDomainBandwidthPackage ? $this->crossDomainBandwidthPackage->toMap() : null;
        }
        if (null !== $this->crossPrivateState) {
            $res['CrossPrivateState'] = $this->crossPrivateState;
        }
        if (null !== $this->ddosId) {
            $res['DdosId'] = $this->ddosId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dnsName) {
            $res['DnsName'] = $this->dnsName;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->ipSetConfig) {
            $res['IpSetConfig'] = null !== $this->ipSetConfig ? $this->ipSetConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->secondDnsName) {
            $res['SecondDnsName'] = $this->secondDnsName;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->serviceManagedInfos) {
            $res['ServiceManagedInfos'] = [];
            if (null !== $this->serviceManagedInfos && \is_array($this->serviceManagedInfos)) {
                $n = 0;
                foreach ($this->serviceManagedInfos as $item) {
                    $res['ServiceManagedInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->upgradableStatus) {
            $res['UpgradableStatus'] = $this->upgradableStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAcceleratorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['BandwidthBillingType'])) {
            $model->bandwidthBillingType = $map['BandwidthBillingType'];
        }
        if (isset($map['BasicBandwidthPackage'])) {
            $model->basicBandwidthPackage = basicBandwidthPackage::fromMap($map['BasicBandwidthPackage']);
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CrossBorderMode'])) {
            $model->crossBorderMode = $map['CrossBorderMode'];
        }
        if (isset($map['CrossBorderStatus'])) {
            $model->crossBorderStatus = $map['CrossBorderStatus'];
        }
        if (isset($map['CrossDomainBandwidthPackage'])) {
            $model->crossDomainBandwidthPackage = crossDomainBandwidthPackage::fromMap($map['CrossDomainBandwidthPackage']);
        }
        if (isset($map['CrossPrivateState'])) {
            $model->crossPrivateState = $map['CrossPrivateState'];
        }
        if (isset($map['DdosId'])) {
            $model->ddosId = $map['DdosId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DnsName'])) {
            $model->dnsName = $map['DnsName'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['IpSetConfig'])) {
            $model->ipSetConfig = ipSetConfig::fromMap($map['IpSetConfig']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecondDnsName'])) {
            $model->secondDnsName = $map['SecondDnsName'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['ServiceManagedInfos'])) {
            if (!empty($map['ServiceManagedInfos'])) {
                $model->serviceManagedInfos = [];
                $n                          = 0;
                foreach ($map['ServiceManagedInfos'] as $item) {
                    $model->serviceManagedInfos[$n++] = null !== $item ? serviceManagedInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpgradableStatus'])) {
            $model->upgradableStatus = $map['UpgradableStatus'];
        }

        return $model;
    }
}
