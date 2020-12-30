<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostComponentResponseBody\componentList;

use AlibabaCloud\Tea\Model;

class component extends Model
{
    /**
     * @var string
     */
    public $serviceDisplayName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $serverStatus;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $commissionStatus;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var bool
     */
    public $needRestart;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $hostInstanceId;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $componentDisplayName;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'serviceDisplayName'   => 'ServiceDisplayName',
        'status'               => 'Status',
        'serialNumber'         => 'SerialNumber',
        'serverStatus'         => 'ServerStatus',
        'privateIp'            => 'PrivateIp',
        'componentName'        => 'ComponentName',
        'commissionStatus'     => 'CommissionStatus',
        'hostName'             => 'HostName',
        'needRestart'          => 'NeedRestart',
        'instanceType'         => 'InstanceType',
        'hostId'               => 'HostId',
        'hostInstanceId'       => 'HostInstanceId',
        'cpu'                  => 'Cpu',
        'componentDisplayName' => 'ComponentDisplayName',
        'publicIp'             => 'PublicIp',
        'memory'               => 'Memory',
        'role'                 => 'Role',
        'serviceName'          => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->serverStatus) {
            $res['ServerStatus'] = $this->serverStatus;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->commissionStatus) {
            $res['CommissionStatus'] = $this->commissionStatus;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->needRestart) {
            $res['NeedRestart'] = $this->needRestart;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->hostInstanceId) {
            $res['HostInstanceId'] = $this->hostInstanceId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->componentDisplayName) {
            $res['ComponentDisplayName'] = $this->componentDisplayName;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return component
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['ServerStatus'])) {
            $model->serverStatus = $map['ServerStatus'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['CommissionStatus'])) {
            $model->commissionStatus = $map['CommissionStatus'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['NeedRestart'])) {
            $model->needRestart = $map['NeedRestart'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['HostInstanceId'])) {
            $model->hostInstanceId = $map['HostInstanceId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['ComponentDisplayName'])) {
            $model->componentDisplayName = $map['ComponentDisplayName'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
