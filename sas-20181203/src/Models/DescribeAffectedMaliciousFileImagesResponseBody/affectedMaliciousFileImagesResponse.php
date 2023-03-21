<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesResponseBody;

use AlibabaCloud\Tea\Model;

class affectedMaliciousFileImagesResponse extends Model
{
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
     * @var string
     */
    public $digest;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $firstScanTimestamp;

    /**
     * @var string
     */
    public $highLight;

    /**
     * @var string
     */
    public $image;

    /**
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
     * @var int
     */
    public $latestScanTimestamp;

    /**
     * @var int
     */
    public $latestVerifyTimestamp;

    /**
     * @var string
     */
    public $layer;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $maliciousMd5;

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
    public $repoId;

    /**
     * @var string
     */
    public $repoInstanceId;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $repoRegionId;

    /**
     * @var int
     */
    public $status;

    /**
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
