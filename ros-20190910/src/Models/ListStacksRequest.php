<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksRequest\tag;
use AlibabaCloud\Tea\Model;

class ListStacksRequest extends Model
{
    /**
     * @description The reason why the stack is in its current state.
     *
     * @example 2023-04-01T15:16:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The tags.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The state N of the stack. Valid values:
     *
     *   CREATE_IN_PROGRESS: The stack is being created.
     *   CREATE_FAILED: The stack fails to be created.
     *   CREATE_COMPLETE: The stack is created.
     *   UPDATE_IN_PROGRESS: The stack is being updated.
     *   UPDATE_FAILED: The stack fails to be updated.
     *   UPDATE_COMPLETE: The stack is updated.
     *   DELETE_IN_PROGRESS: The stack is being deleted.
     *   DELETE_FAILED: The stack fails to be deleted.
     *   CREATE_ROLLBACK_IN_PROGRESS: The resources are being rolled back after the stack fails to be created.
     *   CREATE_ROLLBACK_FAILED: The resources fail to be rolled back after the stack fails to be created.
     *   CREATE_ROLLBACK_COMPLETE: The resources are rolled back after the stack fails to be created.
     *   ROLLBACK_IN_PROGRESS: The resources of the stack are being rolled back.
     *   ROLLBACK_FAILED: The resources of the stack fail to be rolled back.
     *   ROLLBACK_COMPLETE: The resources of the stack are rolled back.
     *   CHECK_IN_PROGRESS: The stack is being validated.
     *   CHECK_FAILED: The stack fails to be validated.
     *   CHECK_COMPLETE: The stack is validated.
     *   REVIEW_IN_PROGRESS: The stack is being reviewed.
     *   IMPORT_CREATE_IN_PROGRESS: The stack is being created by using imported resources.
     *   IMPORT_CREATE_FAILED: The stack fails to be created by using imported resources.
     *   IMPORT_CREATE_COMPLETE: The stack is created by using imported resources.
     *   IMPORT_CREATE_ROLLBACK_IN_PROGRESS: The resources are being rolled back after the stack fails to be created by using imported resources.
     *   IMPORT_CREATE_ROLLBACK_FAILED: The resources fail to be rolled back after the stack fails to be created by using imported resources.
     *   IMPORT_CREATE_ROLLBACK_COMPLETE: The resources are rolled back after the stack fails to be created by using imported resources.
     *   IMPORT_UPDATE_IN_PROGRESS: The stack is being updated by using imported resources.
     *   IMPORT_UPDATE_FAILED: The stack fails to be updated by using imported resources.
     *   IMPORT_UPDATE_COMPLETE: The stack is updated by using imported resources.
     *   IMPORT_UPDATE_ROLLBACK_IN_PROGRESS: The resources are being rolled back after the stack fails to be updated by using imported resources.
     *   IMPORT_UPDATE_ROLLBACK_FAILED: The resources fail to be rolled back after the stack fails to be updated by using imported resources.
     *   IMPORT_UPDATE_ROLLBACK_COMPLETE: The resources are rolled back after the stack fails to be updated by using imported resources.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of stack N.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $parentStackId;

    /**
     * @description The name of stack N.
     *
     * Valid values of N: 1 to 5.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The list of stacks.
     *
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The key of tag N of the stack.
     *
     * Valid values of N: 1 to 20.
     * @example true
     *
     * @var bool
     */
    public $showNestedStack;

    /**
     * @description The value of tag N of the stack.
     *
     * Valid values of N: 1 to 20.
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The state of the stack.
     *
     * @var string[]
     */
    public $stackIds;

    /**
     * @description The ID of stack N.
     *
     * Valid values of N: 1 to 10.
     * @example MyStack
     *
     * @var string[]
     */
    public $stackName;

    /**
     * @description The time when the last successful drift detection was performed on the stack.
     *
     * @example 2023-04-01T15:10:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the resource group.
     *
     * For more information about resource groups, see the "Resource Group" section of the [What is Resource Management?](~~94475~~) topic.
     * @example CREATE_COMPLETE
     *
     * @var string[]
     */
    public $status;

    /**
     * @description The number of entries returned per page.
     *
     * Default value: 10.
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'endTime'         => 'EndTime',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'parentStackId'   => 'ParentStackId',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'showNestedStack' => 'ShowNestedStack',
        'stackId'         => 'StackId',
        'stackIds'        => 'StackIds',
        'stackName'       => 'StackName',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'tag'             => 'Tag',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentStackId) {
            $res['ParentStackId'] = $this->parentStackId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->showNestedStack) {
            $res['ShowNestedStack'] = $this->showNestedStack;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackIds) {
            $res['StackIds'] = $this->stackIds;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStacksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentStackId'])) {
            $model->parentStackId = $map['ParentStackId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShowNestedStack'])) {
            $model->showNestedStack = $map['ShowNestedStack'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackIds'])) {
            if (!empty($map['StackIds'])) {
                $model->stackIds = $map['StackIds'];
            }
        }
        if (isset($map['StackName'])) {
            if (!empty($map['StackName'])) {
                $model->stackName = $map['StackName'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
