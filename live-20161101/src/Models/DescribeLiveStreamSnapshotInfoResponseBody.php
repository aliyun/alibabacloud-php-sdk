<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoResponseBody\liveStreamSnapshotInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamSnapshotInfoResponseBody extends Model
{
    /**
     * @var liveStreamSnapshotInfoList
     */
    public $liveStreamSnapshotInfoList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextStartTime;
    protected $_name = [
        'liveStreamSnapshotInfoList' => 'LiveStreamSnapshotInfoList',
        'requestId'                  => 'RequestId',
        'nextStartTime'              => 'NextStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamSnapshotInfoList) {
            $res['LiveStreamSnapshotInfoList'] = null !== $this->liveStreamSnapshotInfoList ? $this->liveStreamSnapshotInfoList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextStartTime) {
            $res['NextStartTime'] = $this->nextStartTime;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextStartTime'])) {
            $model->nextStartTime = $map['NextStartTime'];
        }

        return $model;
    }
}
