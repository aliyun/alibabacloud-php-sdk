<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateEcuListResponseBody\ecuEntityList;

use AlibabaCloud\Tea\Model;

class ecuEntity extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $ipAddr;

    /**
     * @var int
     */
    public $availableCpu;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ecuId;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var bool
     */
    public $dockerEnv;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var int
     */
    public $availableMem;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $heartbeatTime;
    protected $_name = [
        'vpcId'         => 'VpcId',
        'updateTime'    => 'UpdateTime',
        'ipAddr'        => 'IpAddr',
        'availableCpu'  => 'AvailableCpu',
        'createTime'    => 'CreateTime',
        'userId'        => 'UserId',
        'instanceId'    => 'InstanceId',
        'mem'           => 'Mem',
        'regionId'      => 'RegionId',
        'ecuId'         => 'EcuId',
        'cpu'           => 'Cpu',
        'dockerEnv'     => 'DockerEnv',
        'online'        => 'Online',
        'availableMem'  => 'AvailableMem',
        'zoneId'        => 'ZoneId',
        'name'          => 'Name',
        'heartbeatTime' => 'HeartbeatTime',
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->ipAddr) {
            $res['IpAddr'] = $this->ipAddr;
        }
        if (null !== $this->availableCpu) {
            $res['AvailableCpu'] = $this->availableCpu;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ecuId) {
            $res['EcuId'] = $this->ecuId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->dockerEnv) {
            $res['DockerEnv'] = $this->dockerEnv;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->availableMem) {
            $res['AvailableMem'] = $this->availableMem;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->heartbeatTime) {
            $res['HeartbeatTime'] = $this->heartbeatTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecuEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['IpAddr'])) {
            $model->ipAddr = $map['IpAddr'];
        }
        if (isset($map['AvailableCpu'])) {
            $model->availableCpu = $map['AvailableCpu'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['EcuId'])) {
            $model->ecuId = $map['EcuId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['DockerEnv'])) {
            $model->dockerEnv = $map['DockerEnv'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['AvailableMem'])) {
            $model->availableMem = $map['AvailableMem'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['HeartbeatTime'])) {
            $model->heartbeatTime = $map['HeartbeatTime'];
        }

        return $model;
    }
}
