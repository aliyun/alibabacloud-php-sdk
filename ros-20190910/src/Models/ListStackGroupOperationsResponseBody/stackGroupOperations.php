<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationsResponseBody;

use AlibabaCloud\Tea\Model;

class stackGroupOperations extends Model
{
    /**
     * @example CREATE
     *
     * @var string
     */
    public $action;

    /**
     * @example 2020-01-20T09:22:36.000000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2020-01-20T09:22:41.000000
     *
     * @var string
     */
    public $endTime;

    /**
     * @example Create stack instance in hangzhou
     *
     * @var string
     */
    public $operationDescription;

    /**
     * @example 14A07460-EBE7-47CA-9757-12CC4761****
     *
     * @var string
     */
    public $operationId;

    /**
     * @example fd0ddef9-9540-4b42-a464-94f77835****
     *
     * @var string
     */
    public $stackGroupId;

    /**
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @example SUCCEEDED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'action'               => 'Action',
        'createTime'           => 'CreateTime',
        'endTime'              => 'EndTime',
        'operationDescription' => 'OperationDescription',
        'operationId'          => 'OperationId',
        'stackGroupId'         => 'StackGroupId',
        'stackGroupName'       => 'StackGroupName',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
