<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultResponseBody\trackResult\eventList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultResponseBody\trackResult\tableInfoList;
use AlibabaCloud\Tea\Model;

class trackResult extends Model
{
    /**
     * @description The details of the event logs.
     *
     * @var eventList[]
     */
    public $eventList;

    /**
     * @description The metadata of tables for which you track data operations.
     *
     * @var tableInfoList[]
     */
    public $tableInfoList;

    /**
     * @description The total number of entries returned.
     *
     * @example 109
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'eventList'     => 'EventList',
        'tableInfoList' => 'TableInfoList',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventList) {
            $res['EventList'] = [];
            if (null !== $this->eventList && \is_array($this->eventList)) {
                $n = 0;
                foreach ($this->eventList as $item) {
                    $res['EventList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableInfoList) {
            $res['TableInfoList'] = [];
            if (null !== $this->tableInfoList && \is_array($this->tableInfoList)) {
                $n = 0;
                foreach ($this->tableInfoList as $item) {
                    $res['TableInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trackResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventList'])) {
            if (!empty($map['EventList'])) {
                $model->eventList = [];
                $n                = 0;
                foreach ($map['EventList'] as $item) {
                    $model->eventList[$n++] = null !== $item ? eventList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableInfoList'])) {
            if (!empty($map['TableInfoList'])) {
                $model->tableInfoList = [];
                $n                    = 0;
                foreach ($map['TableInfoList'] as $item) {
                    $model->tableInfoList[$n++] = null !== $item ? tableInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
