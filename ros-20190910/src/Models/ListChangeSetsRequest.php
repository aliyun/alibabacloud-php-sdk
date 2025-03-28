<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class ListChangeSetsRequest extends Model
{
    /**
     * @var string
     */
    public $changeSetId;

    /**
     * @var string[]
     */
    public $changeSetName;

    /**
     * @var string[]
     */
    public $executionStatus;

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
     * @var string
     */
    public $stackId;

    /**
     * @var string[]
     */
    public $status;
    protected $_name = [
        'changeSetId' => 'ChangeSetId',
        'changeSetName' => 'ChangeSetName',
        'executionStatus' => 'ExecutionStatus',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'stackId' => 'StackId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->changeSetName)) {
            Model::validateArray($this->changeSetName);
        }
        if (\is_array($this->executionStatus)) {
            Model::validateArray($this->executionStatus);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }

        if (null !== $this->changeSetName) {
            if (\is_array($this->changeSetName)) {
                $res['ChangeSetName'] = [];
                $n1 = 0;
                foreach ($this->changeSetName as $item1) {
                    $res['ChangeSetName'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->executionStatus) {
            if (\is_array($this->executionStatus)) {
                $res['ExecutionStatus'] = [];
                $n1 = 0;
                foreach ($this->executionStatus as $item1) {
                    $res['ExecutionStatus'][$n1++] = $item1;
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
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }

        if (isset($map['ChangeSetName'])) {
            if (!empty($map['ChangeSetName'])) {
                $model->changeSetName = [];
                $n1 = 0;
                foreach ($map['ChangeSetName'] as $item1) {
                    $model->changeSetName[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExecutionStatus'])) {
            if (!empty($map['ExecutionStatus'])) {
                $model->executionStatus = [];
                $n1 = 0;
                foreach ($map['ExecutionStatus'] as $item1) {
                    $model->executionStatus[$n1++] = $item1;
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
