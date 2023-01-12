<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\basicBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\crossDomainBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\ipSetConfig;
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
     * @example CDT
     *
     * @var string
     */
    public $bandwidthBillingType;

    /**
     * @description Details about the basic bandwidth plan that is associated with the GA instance.
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
     * @description The timestamp that indicates the time when the GA instance was created.
     *
     * @example 1650643200
     *
     * @var int
     */
    public $createTime;

    /**
     * @example private
     *
     * @var string
     */
    public $crossBorderMode;

    /**
     * @description Details about the cross-region acceleration bandwidth plan that is associated with the GA instance.
     *
     * This array is returned only for GA instances that are created on the International site (alibabacloud.com).
     * @var crossDomainBandwidthPackage
     */
    public $crossDomainBandwidthPackage;

    /**
     * @example false
     *
     * @var string
     */
    public $crossPrivateState;

    /**
     * @description The ID of the Anti-DDoS Pro or Anti-DDoS Premium instance that is associated with the GA instance.
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
     * @example ga-bp1j80t5****.uisnetwork.com
     *
     * @var string
     */
    public $dnsName;

    /**
     * @description The timestamp that indicates the time when the GA instance expires.
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
     *   **300**: Super Large Ⅲ
     *
     * Each instance specification provides different capabilities. For more information, see the "Specifications of standard GA instances" section in [Overview](~~153127~~).
     * @example 1
     *
     * @var string
     */
    public $spec;

    /**
     * @description The state of the GA instance. Valid values:
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
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'acceleratorId'               => 'AcceleratorId',
        'bandwidthBillingType'        => 'BandwidthBillingType',
        'basicBandwidthPackage'       => 'BasicBandwidthPackage',
        'cenId'                       => 'CenId',
        'createTime'                  => 'CreateTime',
        'crossBorderMode'             => 'CrossBorderMode',
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
        'spec'                        => 'Spec',
        'state'                       => 'State',
        'tags'                        => 'Tags',
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

        return $model;
    }
}
