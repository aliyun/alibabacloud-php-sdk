<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\basicBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\crossDomainBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\ddosConfigList;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\ipSetConfig;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\serviceManagedInfos;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\tags;

class DescribeAcceleratorResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bandwidthBillingType;

    /**
     * @var basicBandwidthPackage
     */
    public $basicBandwidthPackage;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $crossBorderMode;

    /**
     * @var bool
     */
    public $crossBorderStatus;

    /**
     * @var crossDomainBandwidthPackage
     */
    public $crossDomainBandwidthPackage;

    /**
     * @var string
     */
    public $crossPrivateState;

    /**
     * @var ddosConfigList[]
     */
    public $ddosConfigList;

    /**
     * @var string
     */
    public $ddosId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dnsName;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var ipSetConfig
     */
    public $ipSetConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $secondDnsName;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $state;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $upgradableStatus;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'bandwidth' => 'Bandwidth',
        'bandwidthBillingType' => 'BandwidthBillingType',
        'basicBandwidthPackage' => 'BasicBandwidthPackage',
        'cenId' => 'CenId',
        'createTime' => 'CreateTime',
        'crossBorderMode' => 'CrossBorderMode',
        'crossBorderStatus' => 'CrossBorderStatus',
        'crossDomainBandwidthPackage' => 'CrossDomainBandwidthPackage',
        'crossPrivateState' => 'CrossPrivateState',
        'ddosConfigList' => 'DdosConfigList',
        'ddosId' => 'DdosId',
        'description' => 'Description',
        'dnsName' => 'DnsName',
        'expiredTime' => 'ExpiredTime',
        'instanceChargeType' => 'InstanceChargeType',
        'ipSetConfig' => 'IpSetConfig',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'secondDnsName' => 'SecondDnsName',
        'serviceId' => 'ServiceId',
        'serviceManaged' => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
        'spec' => 'Spec',
        'state' => 'State',
        'tags' => 'Tags',
        'upgradableStatus' => 'UpgradableStatus',
    ];

    public function validate()
    {
        if (null !== $this->basicBandwidthPackage) {
            $this->basicBandwidthPackage->validate();
        }
        if (null !== $this->crossDomainBandwidthPackage) {
            $this->crossDomainBandwidthPackage->validate();
        }
        if (\is_array($this->ddosConfigList)) {
            Model::validateArray($this->ddosConfigList);
        }
        if (null !== $this->ipSetConfig) {
            $this->ipSetConfig->validate();
        }
        if (\is_array($this->serviceManagedInfos)) {
            Model::validateArray($this->serviceManagedInfos);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->bandwidthBillingType) {
            $res['BandwidthBillingType'] = $this->bandwidthBillingType;
        }

        if (null !== $this->basicBandwidthPackage) {
            $res['BasicBandwidthPackage'] = null !== $this->basicBandwidthPackage ? $this->basicBandwidthPackage->toArray($noStream) : $this->basicBandwidthPackage;
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
            $res['CrossDomainBandwidthPackage'] = null !== $this->crossDomainBandwidthPackage ? $this->crossDomainBandwidthPackage->toArray($noStream) : $this->crossDomainBandwidthPackage;
        }

        if (null !== $this->crossPrivateState) {
            $res['CrossPrivateState'] = $this->crossPrivateState;
        }

        if (null !== $this->ddosConfigList) {
            if (\is_array($this->ddosConfigList)) {
                $res['DdosConfigList'] = [];
                $n1 = 0;
                foreach ($this->ddosConfigList as $item1) {
                    $res['DdosConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $res['IpSetConfig'] = null !== $this->ipSetConfig ? $this->ipSetConfig->toArray($noStream) : $this->ipSetConfig;
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
            if (\is_array($this->serviceManagedInfos)) {
                $res['ServiceManagedInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceManagedInfos as $item1) {
                    $res['ServiceManagedInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->upgradableStatus) {
            $res['UpgradableStatus'] = $this->upgradableStatus;
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
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
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

        if (isset($map['DdosConfigList'])) {
            if (!empty($map['DdosConfigList'])) {
                $model->ddosConfigList = [];
                $n1 = 0;
                foreach ($map['DdosConfigList'] as $item1) {
                    $model->ddosConfigList[$n1] = ddosConfigList::fromMap($item1);
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['ServiceManagedInfos'] as $item1) {
                    $model->serviceManagedInfos[$n1] = serviceManagedInfos::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpgradableStatus'])) {
            $model->upgradableStatus = $map['UpgradableStatus'];
        }

        return $model;
    }
}
