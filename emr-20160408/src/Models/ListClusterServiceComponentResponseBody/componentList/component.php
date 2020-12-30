<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentResponseBody\componentList;

use AlibabaCloud\Tea\Model;

class component extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $serviceDisplayName;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $serverStatus;

    /**
     * @var string
     */
    public $podName;

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
    public $namespace;

    /**
     * @var bool
     */
    public $needRestart;

    /**
     * @var string
     */
    public $workloadType;

    /**
     * @var string
     */
    public $workloadName;

    /**
     * @var string
     */
    public $componentDisplayName;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $role;

    /**
     * @var int
     */
    public $desiredCount;
    protected $_name = [
        'status'               => 'Status',
        'serviceDisplayName'   => 'ServiceDisplayName',
        'privateIp'            => 'PrivateIp',
        'serverStatus'         => 'ServerStatus',
        'podName'              => 'PodName',
        'componentName'        => 'ComponentName',
        'commissionStatus'     => 'CommissionStatus',
        'namespace'            => 'Namespace',
        'needRestart'          => 'NeedRestart',
        'workloadType'         => 'WorkloadType',
        'workloadName'         => 'WorkloadName',
        'componentDisplayName' => 'ComponentDisplayName',
        'publicIp'             => 'PublicIp',
        'serviceName'          => 'ServiceName',
        'role'                 => 'Role',
        'desiredCount'         => 'DesiredCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->serverStatus) {
            $res['ServerStatus'] = $this->serverStatus;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->commissionStatus) {
            $res['CommissionStatus'] = $this->commissionStatus;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->needRestart) {
            $res['NeedRestart'] = $this->needRestart;
        }
        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
        }
        if (null !== $this->workloadName) {
            $res['WorkloadName'] = $this->workloadName;
        }
        if (null !== $this->componentDisplayName) {
            $res['ComponentDisplayName'] = $this->componentDisplayName;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->desiredCount) {
            $res['DesiredCount'] = $this->desiredCount;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['ServerStatus'])) {
            $model->serverStatus = $map['ServerStatus'];
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['CommissionStatus'])) {
            $model->commissionStatus = $map['CommissionStatus'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NeedRestart'])) {
            $model->needRestart = $map['NeedRestart'];
        }
        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }
        if (isset($map['WorkloadName'])) {
            $model->workloadName = $map['WorkloadName'];
        }
        if (isset($map['ComponentDisplayName'])) {
            $model->componentDisplayName = $map['ComponentDisplayName'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['DesiredCount'])) {
            $model->desiredCount = $map['DesiredCount'];
        }

        return $model;
    }
}
