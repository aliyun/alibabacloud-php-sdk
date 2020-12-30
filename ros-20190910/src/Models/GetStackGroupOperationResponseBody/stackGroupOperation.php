<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation\operationPreferences;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation\stackGroupDriftDetectionDetail;
use AlibabaCloud\Tea\Model;

class stackGroupOperation extends Model
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
    public $action;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $retainStacks;

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

    /**
     * @var stackGroupDriftDetectionDetail
     */
    public $stackGroupDriftDetectionDetail;

    /**
     * @var operationPreferences
     */
    public $operationPreferences;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $executionRoleName;

    /**
     * @var string
     */
    public $administratorRoleName;
    protected $_name = [
        'status'                         => 'Status',
        'stackGroupId'                   => 'StackGroupId',
        'action'                         => 'Action',
        'createTime'                     => 'CreateTime',
        'retainStacks'                   => 'RetainStacks',
        'stackGroupName'                 => 'StackGroupName',
        'operationId'                    => 'OperationId',
        'operationDescription'           => 'OperationDescription',
        'stackGroupDriftDetectionDetail' => 'StackGroupDriftDetectionDetail',
        'operationPreferences'           => 'OperationPreferences',
        'endTime'                        => 'EndTime',
        'executionRoleName'              => 'ExecutionRoleName',
        'administratorRoleName'          => 'AdministratorRoleName',
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
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->retainStacks) {
            $res['RetainStacks'] = $this->retainStacks;
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
        if (null !== $this->stackGroupDriftDetectionDetail) {
            $res['StackGroupDriftDetectionDetail'] = null !== $this->stackGroupDriftDetectionDetail ? $this->stackGroupDriftDetectionDetail->toMap() : null;
        }
        if (null !== $this->operationPreferences) {
            $res['OperationPreferences'] = null !== $this->operationPreferences ? $this->operationPreferences->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executionRoleName) {
            $res['ExecutionRoleName'] = $this->executionRoleName;
        }
        if (null !== $this->administratorRoleName) {
            $res['AdministratorRoleName'] = $this->administratorRoleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroupOperation
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RetainStacks'])) {
            $model->retainStacks = $map['RetainStacks'];
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
        if (isset($map['StackGroupDriftDetectionDetail'])) {
            $model->stackGroupDriftDetectionDetail = stackGroupDriftDetectionDetail::fromMap($map['StackGroupDriftDetectionDetail']);
        }
        if (isset($map['OperationPreferences'])) {
            $model->operationPreferences = operationPreferences::fromMap($map['OperationPreferences']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecutionRoleName'])) {
            $model->executionRoleName = $map['ExecutionRoleName'];
        }
        if (isset($map['AdministratorRoleName'])) {
            $model->administratorRoleName = $map['AdministratorRoleName'];
        }

        return $model;
    }
}
