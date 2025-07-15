<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ListEventSubEventResponseBody\logs;
use AlibabaCloud\Tea\Model;

class ListEventSubEventResponseBody extends Model
{
    /**
     * @description The total number of callback records returned on the current page.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description Indicates whether the current page is followed by a page.
     *
     * @example false
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @description The callback records.
     *
     * @var logs[]
     */
    public $logs;

    /**
     * @description The request ID.
     *
     * @example CC8CB656-A7BA-1811-9D6B-4CC187E988BD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count' => 'Count',
        'hasMore' => 'HasMore',
        'logs' => 'Logs',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->logs) {
            $res['Logs'] = [];
            if (null !== $this->logs && \is_array($this->logs)) {
                $n = 0;
                foreach ($this->logs as $item) {
                    $res['Logs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEventSubEventResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n = 0;
                foreach ($map['Logs'] as $item) {
                    $model->logs[$n++] = null !== $item ? logs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
