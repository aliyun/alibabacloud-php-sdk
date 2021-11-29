<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostComponentResponseBody\componentList;

use AlibabaCloud\Tea\Model;

class component extends Model
{
    /**
     * @var string
     */
    public $commissionStatus;

    /**
     * @var string
     */
    public $componentDisplayName;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $healthReportTime;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $hostInstanceId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var bool
     */
    public $needRestart;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string
     */
    public $role;

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
    public $serviceDisplayName;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'commissionStatus'     => 'CommissionStatus',
        'componentDisplayName' => 'ComponentDisplayName',
        'componentName'        => 'ComponentName',
        'cpu'                  => 'Cpu',
        'healthReportTime'     => 'HealthReportTime',
        'healthStatus'         => 'HealthStatus',
        'hostId'               => 'HostId',
        'hostInstanceId'       => 'HostInstanceId',
        'hostName'             => 'HostName',
        'instanceType'         => 'InstanceType',
        'memory'               => 'Memory',
        'needRestart'          => 'NeedRestart',
        'privateIp'            => 'PrivateIp',
        'publicIp'             => 'PublicIp',
        'role'                 => 'Role',
        'serialNumber'         => 'SerialNumber',
        'serverStatus'         => 'ServerStatus',
        'serviceDisplayName'   => 'ServiceDisplayName',
        'serviceName'          => 'ServiceName',
        'state'                => 'State',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commissionStatus) {
            $res['CommissionStatus'] = $this->commissionStatus;
        }
        if (null !== $this->componentDisplayName) {
            $res['ComponentDisplayName'] = $this->componentDisplayName;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->healthReportTime) {
            $res['HealthReportTime'] = $this->healthReportTime;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->hostInstanceId) {
            $res['HostInstanceId'] = $this->hostInstanceId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->needRestart) {
            $res['NeedRestart'] = $this->needRestart;
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
        if (null !== $this->serverStatus) {
            $res['ServerStatus'] = $this->serverStatus;
        }
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CommissionStatus'])) {
            $model->commissionStatus = $map['CommissionStatus'];
        }
        if (isset($map['ComponentDisplayName'])) {
            $model->componentDisplayName = $map['ComponentDisplayName'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['HealthReportTime'])) {
            $model->healthReportTime = $map['HealthReportTime'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['HostInstanceId'])) {
            $model->hostInstanceId = $map['HostInstanceId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NeedRestart'])) {
            $model->needRestart = $map['NeedRestart'];
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
        if (isset($map['ServerStatus'])) {
            $model->serverStatus = $map['ServerStatus'];
        }
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
