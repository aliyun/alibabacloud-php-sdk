<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListResponseBody;

use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListResponseBody\instanceList\tags;
use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @example 164901546557****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example 1631772842000
     *
     * @var int
     */
    public $createMilliseconds;

    /**
     * @example 2021-09-16 14:13:13
     *
     * @var string
     */
    public $createTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableCompute;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableStream;

    /**
     * @example 15
     *
     * @var string
     */
    public $engineType;

    /**
     * @example 2022-04-26 00:00:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 1650902400000
     *
     * @var int
     */
    public $expiredMilliseconds;

    /**
     * @example test
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @example ld-bp17pwu1541ia****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ACTIVATION
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example 960
     *
     * @var string
     */
    public $instanceStorage;

    /**
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @example PREPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-aekzledqeat****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example lindorm
     *
     * @var string
     */
    public $serviceType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example vpc-bp1n3i15v90el48nx****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid'              => 'AliUid',
        'createMilliseconds'  => 'CreateMilliseconds',
        'createTime'          => 'CreateTime',
        'enableCompute'       => 'EnableCompute',
        'enableStream'        => 'EnableStream',
        'engineType'          => 'EngineType',
        'expireTime'          => 'ExpireTime',
        'expiredMilliseconds' => 'ExpiredMilliseconds',
        'instanceAlias'       => 'InstanceAlias',
        'instanceId'          => 'InstanceId',
        'instanceStatus'      => 'InstanceStatus',
        'instanceStorage'     => 'InstanceStorage',
        'networkType'         => 'NetworkType',
        'payType'             => 'PayType',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'serviceType'         => 'ServiceType',
        'tags'                => 'Tags',
        'vpcId'               => 'VpcId',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->createMilliseconds) {
            $res['CreateMilliseconds'] = $this->createMilliseconds;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enableCompute) {
            $res['EnableCompute'] = $this->enableCompute;
        }
        if (null !== $this->enableStream) {
            $res['EnableStream'] = $this->enableStream;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expiredMilliseconds) {
            $res['ExpiredMilliseconds'] = $this->expiredMilliseconds;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceStorage) {
            $res['InstanceStorage'] = $this->instanceStorage;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CreateMilliseconds'])) {
            $model->createMilliseconds = $map['CreateMilliseconds'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnableCompute'])) {
            $model->enableCompute = $map['EnableCompute'];
        }
        if (isset($map['EnableStream'])) {
            $model->enableStream = $map['EnableStream'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpiredMilliseconds'])) {
            $model->expiredMilliseconds = $map['ExpiredMilliseconds'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceStorage'])) {
            $model->instanceStorage = $map['InstanceStorage'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
