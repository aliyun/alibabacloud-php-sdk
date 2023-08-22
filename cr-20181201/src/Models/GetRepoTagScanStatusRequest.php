<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoTagScanStatusRequest extends Model
{
    /**
     * @example 67bfbcc12b67936ec7f867927817cbb071832b873dbcaed312a1930ba5f1d529
     *
     * @var string
     */
    public $digest;

    /**
     * @example cri-2j88dtld8yel****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example crr-uf082u9dg8do****
     *
     * @var string
     */
    public $repoId;

    /**
     * @example 838152F9-F725-5A52-A344-8972D65AC045
     *
     * @var string
     */
    public $scanTaskId;

    /**
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
     * @return GetRepoTagScanStatusRequest
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
