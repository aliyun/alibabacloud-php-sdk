<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponseBody\basicBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponseBody\crossDomainBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponseBody\tags;

class GetBasicAcceleratorResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

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
    public $basicEndpointGroupId;

    /**
     * @var string
     */
    public $basicIpSetId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var int
     */
    public $createTime;

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
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $instanceChargeType;

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
    public $state;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'bandwidthBillingType' => 'BandwidthBillingType',
        'basicBandwidthPackage' => 'BasicBandwidthPackage',
        'basicEndpointGroupId' => 'BasicEndpointGroupId',
        'basicIpSetId' => 'BasicIpSetId',
        'cenId' => 'CenId',
        'createTime' => 'CreateTime',
        'crossBorderStatus' => 'CrossBorderStatus',
        'crossDomainBandwidthPackage' => 'CrossDomainBandwidthPackage',
        'crossPrivateState' => 'CrossPrivateState',
        'description' => 'Description',
        'expiredTime' => 'ExpiredTime',
        'instanceChargeType' => 'InstanceChargeType',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'state' => 'State',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->basicBandwidthPackage) {
            $this->basicBandwidthPackage->validate();
        }
        if (null !== $this->crossDomainBandwidthPackage) {
            $this->crossDomainBandwidthPackage->validate();
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

        if (null !== $this->bandwidthBillingType) {
            $res['BandwidthBillingType'] = $this->bandwidthBillingType;
        }

        if (null !== $this->basicBandwidthPackage) {
            $res['BasicBandwidthPackage'] = null !== $this->basicBandwidthPackage ? $this->basicBandwidthPackage->toArray($noStream) : $this->basicBandwidthPackage;
        }

        if (null !== $this->basicEndpointGroupId) {
            $res['BasicEndpointGroupId'] = $this->basicEndpointGroupId;
        }

        if (null !== $this->basicIpSetId) {
            $res['BasicIpSetId'] = $this->basicIpSetId;
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
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

        if (isset($map['BandwidthBillingType'])) {
            $model->bandwidthBillingType = $map['BandwidthBillingType'];
        }

        if (isset($map['BasicBandwidthPackage'])) {
            $model->basicBandwidthPackage = basicBandwidthPackage::fromMap($map['BasicBandwidthPackage']);
        }

        if (isset($map['BasicEndpointGroupId'])) {
            $model->basicEndpointGroupId = $map['BasicEndpointGroupId'];
        }

        if (isset($map['BasicIpSetId'])) {
            $model->basicIpSetId = $map['BasicIpSetId'];
        }

        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
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

        return $model;
    }
}
