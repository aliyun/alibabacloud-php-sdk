<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsResponseBody\alarmList;
use AlibabaCloud\Tea\Model;

class DescribeAlarmsResponseBody extends Model
{
    /**
     * @description The event-triggered tasks.
     *
     * @var alarmList[]
     */
    public $alarmList;

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
     * @description The ID of the request.
     *
     * @example 871C7C53-34A4-45AA-8C14-4B72FA6A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of event-triggered tasks.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'alarmList'  => 'AlarmList',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmList) {
            $res['AlarmList'] = [];
            if (null !== $this->alarmList && \is_array($this->alarmList)) {
                $n = 0;
                foreach ($this->alarmList as $item) {
                    $res['AlarmList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlarmsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmList'])) {
            if (!empty($map['AlarmList'])) {
                $model->alarmList = [];
                $n                = 0;
                foreach ($map['AlarmList'] as $item) {
                    $model->alarmList[$n++] = null !== $item ? alarmList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
