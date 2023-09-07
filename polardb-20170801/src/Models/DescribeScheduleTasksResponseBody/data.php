<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksResponseBody\data\timerInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The page number of the page returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The details of the scheduled task.
     *
     * @var timerInfos[]
     */
    public $timerInfos;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'timerInfos'       => 'TimerInfos',
        'totalRecordCount' => 'TotalRecordCount',
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
        if (null !== $this->timerInfos) {
            $res['TimerInfos'] = [];
            if (null !== $this->timerInfos && \is_array($this->timerInfos)) {
                $n = 0;
                foreach ($this->timerInfos as $item) {
                    $res['TimerInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['TimerInfos'])) {
            if (!empty($map['TimerInfos'])) {
                $model->timerInfos = [];
                $n                 = 0;
                foreach ($map['TimerInfos'] as $item) {
                    $model->timerInfos[$n++] = null !== $item ? timerInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
