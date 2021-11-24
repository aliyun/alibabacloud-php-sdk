<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponseBody\basicBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponseBody\crossDomainBandwidthPackage;
use AlibabaCloud\Tea\Model;

class GetBasicAcceleratorResponseBody extends Model
{
    /**
     * @description 全球加速实例Id
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description 绑定的基础带宽包
     *
     * @var basicBandwidthPackage
     */
    public $basicBandwidthPackage;

    /**
     * @description 全球加速实例下车点Id
     *
     * @var string
     */
    public $basicEndpointGroupId;

    /**
     * @description 全球加速实例上车点Id
     *
     * @var string
     */
    public $basicIpSetId;

    /**
     * @description 使用的云企业网Id
     *
     * @var string
     */
    public $cenId;

    /**
     * @description 全球加速实例创建时间
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 绑定的跨境带宽包
     *
     * @var crossDomainBandwidthPackage
     */
    public $crossDomainBandwidthPackage;

    /**
     * @description 全球加速实例描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 到期时间
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description 全球加速实例收费类型
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description 全球加速实例名称
     *
     * @var string
     */
    public $name;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 实例状态
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'acceleratorId'               => 'AcceleratorId',
        'basicBandwidthPackage'       => 'BasicBandwidthPackage',
        'basicEndpointGroupId'        => 'BasicEndpointGroupId',
        'basicIpSetId'                => 'BasicIpSetId',
        'cenId'                       => 'CenId',
        'createTime'                  => 'CreateTime',
        'crossDomainBandwidthPackage' => 'CrossDomainBandwidthPackage',
        'description'                 => 'Description',
        'expiredTime'                 => 'ExpiredTime',
        'instanceChargeType'          => 'InstanceChargeType',
        'name'                        => 'Name',
        'regionId'                    => 'RegionId',
        'requestId'                   => 'RequestId',
        'state'                       => 'State',
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
        if (null !== $this->basicBandwidthPackage) {
            $res['BasicBandwidthPackage'] = null !== $this->basicBandwidthPackage ? $this->basicBandwidthPackage->toMap() : null;
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
        if (null !== $this->crossDomainBandwidthPackage) {
            $res['CrossDomainBandwidthPackage'] = null !== $this->crossDomainBandwidthPackage ? $this->crossDomainBandwidthPackage->toMap() : null;
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBasicAcceleratorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
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
        if (isset($map['CrossDomainBandwidthPackage'])) {
            $model->crossDomainBandwidthPackage = crossDomainBandwidthPackage::fromMap($map['CrossDomainBandwidthPackage']);
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
