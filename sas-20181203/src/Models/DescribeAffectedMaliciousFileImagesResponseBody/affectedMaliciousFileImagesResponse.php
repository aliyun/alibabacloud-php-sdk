<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesResponseBody;

use AlibabaCloud\Tea\Model;

class affectedMaliciousFileImagesResponse extends Model
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
     * @description The image digest.
     *
     * @example 6a5e1031a5858617f7d8a179ead6****
     *
     * @var string
     */
    public $digest;

    /**
     * @description The URL to download the malicious image sample.
     *
     * @example https://aegis-metadata-file.oss-cn-shanghai.aliyuncs.com/
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The path to the image file.
     *
     * @example /d836968041f7683b5605a****
     *
     * @var string
     */
    public $filePath;

    /**
     * @description The timestamp of the first scan.
     *
     * @example 1594907349000
     *
     * @var int
     */
    public $firstScanTimestamp;

    /**
     * @description The text that is highlighted.
     *
     * @example {"ruleVersion":"highlight_20210908","ruleId":600106,"events":[[2,54]]}
     *
     * @var string
     */
    public $highLight;

    /**
     * @description The name of the image.
     *
     * @example registry.cn-wulanchabu.aliyuncs.com/sas_test/huxin-test-001:nuxeo6-conta****
     *
     * @var string
     */
    public $image;

    /**
     * @description The UUID of the image.
     *
     * @example e05c0de798217637868ef4****
     *
     * @var string
     */
    public $imageUuid;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @description The timestamp of the last scan.
     *
     * @example 1596522785000
     *
     * @var int
     */
    public $latestScanTimestamp;

    /**
     * @description The timestamp of the last verification.
     *
     * @example 1596522711000
     *
     * @var int
     */
    public $latestVerifyTimestamp;

    /**
     * @description The image layer.
     *
     * @example 27213ad3447f0209dd152a5cadea****
     *
     * @var string
     */
    public $layer;

    /**
     * @description The severity of the malicious image sample. Valid values:
     *
     *   **serious**
     *   **suspicious**
     *   **remind**
     *
     * @example serious
     *
     * @var string
     */
    public $level;

    /**
     * @description The MD5 hash value of the malicious image sample.
     *
     * @example d836968041f768300d9605a****
     *
     * @var string
     */
    public $maliciousMd5;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * @example hanghai-namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The pod.
     *
     * @example 22222-7xsqq
     *
     * @var string
     */
    public $pod;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-vridcl4****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The ID of the container image.
     *
     * @example cri-datvail3m****
     *
     * @var string
     */
    public $repoInstanceId;

    /**
     * @description The name of the image repository.
     *
     * @example centos
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The region ID of the image repository.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $repoRegionId;

    /**
     * @description The handling status of the malicious image sample. Valid values:
     *
     *   **0**: unhandled
     *   **1**: handled
     *   **2**: verifying
     *   **3**: added to the whitelist
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The tag that is added to the image.
     *
     * @example 0.2
     *
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'clusterName'           => 'ClusterName',
        'containerId'           => 'ContainerId',
        'digest'                => 'Digest',
        'downloadUrl'           => 'DownloadUrl',
        'filePath'              => 'FilePath',
        'firstScanTimestamp'    => 'FirstScanTimestamp',
        'highLight'             => 'HighLight',
        'image'                 => 'Image',
        'imageUuid'             => 'ImageUuid',
        'instanceName'          => 'InstanceName',
        'internetIp'            => 'InternetIp',
        'intranetIp'            => 'IntranetIp',
        'latestScanTimestamp'   => 'LatestScanTimestamp',
        'latestVerifyTimestamp' => 'LatestVerifyTimestamp',
        'layer'                 => 'Layer',
        'level'                 => 'Level',
        'maliciousMd5'          => 'MaliciousMd5',
        'namespace'             => 'Namespace',
        'pod'                   => 'Pod',
        'repoId'                => 'RepoId',
        'repoInstanceId'        => 'RepoInstanceId',
        'repoName'              => 'RepoName',
        'repoRegionId'          => 'RepoRegionId',
        'status'                => 'Status',
        'tag'                   => 'Tag',
        'targetId'              => 'TargetId',
        'targetName'            => 'TargetName',
        'targetType'            => 'TargetType',
        'uuid'                  => 'Uuid',
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
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->firstScanTimestamp) {
            $res['FirstScanTimestamp'] = $this->firstScanTimestamp;
        }
        if (null !== $this->highLight) {
            $res['HighLight'] = $this->highLight;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
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
        if (null !== $this->latestScanTimestamp) {
            $res['LatestScanTimestamp'] = $this->latestScanTimestamp;
        }
        if (null !== $this->latestVerifyTimestamp) {
            $res['LatestVerifyTimestamp'] = $this->latestVerifyTimestamp;
        }
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->maliciousMd5) {
            $res['MaliciousMd5'] = $this->maliciousMd5;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pod) {
            $res['Pod'] = $this->pod;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->repoInstanceId) {
            $res['RepoInstanceId'] = $this->repoInstanceId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoRegionId) {
            $res['RepoRegionId'] = $this->repoRegionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return affectedMaliciousFileImagesResponse
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
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['FirstScanTimestamp'])) {
            $model->firstScanTimestamp = $map['FirstScanTimestamp'];
        }
        if (isset($map['HighLight'])) {
            $model->highLight = $map['HighLight'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
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
        if (isset($map['LatestScanTimestamp'])) {
            $model->latestScanTimestamp = $map['LatestScanTimestamp'];
        }
        if (isset($map['LatestVerifyTimestamp'])) {
            $model->latestVerifyTimestamp = $map['LatestVerifyTimestamp'];
        }
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MaliciousMd5'])) {
            $model->maliciousMd5 = $map['MaliciousMd5'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Pod'])) {
            $model->pod = $map['Pod'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepoInstanceId'])) {
            $model->repoInstanceId = $map['RepoInstanceId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoRegionId'])) {
            $model->repoRegionId = $map['RepoRegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
