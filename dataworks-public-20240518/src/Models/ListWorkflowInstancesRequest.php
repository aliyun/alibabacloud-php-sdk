<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListWorkflowInstancesRequest extends Model
{
    /**
     * @var int
     */
    public $bizDate;
    /**
     * @var int[]
     */
    public $ids;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var string
     */
    public $type;
    /**
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'bizDate'    => 'BizDate',
        'ids'        => 'Ids',
        'name'       => 'Name',
        'owner'      => 'Owner',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'projectId'  => 'ProjectId',
        'sortBy'     => 'SortBy',
        'type'       => 'Type',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
        if (\is_array($this->ids)) {
            Model::validateArray($this->ids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }

        if (null !== $this->ids) {
            if (\is_array($this->ids)) {
                $res['Ids'] = [];
                $n1         = 0;
                foreach ($this->ids as $item1) {
                    $res['Ids'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }

        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = [];
                $n1         = 0;
                foreach ($map['Ids'] as $item1) {
                    $model->ids[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
