<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDISyncTasksResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDISyncTasksResponseBody\taskList\realTimeSolutionList;
use AlibabaCloud\Tea\Model;

class taskList extends Model
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
     * @var int
     */
    public $totalCount;

    /**
     * @var realTimeSolutionList[]
     */
    public $realTimeSolutionList;
    protected $_name = [
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'totalCount'           => 'TotalCount',
        'realTimeSolutionList' => 'RealTimeSolutionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->realTimeSolutionList) {
            $res['RealTimeSolutionList'] = [];
            if (null !== $this->realTimeSolutionList && \is_array($this->realTimeSolutionList)) {
                $n = 0;
                foreach ($this->realTimeSolutionList as $item) {
                    $res['RealTimeSolutionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RealTimeSolutionList'])) {
            if (!empty($map['RealTimeSolutionList'])) {
                $model->realTimeSolutionList = [];
                $n                           = 0;
                foreach ($map['RealTimeSolutionList'] as $item) {
                    $model->realTimeSolutionList[$n++] = null !== $item ? realTimeSolutionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
