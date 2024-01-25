<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models\ListOperationsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $hasChildOperationNodes;

    /**
     * @var bool
     */
    public $hasOperationTask;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $operationNodeId;

    /**
     * @var int
     */
    public $operationNodeName;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'                => 'EndTime',
        'hasChildOperationNodes' => 'HasChildOperationNodes',
        'hasOperationTask'       => 'HasOperationTask',
        'operationId'            => 'OperationId',
        'operationNodeId'        => 'OperationNodeId',
        'operationNodeName'      => 'OperationNodeName',
        'startTime'              => 'StartTime',
        'status'                 => 'Status',
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
        if (null !== $this->hasChildOperationNodes) {
            $res['HasChildOperationNodes'] = $this->hasChildOperationNodes;
        }
        if (null !== $this->hasOperationTask) {
            $res['HasOperationTask'] = $this->hasOperationTask;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->operationNodeId) {
            $res['OperationNodeId'] = $this->operationNodeId;
        }
        if (null !== $this->operationNodeName) {
            $res['OperationNodeName'] = $this->operationNodeName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HasChildOperationNodes'])) {
            $model->hasChildOperationNodes = $map['HasChildOperationNodes'];
        }
        if (isset($map['HasOperationTask'])) {
            $model->hasOperationTask = $map['HasOperationTask'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['OperationNodeId'])) {
            $model->operationNodeId = $map['OperationNodeId'];
        }
        if (isset($map['OperationNodeName'])) {
            $model->operationNodeName = $map['OperationNodeName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
