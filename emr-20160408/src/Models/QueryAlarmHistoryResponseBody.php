<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\QueryAlarmHistoryResponseBody\alarmHistoryList;
use AlibabaCloud\Tea\Model;

class QueryAlarmHistoryResponseBody extends Model
{
    /**
     * @var alarmHistoryList
     */
    public $alarmHistoryList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $total;

    /**
     * @var string
     */
    public $cursor;
    protected $_name = [
        'alarmHistoryList' => 'AlarmHistoryList',
        'requestId'        => 'RequestId',
        'total'            => 'Total',
        'cursor'           => 'Cursor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmHistoryList) {
            $res['AlarmHistoryList'] = null !== $this->alarmHistoryList ? $this->alarmHistoryList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAlarmHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmHistoryList'])) {
            $model->alarmHistoryList = alarmHistoryList::fromMap($map['AlarmHistoryList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }

        return $model;
    }
}
