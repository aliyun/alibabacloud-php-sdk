<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ListExecutionsRequest extends Model
{
    /**
     * @example run
     *
     * @var string
     */
    public $executionNamePrefix;

    /**
     * @example flow
     *
     * @var string
     */
    public $flowName;

    /**
     * @example 1
     *
     * @var int
     */
    public $limit;

    /**
     * @example flow_xxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example testRequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2020-12-02T02:39:20.402Z
     *
     * @var string
     */
    public $startedTimeBegin;

    /**
     * @example 2020-12-02T02:23:54.817Z
     *
     * @var string
     */
    public $startedTimeEnd;

    /**
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
        'requestId'           => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
