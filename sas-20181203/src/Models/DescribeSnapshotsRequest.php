<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnapshotsRequest extends Model
{
    /**
     * @description The version of the anti-ransomware policy. Valid values:
     *
     *   **1.0.0**
     *   **2.0.0**
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether the server is an Elastic Compute Service (ECS) instance. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var string
     */
    public $isAliYunEcs;

    /**
     * @description The region in which the server resides.
     *
     * @example us-east-1
     *
     * @var string
     */
    public $machineRegion;

    /**
     * @description The name or IP address of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $machineRemark;

    /**
     * @description The starting position of the query. If this parameter is left empty, the query starts from the beginning.
     *
     * >  If you call the operation for the first time, you do not need to specify the parameter. The response to the first call contains the token that can be used for the second call. Each subsequent response contains the token that can be used for the next call.
     * @example CAESGgoSChAKDGNvbXBsZXRlVGltZRABCgQiAggAGAAiQAoJAB4SwmEAAAAACjMDLgAAADFTNzMyZDMwMzAzMDM0NzY3YTZjNjI3NjZmNmU3MjcxNjk3NDY5MzY3MjY4****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of backup snapshots from which data can be restored. Valid values:
     *
     *   **COMPLETE**: complete
     *   **PARTIAL_COMPLETE**: partial complete
     *
     * @example ["COMPLETE"]
     *
     * @var string
     */
    public $statusList;

    /**
     * @description The UUID of the server.
     *
     * >  You can call the [DescribeBackupPolicy](~~DescribeBackupPolicy~~) operation to query the UUIDs of servers.
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
