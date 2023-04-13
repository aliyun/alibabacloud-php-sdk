<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksRequest\tag;
use AlibabaCloud\Tea\Model;

class ListStacksRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the parent stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $parentStackId;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * For more information about resource groups, see the "Resource Group" section of the [What is Resource Management?](~~94475~~) topic.
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether to return nested stacks. Default value: false. Valid values:
     *
     *   true
     *
     *   false
     *
     * > If the ParentStackId parameter is specified, you must set the ShowNestedStack parameter to true.
     * @example true
     *
     * @var bool
     */
    public $showNestedStack;

    /**
     * @description The ID of the stack. If you want to query the basic information about the stack, you can use this parameter and do not need to call the GetStack operation.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The ID of stack N.
     *
     * @var string[]
     */
    public $stackIds;

    /**
     * @description The name of stack N.
     *
     * @example MyStack
     *
     * @var string[]
     */
    public $stackName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @description The state N of the stack.
     *
     * @example CREATE_COMPLETE
     *
     * @var string[]
     */
    public $status;

    /**
     * @description The tags.
     *
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
