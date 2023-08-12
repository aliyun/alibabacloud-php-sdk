<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListChangeSetsResponseBody;

use AlibabaCloud\Tea\Model;

class changeSets extends Model
{
    /**
     * @description The ID of the change set.
     *
     * @example 1f6521a4-05af-4975-afe9-bc4b45ad****
     *
     * @var string
     */
    public $changeSetId;

    /**
     * @description The name of the change set.
     *
     * @example MyChangeSet
     *
     * @var string
     */
    public $changeSetName;

    /**
     * @description The type of the change set.
     *
     * @example UPDATE
     *
     * @var string
     */
    public $changeSetType;

    /**
     * @description The time when the change set was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2019-08-01T05:16:31
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the change set.
     *
     * @example It is a demo.
     *
     * @var string
     */
    public $description;

    /**
     * @description The execution status of the change set.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $executionStatus;

    /**
     * @description The region ID of the change set.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the stack with which the change set is associated.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The name of the stack with which the change set is associated.
     *
     * @example MyStack
     *
     * @var string
     */
    public $stackName;

    /**
     * @description The status of the change set.
     *
     * @example CREATE_COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The reason why the change set is in its current state.
     *
     * @example too many changes
     *
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'changeSetId'     => 'ChangeSetId',
        'changeSetName'   => 'ChangeSetName',
        'changeSetType'   => 'ChangeSetType',
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'executionStatus' => 'ExecutionStatus',
        'regionId'        => 'RegionId',
        'stackId'         => 'StackId',
        'stackName'       => 'StackName',
        'status'          => 'Status',
        'statusReason'    => 'StatusReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }
        if (null !== $this->changeSetName) {
            $res['ChangeSetName'] = $this->changeSetName;
        }
        if (null !== $this->changeSetType) {
            $res['ChangeSetType'] = $this->changeSetType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }
        if (isset($map['ChangeSetName'])) {
            $model->changeSetName = $map['ChangeSetName'];
        }
        if (isset($map['ChangeSetType'])) {
            $model->changeSetType = $map['ChangeSetType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecutionStatus'])) {
            $model->executionStatus = $map['ExecutionStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        return $model;
    }
}
