<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageSecurityScanCountRequest extends Model
{
    /**
     * @description Cluster ID for image security scanning.
     *
     * @example cdbbe7aa56cbf4b8f830f83718d26****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Whether it has been processed. Values:
     * - **Y**: Processed
     * - **N**: Not processed
     * - **A**: All
     *
     * @example N
     *
     * @var string
     */
    public $dealed;

    /**
     * @description SHA256 value of the image digest.
     *
     * @example a7978d51f5eddf7612ab15ae46bd4b4257bf59da77c2aafc9d9d8ab41bb3****
     *
     * @var string
     */
    public $imageDigest;

    /**
     * @description Image tag.
     *
     * @example c958b80f-prd_default-9bb0****
     *
     * @var string
     */
    public $imageTag;

    /**
     * @description Image UUID.
     *
     * @example 325bfa067ae6c678e59e8a1b34cc****
     *
     * @var string
     */
    public $imageUuid;

    /**
     * @description Container image repository ID.
     *
     * @example 3df5b5a1f2339eb7ebc7d474b8d4****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description Specifies the container image instance ID.
     *
     * > Call the [DescribeImageInstances](~~DescribeImageInstances~~) API to obtain this parameter.
     *
     * @example cri-p2jahwuuwuk7****
     *
     * @var string
     */
    public $repoInstanceId;

    /**
     * @description The region ID of the container image repository.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $repoRegionId;

    /**
     * @description Scanning scope.
     *
     * @var string[]
     */
    public $scanRange;

    /**
     * @description Instance IDs for image security scanning.
     *
     * @var string[]
     */
    public $uuids;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dealed' => 'Dealed',
        'imageDigest' => 'ImageDigest',
        'imageTag' => 'ImageTag',
        'imageUuid' => 'ImageUuid',
        'repoId' => 'RepoId',
        'repoInstanceId' => 'RepoInstanceId',
        'repoRegionId' => 'RepoRegionId',
        'scanRange' => 'ScanRange',
        'uuids' => 'Uuids',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->imageDigest) {
            $res['ImageDigest'] = $this->imageDigest;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->repoInstanceId) {
            $res['RepoInstanceId'] = $this->repoInstanceId;
        }
        if (null !== $this->repoRegionId) {
            $res['RepoRegionId'] = $this->repoRegionId;
        }
        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageSecurityScanCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['ImageDigest'])) {
            $model->imageDigest = $map['ImageDigest'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepoInstanceId'])) {
            $model->repoInstanceId = $map['RepoInstanceId'];
        }
        if (isset($map['RepoRegionId'])) {
            $model->repoRegionId = $map['RepoRegionId'];
        }
        if (isset($map['ScanRange'])) {
            if (!empty($map['ScanRange'])) {
                $model->scanRange = $map['ScanRange'];
            }
        }
        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = $map['Uuids'];
            }
        }

        return $model;
    }
}
