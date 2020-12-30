<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListAlarmHistoriesResponseBody\alarmHistories;
use AlibabaCloud\Tea\Model;

class ListAlarmHistoriesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var alarmHistories[]
     */
    public $alarmHistories;
    protected $_name = [
        'totalCount'     => 'TotalCount',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'maxResults'     => 'MaxResults',
        'alarmHistories' => 'AlarmHistories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->alarmHistories) {
            $res['AlarmHistories'] = [];
            if (null !== $this->alarmHistories && \is_array($this->alarmHistories)) {
                $n = 0;
                foreach ($this->alarmHistories as $item) {
                    $res['AlarmHistories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlarmHistoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['AlarmHistories'])) {
            if (!empty($map['AlarmHistories'])) {
                $model->alarmHistories = [];
                $n                     = 0;
                foreach ($map['AlarmHistories'] as $item) {
                    $model->alarmHistories[$n++] = null !== $item ? alarmHistories::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
