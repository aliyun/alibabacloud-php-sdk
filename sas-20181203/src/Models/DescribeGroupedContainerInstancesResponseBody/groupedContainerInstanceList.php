<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedContainerInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class groupedContainerInstanceList extends Model
{
    /**
     * @var int
     */
    public $alarmCount;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $custerState;

    /**
     * @var string
     */
    public $hostIp;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $pod;

    /**
     * @var string
     */
    public $podIp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $riskInstanceCount;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskStatus;

    /**
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'alarmCount'        => 'AlarmCount',
        'appName'           => 'AppName',
        'clusterId'         => 'ClusterId',
        'clusterName'       => 'ClusterName',
        'clusterType'       => 'ClusterType',
        'createTime'        => 'CreateTime',
        'custerState'       => 'CusterState',
        'hostIp'            => 'HostIp',
        'instanceCount'     => 'InstanceCount',
        'instanceId'        => 'InstanceId',
        'namespace'         => 'Namespace',
        'pod'               => 'Pod',
        'podIp'             => 'PodIp',
        'regionId'          => 'RegionId',
        'riskInstanceCount' => 'RiskInstanceCount',
        'riskLevel'         => 'RiskLevel',
        'riskStatus'        => 'RiskStatus',
        'vulCount'          => 'VulCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmCount) {
            $res['AlarmCount'] = $this->alarmCount;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->custerState) {
            $res['CusterState'] = $this->custerState;
        }
        if (null !== $this->hostIp) {
            $res['HostIp'] = $this->hostIp;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pod) {
            $res['Pod'] = $this->pod;
        }
        if (null !== $this->podIp) {
            $res['PodIp'] = $this->podIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->riskInstanceCount) {
            $res['RiskInstanceCount'] = $this->riskInstanceCount;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->riskStatus) {
            $res['RiskStatus'] = $this->riskStatus;
        }
        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupedContainerInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmCount'])) {
            $model->alarmCount = $map['AlarmCount'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CusterState'])) {
            $model->custerState = $map['CusterState'];
        }
        if (isset($map['HostIp'])) {
            $model->hostIp = $map['HostIp'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Pod'])) {
            $model->pod = $map['Pod'];
        }
        if (isset($map['PodIp'])) {
            $model->podIp = $map['PodIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RiskInstanceCount'])) {
            $model->riskInstanceCount = $map['RiskInstanceCount'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['RiskStatus'])) {
            $model->riskStatus = $map['RiskStatus'];
        }
        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        return $model;
    }
}
