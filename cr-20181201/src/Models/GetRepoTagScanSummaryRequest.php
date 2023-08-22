<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoTagScanSummaryRequest extends Model
{
    /**
     * @description The number of unknown-severity vulnerabilities.
     *
     * @example sha256:c9f370a4eb1c00d0b0d7212a0a9fa4a7697756c90f0f680afaf9737a25725f4c
     *
     * @var string
     */
    public $digest;

    /**
     * @description The ID of the image repository.
     *
     * @example cri-2j88dtld8yel****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the image tag.
     *
     * @example crr-c2i5yk6h6pu9d5o8
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The digest of the image.
     *
     * @example 47A3E5A3-6AD4-5F02-93B8-59F778AE25D4
     *
     * @var string
     */
    public $scanTaskId;

    /**
     * @description The ID of the security scan task.
     *
     * @example 1
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'digest'     => 'Digest',
        'instanceId' => 'InstanceId',
        'repoId'     => 'RepoId',
        'scanTaskId' => 'ScanTaskId',
        'tag'        => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->scanTaskId) {
            $res['ScanTaskId'] = $this->scanTaskId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoTagScanSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['ScanTaskId'])) {
            $model->scanTaskId = $map['ScanTaskId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
