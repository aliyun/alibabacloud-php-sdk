<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class containerInstanceList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $alarmCount;

    /**
     * @example YES
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @example alibaba-log-controller
     *
     * @var string
     */
    public $appName;

    /**
     * @example cfb41a869c71e4678a97021582dd8a****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example 48a6d9a92435a13ad573372c3f3c63b7e04d106458141df9f92155709d****
     *
     * @var string
     */
    public $containerId;

    /**
     * @example 1670368337000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example 1
     *
     * @var int
     */
    public $hcCount;

    /**
     * @example YES
     *
     * @var string
     */
    public $hcStatus;

    /**
     * @example 172.24.XX.XX
     *
     * @var string
     */
    public $hostIp;

    /**
     * @example docker.io/library/nginx:latest
     *
     * @var string
     */
    public $image;

    /**
     * @example 5b046e2de8c490819125193ee2eb71a66f2cc16c032dcd8b69ead4be1024****
     *
     * @var string
     */
    public $imageDigest;

    /**
     * @example registry-vpc.cn-beijing.aliyuncs.com/acs/log-controller@sha256:5b046e2de8c490819125193ee2eb71a66f2cc16c032dcd8b69ead4be1024****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example log-controller
     *
     * @var string
     */
    public $imageRepoName;

    /**
     * @example acs
     *
     * @var string
     */
    public $imageRepoNamespace;

    /**
     * @example 0.3.1.0-dfa2010-aliyun
     *
     * @var string
     */
    public $imageRepoTag;

    /**
     * @example 5f23dfbceec289a49ac94e035e2****
     *
     * @var string
     */
    public $imageUuid;

    /**
     * @example i-2zegzjyotydfkz9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example kube-system
     *
     * @var string
     */
    public $namespace;

    /**
     * @example test
     *
     * @var string
     */
    public $nodeInfo;

    /**
     * @example test
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example alibaba-log-controller-6f847f8786-mk2mg
     *
     * @var string
     */
    public $pod;

    /**
     * @example 172.24.XX.XX
     *
     * @var string
     */
    public $podIp;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1
     *
     * @var string
     */
    public $riskCount;

    /**
     * @example YES
     *
     * @var string
     */
    public $riskStatus;

    /**
     * @example 79cff74d-e967-5407-8a78-ee03b9****
     *
     * @var string
     */
    public $updateMark;

    /**
     * @example 15
     *
     * @var int
     */
    public $vulCount;

    /**
     * @example YES
     *
     * @var string
     */
    public $vulStatus;
    protected $_name = [
        'alarmCount'         => 'AlarmCount',
        'alarmStatus'        => 'AlarmStatus',
        'appName'            => 'AppName',
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'containerId'        => 'ContainerId',
        'createTimestamp'    => 'CreateTimestamp',
        'hcCount'            => 'HcCount',
        'hcStatus'           => 'HcStatus',
        'hostIp'             => 'HostIp',
        'image'              => 'Image',
        'imageDigest'        => 'ImageDigest',
        'imageId'            => 'ImageId',
        'imageRepoName'      => 'ImageRepoName',
        'imageRepoNamespace' => 'ImageRepoNamespace',
        'imageRepoTag'       => 'ImageRepoTag',
        'imageUuid'          => 'ImageUuid',
        'instanceId'         => 'InstanceId',
        'namespace'          => 'Namespace',
        'nodeInfo'           => 'NodeInfo',
        'nodeName'           => 'NodeName',
        'pod'                => 'Pod',
        'podIp'              => 'PodIp',
        'regionId'           => 'RegionId',
        'riskCount'          => 'RiskCount',
        'riskStatus'         => 'RiskStatus',
        'updateMark'         => 'UpdateMark',
        'vulCount'           => 'VulCount',
        'vulStatus'          => 'VulStatus',
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
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
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
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->hcCount) {
            $res['HcCount'] = $this->hcCount;
        }
        if (null !== $this->hcStatus) {
            $res['HcStatus'] = $this->hcStatus;
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
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->nodeInfo) {
            $res['NodeInfo'] = $this->nodeInfo;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
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
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->riskStatus) {
            $res['RiskStatus'] = $this->riskStatus;
        }
        if (null !== $this->updateMark) {
            $res['UpdateMark'] = $this->updateMark;
        }
        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
        }
        if (null !== $this->vulStatus) {
            $res['VulStatus'] = $this->vulStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmCount'])) {
            $model->alarmCount = $map['AlarmCount'];
        }
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
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
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['HcCount'])) {
            $model->hcCount = $map['HcCount'];
        }
        if (isset($map['HcStatus'])) {
            $model->hcStatus = $map['HcStatus'];
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NodeInfo'])) {
            $model->nodeInfo = $map['NodeInfo'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
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
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['RiskStatus'])) {
            $model->riskStatus = $map['RiskStatus'];
        }
        if (isset($map['UpdateMark'])) {
            $model->updateMark = $map['UpdateMark'];
        }
        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }
        if (isset($map['VulStatus'])) {
            $model->vulStatus = $map['VulStatus'];
        }

        return $model;
    }
}
