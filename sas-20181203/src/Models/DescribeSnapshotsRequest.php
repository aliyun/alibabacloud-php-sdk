<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnapshotsRequest extends Model
{
    /**
     * @example 2.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example true
     *
     * @var string
     */
    public $isAliYunEcs;

    /**
     * @example us-east-1
     *
     * @var string
     */
    public $machineRegion;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $machineRemark;

    /**
     * @example CAESGgoSChAKDGNvbXBsZXRlVGltZRABCgQiAggAGAAiQAoJAB4SwmEAAAAACjMDLgAAADFTNzMyZDMwMzAzMDM0NzY3YTZjNjI3NjZmNmU3MjcxNjk3NDY5MzY3MjY4****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ["COMPLETE"]
     *
     * @var string
     */
    public $statusList;

    /**
     * @example 061d8042-59ff-416e-bc33-294a1cf5****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'apiVersion'    => 'ApiVersion',
        'currentPage'   => 'CurrentPage',
        'isAliYunEcs'   => 'IsAliYunEcs',
        'machineRegion' => 'MachineRegion',
        'machineRemark' => 'MachineRemark',
        'nextToken'     => 'NextToken',
        'pageSize'      => 'PageSize',
        'statusList'    => 'StatusList',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->isAliYunEcs) {
            $res['IsAliYunEcs'] = $this->isAliYunEcs;
        }
        if (null !== $this->machineRegion) {
            $res['MachineRegion'] = $this->machineRegion;
        }
        if (null !== $this->machineRemark) {
            $res['MachineRemark'] = $this->machineRemark;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IsAliYunEcs'])) {
            $model->isAliYunEcs = $map['IsAliYunEcs'];
        }
        if (isset($map['MachineRegion'])) {
            $model->machineRegion = $map['MachineRegion'];
        }
        if (isset($map['MachineRemark'])) {
            $model->machineRemark = $map['MachineRemark'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
