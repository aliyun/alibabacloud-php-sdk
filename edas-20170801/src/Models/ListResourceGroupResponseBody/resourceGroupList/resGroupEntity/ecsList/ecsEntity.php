<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\ecsList;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\ecsList\ecsEntity\ecuEntity;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\ecsList\ecsEntity\vpcEntity;
use AlibabaCloud\Tea\Model;

class ecsEntity extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string
     */
    public $innerIp;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $eip;

    /**
     * @var string
     */
    public $serialNum;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $sgId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var ecuEntity
     */
    public $ecuEntity;

    /**
     * @var vpcEntity
     */
    public $vpcEntity;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'hostName'     => 'HostName',
        'description'  => 'Description',
        'status'       => 'Status',
        'publicIp'     => 'PublicIp',
        'innerIp'      => 'InnerIp',
        'privateIp'    => 'PrivateIp',
        'eip'          => 'Eip',
        'serialNum'    => 'SerialNum',
        'userId'       => 'UserId',
        'zoneId'       => 'ZoneId',
        'regionId'     => 'RegionId',
        'expired'      => 'Expired',
        'sgId'         => 'SgId',
        'vpcId'        => 'VpcId',
        'groupId'      => 'GroupId',
        'cpu'          => 'Cpu',
        'mem'          => 'Mem',
        'ecuEntity'    => 'EcuEntity',
        'vpcEntity'    => 'VpcEntity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->innerIp) {
            $res['InnerIp'] = $this->innerIp;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }
        if (null !== $this->serialNum) {
            $res['SerialNum'] = $this->serialNum;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->sgId) {
            $res['SgId'] = $this->sgId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->ecuEntity) {
            $res['EcuEntity'] = null !== $this->ecuEntity ? $this->ecuEntity->toMap() : null;
        }
        if (null !== $this->vpcEntity) {
            $res['VpcEntity'] = null !== $this->vpcEntity ? $this->vpcEntity->toMap() : null;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['InnerIp'])) {
            $model->innerIp = $map['InnerIp'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['SerialNum'])) {
            $model->serialNum = $map['SerialNum'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['SgId'])) {
            $model->sgId = $map['SgId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['EcuEntity'])) {
            $model->ecuEntity = ecuEntity::fromMap($map['EcuEntity']);
        }
        if (isset($map['VpcEntity'])) {
            $model->vpcEntity = vpcEntity::fromMap($map['VpcEntity']);
        }

        return $model;
    }
}
