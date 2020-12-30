<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaAlarmsResponseBody\quotaAlarms;
use AlibabaCloud\Tea\Model;

class ListQuotaAlarmsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var quotaAlarms[]
     */
    public $quotaAlarms;

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
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'quotaAlarms' => 'QuotaAlarms',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'maxResults'  => 'MaxResults',
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
        if (null !== $this->quotaAlarms) {
            $res['QuotaAlarms'] = [];
            if (null !== $this->quotaAlarms && \is_array($this->quotaAlarms)) {
                $n = 0;
                foreach ($this->quotaAlarms as $item) {
                    $res['QuotaAlarms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
