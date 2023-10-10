<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListScaleOutEcuResponseBody\ecuInfoList;

use AlibabaCloud\Tea\Model;

class ecuInfo extends Model
{
    /**
     * @description The number of available CPU cores for the ECU.
     *
     * @example 2
     *
     * @var int
     */
    public $availableCpu;

    /**
     * @description The size of available memory for the ECU. Unit: MB.
     *
     * @example 111
     *
     * @var int
     */
    public $availableMem;

    /**
     * @description The time when the ECU was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573281040819
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
     * @example false
     *
     * @var bool
     */
    public $dockerEnv;

    /**
     * @description The unique ID of the ECU. To query the ID, you can run the `dmidecode` command on the ECS instance that corresponds to the ECU.
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
     * @description The ID of the ECU.
     *
     * @example i-2zej4i2jdf*********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The private IP address of the ECU.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $ipAddr;

    /**
     * @description The name of the ECU.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the ECU is online. If the ECU is online, its corresponding ECS instance is managed in EDAS. Valid values:
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
     * @description The ID of the region where the ECU is located.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the ECU was last updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573281040827
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the Alibaba Cloud account to which the ECU belongs.
     *
     * @example 1172****6608****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The ID of the virtual private cloud (VPC) where the ECU is located.
     *
     * @example vpc-2zef6ob8**********
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone where the ECU resides.
     *
     * @example cn-beijing-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableCpu'  => 'AvailableCpu',
        'availableMem'  => 'AvailableMem',
        'createTime'    => 'CreateTime',
        'dockerEnv'     => 'DockerEnv',
        'ecuId'         => 'EcuId',
        'heartbeatTime' => 'HeartbeatTime',
        'instanceId'    => 'InstanceId',
        'ipAddr'        => 'IpAddr',
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
     * @return ecuInfo
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
