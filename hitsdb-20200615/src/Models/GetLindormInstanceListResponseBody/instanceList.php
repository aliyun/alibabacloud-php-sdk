<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListResponseBody;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $instanceStorage;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $instanceStatus;
    protected $_name = [
        'vpcId'           => 'VpcId',
        'engineType'      => 'EngineType',
        'expireTime'      => 'ExpireTime',
        'createTime'      => 'CreateTime',
        'payType'         => 'PayType',
        'instanceStorage' => 'InstanceStorage',
        'aliUid'          => 'AliUid',
        'serviceType'     => 'ServiceType',
        'networkType'     => 'NetworkType',
        'instanceId'      => 'InstanceId',
        'regionId'        => 'RegionId',
        'instanceAlias'   => 'InstanceAlias',
        'zoneId'          => 'ZoneId',
        'instanceStatus'  => 'InstanceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->instanceStorage) {
            $res['InstanceStorage'] = $this->instanceStorage;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['InstanceStorage'])) {
            $model->instanceStorage = $map['InstanceStorage'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        return $model;
    }
}
