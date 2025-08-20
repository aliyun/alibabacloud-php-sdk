<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksRequest\tag;

class ListStacksRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $parentStackId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $showNestedStack;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string[]
     */
    public $stackIds;

    /**
     * @var string[]
     */
    public $stackName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'endTime' => 'EndTime',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'parentStackId' => 'ParentStackId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'showNestedStack' => 'ShowNestedStack',
        'stackId' => 'StackId',
        'stackIds' => 'StackIds',
        'stackName' => 'StackName',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->stackIds)) {
            Model::validateArray($this->stackIds);
        }
        if (\is_array($this->stackName)) {
            Model::validateArray($this->stackName);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->stackIds)) {
                $res['StackIds'] = [];
                $n1 = 0;
                foreach ($this->stackIds as $item1) {
                    $res['StackIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stackName) {
            if (\is_array($this->stackName)) {
                $res['StackName'] = [];
                $n1 = 0;
                foreach ($this->stackName as $item1) {
                    $res['StackName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['Status'] = [];
                $n1 = 0;
                foreach ($this->status as $item1) {
                    $res['Status'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->stackIds = [];
                $n1 = 0;
                foreach ($map['StackIds'] as $item1) {
                    $model->stackIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StackName'])) {
            if (!empty($map['StackName'])) {
                $model->stackName = [];
                $n1 = 0;
                foreach ($map['StackName'] as $item1) {
                    $model->stackName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $n1 = 0;
                foreach ($map['Status'] as $item1) {
                    $model->status[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
