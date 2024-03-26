<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class GetExecutionHistoryRequest extends Model
{
    /**
     * @description The name of the execution, which is unique within a flow. The name must meet the following conventions:
     *
     *   The name can contain letters, digits, underscores (\_), and hyphens (-).
     *   The name must start with a letter or an underscore (\_).
     *   The name is case-sensitive.
     *   The name must be 1 to 128 characters in length.
     *
     * @example exec
     *
     * @var string
     */
    public $executionName;

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
     * @description The maximum number of steps to be queried. Valid values: 1 to 1000.
     *
     * @example 1
     *
     * @var int
     */
    public $limit;

    /**
     * @description The name of the event to start the query. You can obtain the value from the response data.
     *
     * @example flow_xxx
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'executionName' => 'ExecutionName',
        'flowName'      => 'FlowName',
        'limit'         => 'Limit',
        'nextToken'     => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionName) {
            $res['ExecutionName'] = $this->executionName;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExecutionHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionName'])) {
            $model->executionName = $map['ExecutionName'];
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

        return $model;
    }
}
