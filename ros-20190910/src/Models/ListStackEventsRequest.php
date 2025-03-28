<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class ListStackEventsRequest extends Model
{
    /**
     * @var string[]
     */
    public $logicalResourceId;

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
    public $regionId;

    /**
     * @var string[]
     */
    public $resourceType;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string[]
     */
    public $status;
    protected $_name = [
        'logicalResourceId' => 'LogicalResourceId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'stackId' => 'StackId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->logicalResourceId)) {
            Model::validateArray($this->logicalResourceId);
        }
        if (\is_array($this->resourceType)) {
            Model::validateArray($this->resourceType);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logicalResourceId) {
            if (\is_array($this->logicalResourceId)) {
                $res['LogicalResourceId'] = [];
                $n1 = 0;
                foreach ($this->logicalResourceId as $item1) {
                    $res['LogicalResourceId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceType) {
            if (\is_array($this->resourceType)) {
                $res['ResourceType'] = [];
                $n1 = 0;
                foreach ($this->resourceType as $item1) {
                    $res['ResourceType'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['Status'] = [];
                $n1 = 0;
                foreach ($this->status as $item1) {
                    $res['Status'][$n1++] = $item1;
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
        if (isset($map['LogicalResourceId'])) {
            if (!empty($map['LogicalResourceId'])) {
                $model->logicalResourceId = [];
                $n1 = 0;
                foreach ($map['LogicalResourceId'] as $item1) {
                    $model->logicalResourceId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceType'])) {
            if (!empty($map['ResourceType'])) {
                $model->resourceType = [];
                $n1 = 0;
                foreach ($map['ResourceType'] as $item1) {
                    $model->resourceType[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $n1 = 0;
                foreach ($map['Status'] as $item1) {
                    $model->status[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
