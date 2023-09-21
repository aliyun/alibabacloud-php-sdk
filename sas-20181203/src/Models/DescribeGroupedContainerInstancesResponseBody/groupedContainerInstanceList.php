<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedContainerInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class groupedContainerInstanceList extends Model
{
    /**
     * @description The number of alerts that are detected from the current pod, application, namespace, or cluster.
     *
     * @example 1
     *
     * @var int
     */
    public $alarmCount;

    /**
     * @description The application name.
     *
     * @example oss-liveness-probe
     *
     * @var string
     */
    public $appName;

    /**
     * @description The cluster ID.
     *
     * @example cf3824769c85441b4bf3****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   **Kubernetes**: dedicated Kubernetes cluster.
     *   **ManagedKubernetes**: standard managed cluster (edge cluster).
     *   **Ask**: standard serverless cluster.
     *
     * @example ManagedKubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The timestamp generated when the cluster was created. Unit: milliseconds.
     *
     * @example 1600076893000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   **running**: The cluster is running.
     *   **stopped**: The cluster is stopped.
     *   **deleted**: The cluster is deleted.
     *   **delete_failed**: The cluster fails to be deleted.
     *   **failed**: The cluster fails to be created.
     *
     * @example running
     *
     * @var string
     */
    public $custerState;

    /**
     * @description The number of baseline risks that are detected on the current pod, application, namespace, or cluster.
     *
     * @example 20
     *
     * @var int
     */
    public $hcCount;

    /**
     * @description The IP address of the host in the container cluster.
     *
     * @example 172.114.XX.XX
     *
     * @var string
     */
    public $hostIp;

    /**
     * @description The image of the container.
     *
     * @example registry-vpc.ap-southeast-5.aliyuncs.com/log-service-release/sls-connector:1.1.77
     *
     * @var string
     */
    public $image;

    /**
     * @description The digest value of the image.
     *
     * @example 58e58c013f70bbfde140c8a55c1078074b3483479428d4069aa946827fd566cf
     *
     * @var string
     */
    public $imageDigest;

    /**
     * @description The name of the image repository.
     *
     * @example test-003
     *
     * @var string
     */
    public $imageRepoName;

    /**
     * @description The namespace of the image repository.
     *
     * @example name001
     *
     * @var string
     */
    public $imageRepoNamespace;

    /**
     * @description The tag that is added to the image repository.
     *
     * @example dev-20220512-2
     *
     * @var string
     */
    public $imageRepoTag;

    /**
     * @description The UUID of the image.
     *
     * @example e4bdec1d9ba7e0967111a7ea467c****
     *
     * @var string
     */
    public $imageUuid;

    /**
     * @description The number of pods, applications, clusters, or namespaces that is returned.
     *
     * @example 9
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The ID of the server instance.
     *
     * @example i-8vb9ul5xec4tua4q****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The namespace of the cluster.
     *
     * @example kube-system
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the pod.
     *
     * @example csi-plugin-2n****
     *
     * @var string
     */
    public $pod;

    /**
     * @description The IP address of the pod.
     *
     * @example 172.114.XX.XX
     *
     * @var string
     */
    public $podIp;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of potential risky instances.
     *
     * @example 1
     *
     * @var int
     */
    public $riskInstanceCount;

    /**
     * @description The risk level. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example low
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description Indicates whether risks were detected. Valid values:
     *
     *   **NO**: No risks were detected.
     *   **YES**: Risks were detected.
     *
     * @example NO
     *
     * @var string
     */
    public $riskStatus;

    /**
     * @description The number of vulnerabilities that are detected from the current pod, application, namespace, or cluster.
     *
     * @example 1
     *
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'alarmCount'         => 'AlarmCount',
        'appName'            => 'AppName',
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'clusterType'        => 'ClusterType',
        'createTime'         => 'CreateTime',
        'custerState'        => 'CusterState',
        'hcCount'            => 'HcCount',
        'hostIp'             => 'HostIp',
        'image'              => 'Image',
        'imageDigest'        => 'ImageDigest',
        'imageRepoName'      => 'ImageRepoName',
        'imageRepoNamespace' => 'ImageRepoNamespace',
        'imageRepoTag'       => 'ImageRepoTag',
        'imageUuid'          => 'ImageUuid',
        'instanceCount'      => 'InstanceCount',
        'instanceId'         => 'InstanceId',
        'namespace'          => 'Namespace',
        'pod'                => 'Pod',
        'podIp'              => 'PodIp',
        'regionId'           => 'RegionId',
        'riskInstanceCount'  => 'RiskInstanceCount',
        'riskLevel'          => 'RiskLevel',
        'riskStatus'         => 'RiskStatus',
        'vulCount'           => 'VulCount',
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
        if (null !== $this->hcCount) {
            $res['HcCount'] = $this->hcCount;
        }
        if (null !== $this->hostIp) {
            $res['HostIp'] = $this->hostIp;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageDigest) {
            $res['ImageDigest'] = $this->imageDigest;
        }
        if (null !== $this->imageRepoName) {
            $res['ImageRepoName'] = $this->imageRepoName;
        }
        if (null !== $this->imageRepoNamespace) {
            $res['ImageRepoNamespace'] = $this->imageRepoNamespace;
        }
        if (null !== $this->imageRepoTag) {
            $res['ImageRepoTag'] = $this->imageRepoTag;
        }
        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
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
        if (isset($map['HcCount'])) {
            $model->hcCount = $map['HcCount'];
        }
        if (isset($map['HostIp'])) {
            $model->hostIp = $map['HostIp'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageDigest'])) {
            $model->imageDigest = $map['ImageDigest'];
        }
        if (isset($map['ImageRepoName'])) {
            $model->imageRepoName = $map['ImageRepoName'];
        }
        if (isset($map['ImageRepoNamespace'])) {
            $model->imageRepoNamespace = $map['ImageRepoNamespace'];
        }
        if (isset($map['ImageRepoTag'])) {
            $model->imageRepoTag = $map['ImageRepoTag'];
        }
        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
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
