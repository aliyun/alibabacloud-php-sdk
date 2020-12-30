<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ListExecutionsRequest extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $startedTimeBegin;

    /**
     * @var string
     */
    public $startedTimeEnd;

    /**
     * @var string
     */
    public $executionNamePrefix;
    protected $_name = [
        'requestId'           => 'RequestId',
        'flowName'            => 'FlowName',
        'nextToken'           => 'NextToken',
        'limit'               => 'Limit',
        'status'              => 'Status',
        'startedTimeBegin'    => 'StartedTimeBegin',
        'startedTimeEnd'      => 'StartedTimeEnd',
        'executionNamePrefix' => 'ExecutionNamePrefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startedTimeBegin) {
            $res['StartedTimeBegin'] = $this->startedTimeBegin;
        }
        if (null !== $this->startedTimeEnd) {
            $res['StartedTimeEnd'] = $this->startedTimeEnd;
        }
        if (null !== $this->executionNamePrefix) {
            $res['ExecutionNamePrefix'] = $this->executionNamePrefix;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartedTimeBegin'])) {
            $model->startedTimeBegin = $map['StartedTimeBegin'];
        }
        if (isset($map['StartedTimeEnd'])) {
            $model->startedTimeEnd = $map['StartedTimeEnd'];
        }
        if (isset($map['ExecutionNamePrefix'])) {
            $model->executionNamePrefix = $map['ExecutionNamePrefix'];
        }

        return $model;
    }
}
