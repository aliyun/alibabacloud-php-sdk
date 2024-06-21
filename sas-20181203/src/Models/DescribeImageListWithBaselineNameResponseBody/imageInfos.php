<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListWithBaselineNameResponseBody;

use AlibabaCloud\Tea\Model;

class imageInfos extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example c08d5fc1a329a4b88950a253d082f1****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example docker-law
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The ID of the container.
     *
     * @example 04d20e98c8e2c93b7b864372084320a15a58c8671e53c972ce3a71d9c163****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The SHA-256 value of the image digest.
     *
     * @example 2e6daffce524ffeae66cccaa90c8fc47de912346dcec295c27395b6d66db6423
     *
     * @var string
     */
    public $digest;

    /**
     * @description The timestamp generated when the first scan was performed. Unit: milliseconds.
     *
     * @example 1649814050000
     *
     * @var int
     */
    public $firstScanTime;

    /**
     * @description The number of images on which **high** baseline risks are detected.
     *
     * @example 1
     *
     * @var int
     */
    public $highRiskImage;

    /**
     * @description The name of the image.
     *
     * @example registry.cn-wulanchabu.aliyuncs.com/sas_test/huxin-test-001:nuxeo6-conta****
     *
     * @var string
     */
    public $image;

    /**
     * @description The timestamp when the image was created. Unit: milliseconds.
     *
     * @example 1636962328000
     *
     * @var int
     */
    public $imageCreate;

    /**
     * @description The ID of the image.
     *
     * @example cddb5fd33b34a1fabb358d0a19497cdfe362fe624821cb250947af0ea5cc****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The size of the image.
     *
     * @example 157408623
     *
     * @var int
     */
    public $imageSize;

    /**
     * @description The timestamp when the image was updated. Unit: milliseconds.
     *
     * @example 1636974116000
     *
     * @var int
     */
    public $imageUpdate;

    /**
     * @description The ID of the image instance.
     *
     * @example cri-a595qp31knh9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name of the server.
     *
     * @example pre.mongo-196
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 47.96.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The timestamp when the last baseline check was performed. Unit: milliseconds.
     *
     * @example 1649814050000
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @description The number of images on which **low** baseline risks are detected.
     *
     * @example 0
     *
     * @var int
     */
    public $lowRiskImage;

    /**
     * @description The number of images on which **medium** baseline risks are detected.
     *
     * @example 0
     *
     * @var int
     */
    public $middleRiskImage;

    /**
     * @description The namespace.
     *
     * @example test-002
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The number of images that do not have baseline risks.
     *
     * @example 0
     *
     * @var int
     */
    public $noRiskImage;

    /**
     * @description The pod.
     *
     * @example 22222-7xsqq
     *
     * @var string
     */
    public $pod;

    /**
     * @description The region ID of the image instance.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-1lt6q7167yh6****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the image repository.
     *
     * @example scanner
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * @example libssh2
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The type of the image repository.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $repoType;

    /**
     * @description Indicates whether the image is at risk. Valid values:
     *
     *   **YES**
     *   **NO**
     *
     * @example YES
     *
     * @var string
     */
    public $riskStatus;

    /**
     * @description The version of the image.
     *
     * @example v1
     *
     * @var string
     */
    public $tag;

    /**
     * @description The ID of the asset on which the baseline check is performed.
     *
     * @example m-bp17m0pc0xprzbwo****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The name of the asset on which the baseline check is performed.
     *
     * @example spod
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The type of the asset on which the baseline check is performed. Valid values:
     *
     *   ECS_IMAGE
     *   ECS_SNAPSHOT
     *
     * @example ECS_IMAGE
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The total number of risk items that are detected on the image by using the baseline.
     *
     * @example 3
     *
     * @var int
     */
    public $totalItemCount;

    /**
     * @description The UUID of the image.
     *
     * @example f58681174f944623345379e23b7b****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'clusterName'     => 'ClusterName',
        'containerId'     => 'ContainerId',
        'digest'          => 'Digest',
        'firstScanTime'   => 'FirstScanTime',
        'highRiskImage'   => 'HighRiskImage',
        'image'           => 'Image',
        'imageCreate'     => 'ImageCreate',
        'imageId'         => 'ImageId',
        'imageSize'       => 'ImageSize',
        'imageUpdate'     => 'ImageUpdate',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'internetIp'      => 'InternetIp',
        'intranetIp'      => 'IntranetIp',
        'lastScanTime'    => 'LastScanTime',
        'lowRiskImage'    => 'LowRiskImage',
        'middleRiskImage' => 'MiddleRiskImage',
        'namespace'       => 'Namespace',
        'noRiskImage'     => 'NoRiskImage',
        'pod'             => 'Pod',
        'regionId'        => 'RegionId',
        'repoId'          => 'RepoId',
        'repoName'        => 'RepoName',
        'repoNamespace'   => 'RepoNamespace',
        'repoType'        => 'RepoType',
        'riskStatus'      => 'RiskStatus',
        'tag'             => 'Tag',
        'targetId'        => 'TargetId',
        'targetName'      => 'TargetName',
        'targetType'      => 'TargetType',
        'totalItemCount'  => 'TotalItemCount',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
        }
        if (null !== $this->highRiskImage) {
            $res['HighRiskImage'] = $this->highRiskImage;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageCreate) {
            $res['ImageCreate'] = $this->imageCreate;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->imageUpdate) {
            $res['ImageUpdate'] = $this->imageUpdate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->lowRiskImage) {
            $res['LowRiskImage'] = $this->lowRiskImage;
        }
        if (null !== $this->middleRiskImage) {
            $res['MiddleRiskImage'] = $this->middleRiskImage;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->noRiskImage) {
            $res['NoRiskImage'] = $this->noRiskImage;
        }
        if (null !== $this->pod) {
            $res['Pod'] = $this->pod;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }
        if (null !== $this->riskStatus) {
            $res['RiskStatus'] = $this->riskStatus;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->totalItemCount) {
            $res['TotalItemCount'] = $this->totalItemCount;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
        }
        if (isset($map['HighRiskImage'])) {
            $model->highRiskImage = $map['HighRiskImage'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageCreate'])) {
            $model->imageCreate = $map['ImageCreate'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['ImageUpdate'])) {
            $model->imageUpdate = $map['ImageUpdate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['LowRiskImage'])) {
            $model->lowRiskImage = $map['LowRiskImage'];
        }
        if (isset($map['MiddleRiskImage'])) {
            $model->middleRiskImage = $map['MiddleRiskImage'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NoRiskImage'])) {
            $model->noRiskImage = $map['NoRiskImage'];
        }
        if (isset($map['Pod'])) {
            $model->pod = $map['Pod'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }
        if (isset($map['RiskStatus'])) {
            $model->riskStatus = $map['RiskStatus'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TotalItemCount'])) {
            $model->totalItemCount = $map['TotalItemCount'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
