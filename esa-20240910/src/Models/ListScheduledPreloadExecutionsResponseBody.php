<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListScheduledPreloadExecutionsResponseBody\executions;
use AlibabaCloud\Tea\Model;

class ListScheduledPreloadExecutionsResponseBody extends Model
{
    /**
     * @description The information about prefetch plans returned.
     *
     * @var executions[]
     */
    public $executions;

    /**
     * @description The request ID.
     *
     * @example ET5BF670-09D5-4D0B-BEBY-D96A2A528000
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'executions' => 'Executions',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->executions) {
            $res['Executions'] = [];
            if (null !== $this->executions && \is_array($this->executions)) {
                $n = 0;
                foreach ($this->executions as $item) {
                    $res['Executions'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListScheduledPreloadExecutionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Executions'])) {
            if (!empty($map['Executions'])) {
                $model->executions = [];
                $n = 0;
                foreach ($map['Executions'] as $item) {
                    $model->executions[$n++] = null !== $item ? executions::fromMap($item) : $item;
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
