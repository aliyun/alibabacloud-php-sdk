<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\SDK\DAS\V20200116\Models\CreateSqlLogTaskRequest\filters;
use AlibabaCloud\Tea\Model;

class CreateSqlLogTaskRequest extends Model
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
     * @example pc-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the task.
     *
     * @example test01
     *
     * @var string
     */
    public $name;

    /**
     * @description The node ID.
     *
     * >  This parameter is available only for instances that run in a cluster architecture. You can specify this parameter to query the offline tasks of a specific node. By default, if this parameter is not specified, the information about the offline tasks of the primary node is returned.
     * @example pi-uf6k5f6g3912i0dqz
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The role of the node of the PolarDB-X 2.0 database instance. Valid values:
     *
     *   **polarx_cn**: compute node
     *   **polarx_dn**: data node
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

    /**
     * @description The type of the task. Valid values:
     *
     *   **Export**
     *   **Query**
     *   **Insight**
     *
     * @example Export
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endTime'    => 'EndTime',
        'filters'    => 'Filters',
        'instanceId' => 'InstanceId',
        'name'       => 'Name',
        'nodeId'     => 'NodeId',
        'role'       => 'Role',
        'startTime'  => 'StartTime',
        'type'       => 'Type',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSqlLogTaskRequest
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
