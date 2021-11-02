<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnapshotsRequest extends Model
{
    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $isAliYunEcs;

    /**
     * @var string
     */
    public $machineRegion;

    /**
     * @var string
     */
    public $machineRemark;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $statusList;

    /**
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
