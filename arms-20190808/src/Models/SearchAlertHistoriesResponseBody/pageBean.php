<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertHistoriesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertHistoriesResponseBody\pageBean\alarmHistories;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @description The information about alert records.
     *
     * @var alarmHistories[]
     */
    public $alarmHistories;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'alarmHistories' => 'AlarmHistories',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmHistories) {
            $res['AlarmHistories'] = [];
            if (null !== $this->alarmHistories && \is_array($this->alarmHistories)) {
                $n = 0;
                foreach ($this->alarmHistories as $item) {
                    $res['AlarmHistories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmHistories'])) {
            if (!empty($map['AlarmHistories'])) {
                $model->alarmHistories = [];
                $n                     = 0;
                foreach ($map['AlarmHistories'] as $item) {
                    $model->alarmHistories[$n++] = null !== $item ? alarmHistories::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
