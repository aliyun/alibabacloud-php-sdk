<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationsResponseBody;

use AlibabaCloud\Tea\Model;

class stackGroupOperations extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stackGroupId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $operationDescription;
    protected $_name = [
        'status'               => 'Status',
        'stackGroupId'         => 'StackGroupId',
        'endTime'              => 'EndTime',
        'action'               => 'Action',
        'createTime'           => 'CreateTime',
        'stackGroupName'       => 'StackGroupName',
        'operationId'          => 'OperationId',
        'operationDescription' => 'OperationDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroupOperations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }

        return $model;
    }
}
