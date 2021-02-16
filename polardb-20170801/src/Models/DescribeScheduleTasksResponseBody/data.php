<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksResponseBody\data\timerInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var timerInfos[]
     */
    public $timerInfos;

    /**
     * @var int
     */
    public $totalRecordCount;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'timerInfos'       => 'TimerInfos',
        'totalRecordCount' => 'TotalRecordCount',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
