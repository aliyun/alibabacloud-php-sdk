<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListScanBaselineByTaskRequest extends Model
{
    /**
     * @example sha256:1c89806cfaf66d2990e2cf1131ebd56ff24b133745a33abf1228*************
     *
     * @var string
     */
    public $digest;

    /**
     * @example cri-***********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example High
     *
     * @var string
     */
    public $level;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example crr-**************
     *
     * @var string
     */
    public $repoId;

    /**
     * @example 3e526d7e-4b45-4703-b046-***********
     *
     * @var string
     */
    public $scanTaskId;

    /**
     * @example 1.1.36
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'digest'     => 'Digest',
        'instanceId' => 'InstanceId',
        'level'      => 'Level',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return ListScanBaselineByTaskRequest
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
