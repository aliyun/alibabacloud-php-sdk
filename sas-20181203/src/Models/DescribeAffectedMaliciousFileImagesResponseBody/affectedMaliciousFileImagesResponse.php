<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesResponseBody;

use AlibabaCloud\Tea\Model;

class affectedMaliciousFileImagesResponse extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var int
     */
    public $latestVerifyTimestamp;

    /**
     * @var string
     */
    public $repoInstanceId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $repoRegionId;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $imageUuid;

    /**
     * @var string
     */
    public $maliciousMd5;

    /**
     * @var int
     */
    public $firstScanTimestamp;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $layer;

    /**
     * @var int
     */
    public $latestScanTimestamp;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'status'                => 'Status',
        'digest'                => 'Digest',
        'latestVerifyTimestamp' => 'LatestVerifyTimestamp',
        'repoInstanceId'        => 'RepoInstanceId',
        'namespace'             => 'Namespace',
        'repoRegionId'          => 'RepoRegionId',
        'tag'                   => 'Tag',
        'imageUuid'             => 'ImageUuid',
        'maliciousMd5'          => 'MaliciousMd5',
        'firstScanTimestamp'    => 'FirstScanTimestamp',
        'filePath'              => 'FilePath',
        'repoId'                => 'RepoId',
        'layer'                 => 'Layer',
        'latestScanTimestamp'   => 'LatestScanTimestamp',
        'repoName'              => 'RepoName',
        'level'                 => 'Level',
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
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->latestVerifyTimestamp) {
            $res['LatestVerifyTimestamp'] = $this->latestVerifyTimestamp;
        }
        if (null !== $this->repoInstanceId) {
            $res['RepoInstanceId'] = $this->repoInstanceId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->repoRegionId) {
            $res['RepoRegionId'] = $this->repoRegionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
        }
        if (null !== $this->maliciousMd5) {
            $res['MaliciousMd5'] = $this->maliciousMd5;
        }
        if (null !== $this->firstScanTimestamp) {
            $res['FirstScanTimestamp'] = $this->firstScanTimestamp;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->latestScanTimestamp) {
            $res['LatestScanTimestamp'] = $this->latestScanTimestamp;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['LatestVerifyTimestamp'])) {
            $model->latestVerifyTimestamp = $map['LatestVerifyTimestamp'];
        }
        if (isset($map['RepoInstanceId'])) {
            $model->repoInstanceId = $map['RepoInstanceId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RepoRegionId'])) {
            $model->repoRegionId = $map['RepoRegionId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
        }
        if (isset($map['MaliciousMd5'])) {
            $model->maliciousMd5 = $map['MaliciousMd5'];
        }
        if (isset($map['FirstScanTimestamp'])) {
            $model->firstScanTimestamp = $map['FirstScanTimestamp'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['LatestScanTimestamp'])) {
            $model->latestScanTimestamp = $map['LatestScanTimestamp'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
