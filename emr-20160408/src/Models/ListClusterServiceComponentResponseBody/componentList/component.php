<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentResponseBody\componentList;

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
    public $desiredCount;

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
    public $podName;

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
    public $status;

    /**
     * @var string
     */
    public $workloadName;

    /**
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'commissionStatus'     => 'CommissionStatus',
        'componentDisplayName' => 'ComponentDisplayName',
        'componentName'        => 'ComponentName',
        'desiredCount'         => 'DesiredCount',
        'namespace'            => 'Namespace',
        'needRestart'          => 'NeedRestart',
        'podName'              => 'PodName',
        'privateIp'            => 'PrivateIp',
        'publicIp'             => 'PublicIp',
        'role'                 => 'Role',
        'serverStatus'         => 'ServerStatus',
        'serviceDisplayName'   => 'ServiceDisplayName',
        'serviceName'          => 'ServiceName',
        'status'               => 'Status',
        'workloadName'         => 'WorkloadName',
        'workloadType'         => 'WorkloadType',
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
        if (null !== $this->desiredCount) {
            $res['DesiredCount'] = $this->desiredCount;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->needRestart) {
            $res['NeedRestart'] = $this->needRestart;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
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
        if (null !== $this->serverStatus) {
            $res['ServerStatus'] = $this->serverStatus;
        }
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workloadName) {
            $res['WorkloadName'] = $this->workloadName;
        }
        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
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
        if (isset($map['DesiredCount'])) {
            $model->desiredCount = $map['DesiredCount'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NeedRestart'])) {
            $model->needRestart = $map['NeedRestart'];
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
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
        if (isset($map['ServerStatus'])) {
            $model->serverStatus = $map['ServerStatus'];
        }
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WorkloadName'])) {
            $model->workloadName = $map['WorkloadName'];
        }
        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }

        return $model;
    }
}
