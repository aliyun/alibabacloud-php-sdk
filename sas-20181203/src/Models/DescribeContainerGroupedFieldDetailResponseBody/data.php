<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerGroupedFieldDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of alerts.
     *
     * @example 1
     *
     * @var int
     */
    public $alarmCount;

    /**
     * @description The name of the application.
     *
     * @example node-local-dns
     *
     * @var string
     */
    public $appName;

    /**
     * @description The version of the current online server in the cluster.
     *
     * @example 1.14.8-aliyun.1
     *
     * @var string
     */
    public $clusterCurrentVersion;

    /**
     * @description The ID of the cluster.
     *
     * @example c8ca91e0907d94efaba7fb0827eb9****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example zhhtest
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   STARTING: The cluster is being started.
     *   START_FAILED: The cluster fails to be started.
     *   BOOTSTRAPPING: The bootstrap action is being performed for the cluster.
     *   RUNNING: The cluster is running.
     *   TERMINATING: The cluster is being terminated.
     *   TERMINATED: The cluster is terminated.
     *   TERMINATED_WITH_ERRORS: The cluster is terminated due to an exception.
     *   TERMINATE_FAILED: The cluster fails to be terminated.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $clusterState;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   **Kubernetes**: dedicated Kubernetes cluster.
     *   **ManagedKubernetes**: standard managed cluster (edge cluster).
     *   **Ask**: serverless Kubernetes (ASK) cluster.
     *
     * @example ManagedKubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The number of containers.
     *
     * @example 1
     *
     * @var int
     */
    public $containerCount;

    /**
     * @description The creation time.
     *
     * @example 1702433618301
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the node.
     *
     * @example shangliang-test
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The name of the pod.
     *
     * @example node-local-dns-zwsxl
     *
     * @var string
     */
    public $pod;

    /**
     * @description The number of pods.
     *
     * @example 1
     *
     * @var int
     */
    public $podCount;

    /**
     * @description The IP address of the pod.
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $podIp;

    /**
     * @description The ID of the region.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of vulnerabilities.
     *
     * @example 1
     *
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'alarmCount' => 'AlarmCount',
        'appName' => 'AppName',
        'clusterCurrentVersion' => 'ClusterCurrentVersion',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'clusterState' => 'ClusterState',
        'clusterType' => 'ClusterType',
        'containerCount' => 'ContainerCount',
        'createTime' => 'CreateTime',
        'instanceCount' => 'InstanceCount',
        'namespace' => 'Namespace',
        'nodeName' => 'NodeName',
        'pod' => 'Pod',
        'podCount' => 'PodCount',
        'podIp' => 'PodIp',
        'regionId' => 'RegionId',
        'vulCount' => 'VulCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmCount) {
            $res['AlarmCount'] = $this->alarmCount;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterCurrentVersion) {
            $res['ClusterCurrentVersion'] = $this->clusterCurrentVersion;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterState) {
            $res['ClusterState'] = $this->clusterState;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->containerCount) {
            $res['ContainerCount'] = $this->containerCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->pod) {
            $res['Pod'] = $this->pod;
        }
        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
        }
        if (null !== $this->podIp) {
            $res['PodIp'] = $this->podIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['ClusterCurrentVersion'])) {
            $model->clusterCurrentVersion = $map['ClusterCurrentVersion'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterState'])) {
            $model->clusterState = $map['ClusterState'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ContainerCount'])) {
            $model->containerCount = $map['ContainerCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Pod'])) {
            $model->pod = $map['Pod'];
        }
        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
        }
        if (isset($map['PodIp'])) {
            $model->podIp = $map['PodIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        return $model;
    }
}
