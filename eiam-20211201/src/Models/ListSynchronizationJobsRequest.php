<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsRequest\filters;
use AlibabaCloud\Tea\Model;

class ListSynchronizationJobsRequest extends Model
{
    /**
     * @description 同步方向[ingress,egress]
     *
     * @example ingress
     *
     * @var string
     */
    public $direction;

    /**
     * @description 同步结束时间
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $endTime;

    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @description IDaaS EIAM实例的ID。
     *
     * This parameter is required.
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 分页查询时每页行数。默认值为20，最大值为100。
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 查询凭证（Token），取值为上一次API调用返回的NextToken参数值。
     *
     * @example NTxxxxxexample
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 当前查询的列表页码，默认为1。
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 当前查询的列表页码，默认为20。
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 同步开始时间
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 同步状态[pending,running,suspending,failed,partial_success,success]
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description 同步目标ID
     *
     * @example target_001
     *
     * @var string[]
     */
    public $targetIds;

    /**
     * @description 同步目标类型[identity_provider,organizational_unit,application,user]
     *
     * @example identity_provider
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'direction'  => 'Direction',
        'endTime'    => 'EndTime',
        'filters'    => 'Filters',
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
        'targetIds'  => 'TargetIds',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetIds) {
            $res['TargetIds'] = $this->targetIds;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSynchronizationJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetIds'])) {
            if (!empty($map['TargetIds'])) {
                $model->targetIds = $map['TargetIds'];
            }
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
