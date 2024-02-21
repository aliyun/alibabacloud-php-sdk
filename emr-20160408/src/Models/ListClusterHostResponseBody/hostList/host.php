<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostResponseBody\hostList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostResponseBody\hostList\host\diskList;
use AlibabaCloud\Tea\Model;

class host extends Model
{
    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 4
     *
     * @var int
     */
    public $cpu;

    /**
     * @example 1599635156000
     *
     * @var string
     */
    public $createTime;

    /**
     * @var diskList
     */
    public $diskList;

    /**
     * @var string
     */
    public $emrExpiredTime;

    /**
     * @example 32493801600000
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @example G-A5EA210E15FC****
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @example i-bp1cfwf2cwgji7ds****
     *
     * @var string
     */
    public $hostInstanceId;

    /**
     * @example emr-header-1
     *
     * @var string
     */
    public $hostName;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example ecs.mn4.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 16
     *
     * @var int
     */
    public $memory;

    /**
     * @example 192.***.****.***
     *
     * @var string
     */
    public $privateIp;

    /**
     * @example 47.***.***.***
     *
     * @var string
     */
    public $publicIp;

    /**
     * @example MASTER
     *
     * @var string
     */
    public $role;

    /**
     * @example 3c2a5078-778d-4c18-87e4-1a38fbcb****
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @example false
     *
     * @var bool
     */
    public $supportIpV6;

    /**
     * @example VM
     *
     * @var string
     */
    public $type;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'chargeType'     => 'ChargeType',
        'cpu'            => 'Cpu',
        'createTime'     => 'CreateTime',
        'diskList'       => 'DiskList',
        'emrExpiredTime' => 'EmrExpiredTime',
        'expiredTime'    => 'ExpiredTime',
        'hostGroupId'    => 'HostGroupId',
        'hostInstanceId' => 'HostInstanceId',
        'hostName'       => 'HostName',
        'instanceStatus' => 'InstanceStatus',
        'instanceType'   => 'InstanceType',
        'memory'         => 'Memory',
        'privateIp'      => 'PrivateIp',
        'publicIp'       => 'PublicIp',
        'role'           => 'Role',
        'serialNumber'   => 'SerialNumber',
        'status'         => 'Status',
        'supportIpV6'    => 'SupportIpV6',
        'type'           => 'Type',
        'zoneId'         => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->diskList) {
            $res['DiskList'] = null !== $this->diskList ? $this->diskList->toMap() : null;
        }
        if (null !== $this->emrExpiredTime) {
            $res['EmrExpiredTime'] = $this->emrExpiredTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->hostInstanceId) {
            $res['HostInstanceId'] = $this->hostInstanceId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportIpV6) {
            $res['SupportIpV6'] = $this->supportIpV6;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return host
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DiskList'])) {
            $model->diskList = diskList::fromMap($map['DiskList']);
        }
        if (isset($map['EmrExpiredTime'])) {
            $model->emrExpiredTime = $map['EmrExpiredTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostInstanceId'])) {
            $model->hostInstanceId = $map['HostInstanceId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportIpV6'])) {
            $model->supportIpV6 = $map['SupportIpV6'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
