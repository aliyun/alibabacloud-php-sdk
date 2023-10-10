<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListEcuByRegionResponseBody\ecuEntityList;

use AlibabaCloud\Tea\Model;

class ecuEntity extends Model
{
    /**
     * @description The number of available CPU cores for the ECU.
     *
     * @example 4
     *
     * @var int
     */
    public $availableCpu;

    /**
     * @description The size of available memory for the ECU. Unit: MB.
     *
     * @example 8192
     *
     * @var int
     */
    public $availableMem;

    /**
     * @description The total number of CPU cores.
     *
     * @example 0
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The timestamp when the ECU was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1572539283168
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
     * @description The unique ID of the ECU. To query the ID, you can run the `dmidecode` command on the ECS instance that corresponds to the ECU.
     *
     * @example c96c494c-1b91-4456-bbb3-b5afcd16****
     *
     * @var string
     */
    public $ecuId;

    /**
     * @description The timestamp when the last heartbeat detection was performed. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1572867865221
     *
     * @var int
     */
    public $heartbeatTime;

    /**
     * @description The ID of the ECU.
     *
     * @example i-2ze82h8f4zcn449y****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The private IP address of the ECU.
     *
     * @example 192.168.xxx.xxx
     *
     * @var string
     */
    public $ipAddr;

    /**
     * @description The total size of memory. Unit: MB.
     *
     * @example 0
     *
     * @var int
     */
    public $mem;

    /**
     * @description The name of the ECU.
     *
     * @example worker-k8s-for
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
     * @example false
     *
     * @var bool
     */
    public $online;

    /**
     * @description The ID of the region in which the ECU resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The timestamp when the ECU was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1572867895575
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example edas@aliyun-****.com
     *
     * @var string
     */
    public $userId;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the ECU resides.
     *
     * @example vpc-2zew8mi6gqbo5wf****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone in which the ECU resides.
     *
     * @example cn-beijing-a
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
