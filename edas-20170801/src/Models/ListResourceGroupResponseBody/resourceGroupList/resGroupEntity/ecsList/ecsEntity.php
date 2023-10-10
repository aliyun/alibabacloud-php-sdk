<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\ecsList;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\ecsList\ecsEntity\ecuEntity;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\ecsList\ecsEntity\vpcEntity;
use AlibabaCloud\Tea\Model;

class ecsEntity extends Model
{
    /**
     * @description The total number of CPU cores.
     *
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The description of the ECS instance.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The elastic compute unit (ECU) that corresponds to the ECS instance.
     *
     * @var ecuEntity
     */
    public $ecuEntity;

    /**
     * @description The elastic IP address (EIP).
     *
     * @example 192.168.xxx.xx
     *
     * @var string
     */
    public $eip;

    /**
     * @description Indicates whether the ECS instance has expired. Valid values:
     *
     *   true: The ECS instance has expired.
     *   false: The ECS instance has not expired.
     *
     * @example true
     *
     * @var bool
     */
    public $expired;

    /**
     * @description The ID of the resource group in Enterprise Distributed Application Service (EDAS).
     *
     * @example 64189****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the host.
     *
     * @example iZm5e853hvvrodnvqus****
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The private IP address.
     *
     * @example 192.168.xx.xxx
     *
     * @var string
     */
    public $innerIp;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-m5e853hvvrodnvqu****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the ECS instance.
     *
     * @example betabjmixcoud_01
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The total size of memory. Unit: MB.
     *
     * @example 1
     *
     * @var int
     */
    public $mem;

    /**
     * @description The private IP address of the ECS instance.
     *
     * @example 192.168.xx.xxx
     *
     * @var string
     */
    public $privateIp;

    /**
     * @description The public IP address.
     *
     * @example 192.168.xx.xxx
     *
     * @var string
     */
    public $publicIp;

    /**
     * @description The ID of the region.
     *
     * @example ch-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The serial number of the ECS instance.
     *
     * @example 98b480b8-458b-4ff3-84b9-cf7097c5****
     *
     * @var string
     */
    public $serialNum;

    /**
     * @description The ID of the security group.
     *
     * @example sg-m5eajgzn6b8sg9mv****
     *
     * @var string
     */
    public $sgId;

    /**
     * @description The status of the ECS instance. Valid values:
     *
     *   Pending: The ECS instance is being created.
     *   Running: The ECS instance is running.
     *   Starting: The ECS instance is being started.
     *   Stopping: The ECS instance is being stopped.
     *   Stopped: The ECS instance is stopped.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the user account.
     *
     * @example ****_common_****@aliyun.com
     *
     * @var string
     */
    public $userId;

    /**
     * @description The VPCs.
     *
     * @var vpcEntity
     */
    public $vpcEntity;

    /**
     * @description The unique ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp13evu4aayj2t1er****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone.
     *
     * @example cn-qingdao-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cpu'          => 'Cpu',
        'description'  => 'Description',
        'ecuEntity'    => 'EcuEntity',
        'eip'          => 'Eip',
        'expired'      => 'Expired',
        'groupId'      => 'GroupId',
        'hostName'     => 'HostName',
        'innerIp'      => 'InnerIp',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'mem'          => 'Mem',
        'privateIp'    => 'PrivateIp',
        'publicIp'     => 'PublicIp',
        'regionId'     => 'RegionId',
        'serialNum'    => 'SerialNum',
        'sgId'         => 'SgId',
        'status'       => 'Status',
        'userId'       => 'UserId',
        'vpcEntity'    => 'VpcEntity',
        'vpcId'        => 'VpcId',
        'zoneId'       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecuEntity) {
            $res['EcuEntity'] = null !== $this->ecuEntity ? $this->ecuEntity->toMap() : null;
        }
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->innerIp) {
            $res['InnerIp'] = $this->innerIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serialNum) {
            $res['SerialNum'] = $this->serialNum;
        }
        if (null !== $this->sgId) {
            $res['SgId'] = $this->sgId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->vpcEntity) {
            $res['VpcEntity'] = null !== $this->vpcEntity ? $this->vpcEntity->toMap() : null;
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
     * @return ecsEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcuEntity'])) {
            $model->ecuEntity = ecuEntity::fromMap($map['EcuEntity']);
        }
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InnerIp'])) {
            $model->innerIp = $map['InnerIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SerialNum'])) {
            $model->serialNum = $map['SerialNum'];
        }
        if (isset($map['SgId'])) {
            $model->sgId = $map['SgId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VpcEntity'])) {
            $model->vpcEntity = vpcEntity::fromMap($map['VpcEntity']);
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
