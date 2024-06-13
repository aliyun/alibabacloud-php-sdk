<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsRequest\filters;
use AlibabaCloud\Tea\Model;

class DescribeSqlLogRecordsRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the UNIX timestamp format. Unit: milliseconds.
     *
     * @example 1608888296000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The filter conditions.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The ID of the database instance.
     *
     * This parameter is required.
     * @example pc-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The node ID.
     *
     *   For ApsaraDB RDS for MySQL and PolarDB for MySQL, this parameter is available only for Cluster Edition instances. By default, if this parameter is not specified, the information about the logs of the primary node is returned.
     *   Set this parameter to **polarx_cn** or **polarx_dn** if the node that you want to query belongs to a PolarDB-X 2.0 database instance. A value of polarx_cn indicates a compute node. A value of polarx_dn indicates a data node.
     *
     * @example pi-uf6k5f6g3912i****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The role of the node of the PolarDB-X 2.0 database instance. Valid values:
     *
     *   \\*\\*polarx_cn\\*\\*: compute node
     *   \\*\\*polarx_dn\\*\\*: data node
     *
     * @example polarx_cn
     *
     * @var string
     */
    public $role;

    /**
     * @description The beginning of the time range to query. Specify the time in the UNIX timestamp format. Unit: milliseconds.
     *
     * @example 1596177993000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'    => 'EndTime',
        'filters'    => 'Filters',
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'role'       => 'Role',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSqlLogRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
