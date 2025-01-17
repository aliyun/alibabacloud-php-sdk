<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class containerInstanceList extends Model
{
    /**
     * @var int
     */
    public $alarmCount;
    /**
     * @var string
     */
    public $alarmStatus;
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
    public $containerId;
    /**
     * @var int
     */
    public $createTimestamp;
    /**
     * @var int
     */
    public $exposed;
    /**
     * @var string
     */
    public $exposedDetail;
    /**
     * @var int
     */
    public $hcCount;
    /**
     * @var string
     */
    public $hcStatus;
    /**
     * @var string
     */
    public $hostIp;
    /**
     * @var string
     */
    public $image;
    /**
     * @var string
     */
    public $imageDigest;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $imageRepoName;
    /**
     * @var string
     */
    public $imageRepoNamespace;
    /**
     * @var string
     */
    public $imageRepoTag;
    /**
     * @var string
     */
    public $imageUuid;
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
    public $nodeInfo;
    /**
     * @var string
     */
    public $nodeName;
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
     * @var string
     */
    public $riskCount;
    /**
     * @var string
     */
    public $riskStatus;
    /**
     * @var string
     */
    public $updateMark;
    /**
     * @var int
     */
    public $vulCount;
    /**
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
        'exposed'            => 'Exposed',
        'exposedDetail'      => 'ExposedDetail',
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->exposed) {
            $res['Exposed'] = $this->exposed;
        }

        if (null !== $this->exposedDetail) {
            $res['ExposedDetail'] = $this->exposedDetail;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Exposed'])) {
            $model->exposed = $map['Exposed'];
        }

        if (isset($map['ExposedDetail'])) {
            $model->exposedDetail = $map['ExposedDetail'];
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
