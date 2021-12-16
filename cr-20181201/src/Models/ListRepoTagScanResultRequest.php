<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListRepoTagScanResultRequest extends Model
{
    /**
     * @var string
     */
    public $digest;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $scanTaskId;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'digest'     => 'Digest',
        'instanceId' => 'InstanceId',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'regionId'   => 'RegionId',
        'repoId'     => 'RepoId',
        'scanTaskId' => 'ScanTaskId',
        'severity'   => 'Severity',
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
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->scanTaskId) {
            $res['ScanTaskId'] = $this->scanTaskId;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepoTagScanResultRequest
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['ScanTaskId'])) {
            $model->scanTaskId = $map['ScanTaskId'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
