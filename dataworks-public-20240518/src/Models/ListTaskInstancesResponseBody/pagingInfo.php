<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskInstancesResponseBody\pagingInfo\taskInstances;

class pagingInfo extends Model
{
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var taskInstances[]
     */
    public $taskInstances;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'taskInstances' => 'TaskInstances',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->taskInstances)) {
            Model::validateArray($this->taskInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->taskInstances) {
            if (\is_array($this->taskInstances)) {
                $res['TaskInstances'] = [];
                $n1                   = 0;
                foreach ($this->taskInstances as $item1) {
                    $res['TaskInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TaskInstances'])) {
            if (!empty($map['TaskInstances'])) {
                $model->taskInstances = [];
                $n1                   = 0;
                foreach ($map['TaskInstances'] as $item1) {
                    $model->taskInstances[$n1++] = taskInstances::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
