<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeSlowLogTrendResponseBody extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example am-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end time of the query. The end time must be later than the start time. The maximum time range that can be specified is seven days. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-06-20T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The information about the trend of slow query logs.
     *
     * @var items
     */
    public $items;

    /**
     * @description The request ID.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start time of the query. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-06-01T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'endTime'     => 'EndTime',
        'items'       => 'Items',
        'requestId'   => 'RequestId',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlowLogTrendResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
