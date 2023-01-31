<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntriesResponseBody\failedRouteEntries;
use AlibabaCloud\Tea\Model;

class CreateRouteEntriesResponseBody extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $failedCount;

    /**
     * @var failedRouteEntries[]
     */
    public $failedRouteEntries;

    /**
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $routeEntryIds;

    /**
     * @example 2
     *
     * @var int
     */
    public $successCount;
    protected $_name = [
        'failedCount'        => 'FailedCount',
        'failedRouteEntries' => 'FailedRouteEntries',
        'requestId'          => 'RequestId',
        'routeEntryIds'      => 'RouteEntryIds',
        'successCount'       => 'SuccessCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->failedRouteEntries) {
            $res['FailedRouteEntries'] = [];
            if (null !== $this->failedRouteEntries && \is_array($this->failedRouteEntries)) {
                $n = 0;
                foreach ($this->failedRouteEntries as $item) {
                    $res['FailedRouteEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeEntryIds) {
            $res['RouteEntryIds'] = $this->routeEntryIds;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRouteEntriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['FailedRouteEntries'])) {
            if (!empty($map['FailedRouteEntries'])) {
                $model->failedRouteEntries = [];
                $n                         = 0;
                foreach ($map['FailedRouteEntries'] as $item) {
                    $model->failedRouteEntries[$n++] = null !== $item ? failedRouteEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteEntryIds'])) {
            if (!empty($map['RouteEntryIds'])) {
                $model->routeEntryIds = $map['RouteEntryIds'];
            }
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
