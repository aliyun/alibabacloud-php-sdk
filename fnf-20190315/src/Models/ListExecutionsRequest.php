<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ListExecutionsRequest extends Model
{
    /**
     * @description The name prefix of the execution.
     *
     * @example run
     *
     * @var string
     */
    public $executionNamePrefix;

    /**
     * @description The name of the flow. The name must be unique within the region and cannot be modified after the flow is created. The name must meet the following conventions:
     *
     *   The name can contain letters, digits, underscores (\_), and hyphens (-).
     *   The name must start with a letter or an underscore (\_).
     *   The name is case-sensitive.
     *   The name must be 1 to 128 characters in length.
     *
     * @example flow
     *
     * @var string
     */
    public $flowName;

    /**
     * @description The maximum number of executions to be queried. Valid values: 1 to 100.
     *
     * @example 1
     *
     * @var int
     */
    public $limit;

    /**
     * @description The name of the execution to start the query. You can obtain the value from the response data. You do not need to specify this parameter for the first request.
     *
     * @example flow_xxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The beginning of the time range to query executions. Specify the value in the UTC RFC3339 format.
     *
     * @example 2020-12-02T02:39:20.402Z
     *
     * @var string
     */
    public $startedTimeBegin;

    /**
     * @description The end of the time range to query executions. Specify the value in the UTC RFC3339 format.
     *
     * @example 2020-12-02T02:23:54.817Z
     *
     * @var string
     */
    public $startedTimeEnd;

    /**
     * @description The status of the execution that you want to filter. Valid values:
     *
     *   **Starting**
     *   **Running**
     *   **Stopped**
     *   **Succeeded**
     *   **Failed**
     *   **TimedOut**
     *
     * @example Succeeded
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'executionNamePrefix' => 'ExecutionNamePrefix',
        'flowName'            => 'FlowName',
        'limit'               => 'Limit',
        'nextToken'           => 'NextToken',
        'startedTimeBegin'    => 'StartedTimeBegin',
        'startedTimeEnd'      => 'StartedTimeEnd',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionNamePrefix) {
            $res['ExecutionNamePrefix'] = $this->executionNamePrefix;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->startedTimeBegin) {
            $res['StartedTimeBegin'] = $this->startedTimeBegin;
        }
        if (null !== $this->startedTimeEnd) {
            $res['StartedTimeEnd'] = $this->startedTimeEnd;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExecutionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionNamePrefix'])) {
            $model->executionNamePrefix = $map['ExecutionNamePrefix'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['StartedTimeBegin'])) {
            $model->startedTimeBegin = $map['StartedTimeBegin'];
        }
        if (isset($map['StartedTimeEnd'])) {
            $model->startedTimeEnd = $map['StartedTimeEnd'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
