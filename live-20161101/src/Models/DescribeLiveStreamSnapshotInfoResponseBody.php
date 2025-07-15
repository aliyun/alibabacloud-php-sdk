<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoResponseBody\liveStreamSnapshotInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamSnapshotInfoResponseBody extends Model
{
    /**
     * @description The snapshots.
     *
     * @var liveStreamSnapshotInfoList
     */
    public $liveStreamSnapshotInfoList;

    /**
     * @description The time when the next call occurred. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * >  If the number of snapshots that were captured within the specified time period exceeds the value of the Limit parameter, this parameter is returned. It indicates the time when the DescribeLiveStreamSnapshotInfo operation was called again. If this parameter is not returned, the number of snapshots that are captured within the specified time period does not exceed the specified limit.
     *
     * @example 2015-12-01T17:36:00Z
     *
     * @var string
     */
    public $nextStartTime;

    /**
     * @description The request ID.
     *
     * @example 62136AE6-7793-45ED-B14A-60D19A9486D3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveStreamSnapshotInfoList' => 'LiveStreamSnapshotInfoList',
        'nextStartTime' => 'NextStartTime',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamSnapshotInfoList) {
            $res['LiveStreamSnapshotInfoList'] = null !== $this->liveStreamSnapshotInfoList ? $this->liveStreamSnapshotInfoList->toMap() : null;
        }
        if (null !== $this->nextStartTime) {
            $res['NextStartTime'] = $this->nextStartTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamSnapshotInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamSnapshotInfoList'])) {
            $model->liveStreamSnapshotInfoList = liveStreamSnapshotInfoList::fromMap($map['LiveStreamSnapshotInfoList']);
        }
        if (isset($map['NextStartTime'])) {
            $model->nextStartTime = $map['NextStartTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
