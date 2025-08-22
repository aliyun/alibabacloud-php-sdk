<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListTimingSyntheticTasksRequest;

use AlibabaCloud\Dara\Model;

class search extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $order;

    /**
     * @var string
     */
    public $orderField;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $taskIds;

    /**
     * @var int[]
     */
    public $taskTypes;
    protected $_name = [
        'name' => 'Name',
        'order' => 'Order',
        'orderField' => 'OrderField',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'status' => 'Status',
        'taskIds' => 'TaskIds',
        'taskTypes' => 'TaskTypes',
    ];

    public function validate()
    {
        if (\is_array($this->taskIds)) {
            Model::validateArray($this->taskIds);
        }
        if (\is_array($this->taskTypes)) {
            Model::validateArray($this->taskTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskIds) {
            if (\is_array($this->taskIds)) {
                $res['TaskIds'] = [];
                $n1 = 0;
                foreach ($this->taskIds as $item1) {
                    $res['TaskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskTypes) {
            if (\is_array($this->taskTypes)) {
                $res['TaskTypes'] = [];
                $n1 = 0;
                foreach ($this->taskTypes as $item1) {
                    $res['TaskTypes'][$n1] = $item1;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = [];
                $n1 = 0;
                foreach ($map['TaskIds'] as $item1) {
                    $model->taskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskTypes'])) {
            if (!empty($map['TaskTypes'])) {
                $model->taskTypes = [];
                $n1 = 0;
                foreach ($map['TaskTypes'] as $item1) {
                    $model->taskTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
