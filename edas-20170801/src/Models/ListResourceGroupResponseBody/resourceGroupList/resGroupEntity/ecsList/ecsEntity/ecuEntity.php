<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\ecsList\ecsEntity;

use AlibabaCloud\Tea\Model;

class ecuEntity extends Model
{
    /**
     * @description The number of available CPUs.
     *
     * @example 1
     *
     * @var int
     */
    public $availableCpu;

    /**
     * @description The size of the available memory.
     *
     * @example 200
     *
     * @var int
     */
    public $availableMem;

    /**
     * @description The total number of CPU cores.
     *
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the ECU was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1557890594376
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Indicates whether Docker is installed. Valid values:
     *
     *   true: Docker is installed.
     *   false: Docker is not installed.
     *
     * @example true
     *
     * @var bool
     */
    public $dockerEnv;

    /**
     * @description The unique ID of the elastic compute unit (ECU). You can run the `dmidecode` command on the ECS instance to query the ECU ID.
     *
     * @example 0de2ebdb-9490-4fc4-be41***************
     *
     * @var string
     */
    public $ecuId;

    /**
     * @description The time when the last heartbeat detection was performed. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573281040819
     *
     * @var int
     */
    public $heartbeatTime;

    /**
     * @description The ID of the instance.
     *
     * @example i-2zej4i2jdf*********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The private IP address of the ECU.
     *
     * @example 192.168.xxx.xx
     *
     * @var string
     */
    public $ipAddr;

    /**
     * @description The total size of memory. Unit: MB.
     *
     * @example 200
     *
     * @var int
     */
    public $mem;

    /**
     * @description The name of the ECU.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the ECU is online. Valid values:
     *
     *   true: The ECU is online.
     *   false: The ECU is offline.
     *
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the ECU was updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573281040827
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the user associated with the ECU.
     *
     * @example edas_****_test@aliyun-****.com
     *
     * @var string
     */
    public $userId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-2ze1ram356umxs598****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone.
     *
     * @example cn-beijing-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableCpu'  => 'AvailableCpu',
        'availableMem'  => 'AvailableMem',
        'cpu'           => 'Cpu',
        'createTime'    => 'CreateTime',
        'dockerEnv'     => 'DockerEnv',
        'ecuId'         => 'EcuId',
        'heartbeatTime' => 'HeartbeatTime',
        'instanceId'    => 'InstanceId',
        'ipAddr'        => 'IpAddr',
        'mem'           => 'Mem',
        'name'          => 'Name',
        'online'        => 'Online',
        'regionId'      => 'RegionId',
        'updateTime'    => 'UpdateTime',
        'userId'        => 'UserId',
        'vpcId'         => 'VpcId',
        'zoneId'        => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableCpu) {
            $res['AvailableCpu'] = $this->availableCpu;
        }
        if (null !== $this->availableMem) {
            $res['AvailableMem'] = $this->availableMem;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dockerEnv) {
            $res['DockerEnv'] = $this->dockerEnv;
        }
        if (null !== $this->ecuId) {
            $res['EcuId'] = $this->ecuId;
        }
        if (null !== $this->heartbeatTime) {
            $res['HeartbeatTime'] = $this->heartbeatTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipAddr) {
            $res['IpAddr'] = $this->ipAddr;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
     * @return ecuEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableCpu'])) {
            $model->availableCpu = $map['AvailableCpu'];
        }
        if (isset($map['AvailableMem'])) {
            $model->availableMem = $map['AvailableMem'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DockerEnv'])) {
            $model->dockerEnv = $map['DockerEnv'];
        }
        if (isset($map['EcuId'])) {
            $model->ecuId = $map['EcuId'];
        }
        if (isset($map['HeartbeatTime'])) {
            $model->heartbeatTime = $map['HeartbeatTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpAddr'])) {
            $model->ipAddr = $map['IpAddr'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
