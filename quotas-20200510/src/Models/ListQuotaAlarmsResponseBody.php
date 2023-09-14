<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaAlarmsResponseBody\quotaAlarms;
use AlibabaCloud\Tea\Model;

class ListQuotaAlarmsResponseBody extends Model
{
    /**
     * @description The maximum number of records that are returned for the query.
     *
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that marks the position at which the query ends.
     *
     * > An empty value indicates that all data is returned.
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The details about the quota alert.
     *
     * @var quotaAlarms[]
     */
    public $quotaAlarms;

    /**
     * @description The ID of the request.
     *
     * @example 87F3B755-3BD2-4C76-B36A-93247002918C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of quota alerts.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'quotaAlarms' => 'QuotaAlarms',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->quotaAlarms) {
            $res['QuotaAlarms'] = [];
            if (null !== $this->quotaAlarms && \is_array($this->quotaAlarms)) {
                $n = 0;
                foreach ($this->quotaAlarms as $item) {
                    $res['QuotaAlarms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListQuotaAlarmsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['QuotaAlarms'])) {
            if (!empty($map['QuotaAlarms'])) {
                $model->quotaAlarms = [];
                $n                  = 0;
                foreach ($map['QuotaAlarms'] as $item) {
                    $model->quotaAlarms[$n++] = null !== $item ? quotaAlarms::fromMap($item) : $item;
                }
            }
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
