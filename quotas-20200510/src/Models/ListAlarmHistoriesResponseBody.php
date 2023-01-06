<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListAlarmHistoriesResponseBody\alarmHistories;
use AlibabaCloud\Tea\Model;

class ListAlarmHistoriesResponseBody extends Model
{
    /**
     * @description The details of the alert records.
     *
     * @var alarmHistories[]
     */
    public $alarmHistories;

    /**
     * @description The maximum number of records returned for the query.
     *
     * @example 4
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to mark the location where the query is ended. An empty value indicates that all the data is queried.
     *
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example CB38DDF9-B1E0-48C1-9966-19C443C2841E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of records returned for the query.
     *
     * @example 4
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'alarmHistories' => 'AlarmHistories',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListAlarmHistoriesResponseBody
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
