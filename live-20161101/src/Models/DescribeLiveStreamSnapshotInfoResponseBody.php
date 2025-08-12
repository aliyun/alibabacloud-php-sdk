<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoResponseBody\liveStreamSnapshotInfoList;

class DescribeLiveStreamSnapshotInfoResponseBody extends Model
{
    /**
     * @var liveStreamSnapshotInfoList
     */
    public $liveStreamSnapshotInfoList;

    /**
     * @var string
     */
    public $nextStartTime;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveStreamSnapshotInfoList' => 'LiveStreamSnapshotInfoList',
        'nextStartTime' => 'NextStartTime',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveStreamSnapshotInfoList) {
            $this->liveStreamSnapshotInfoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamSnapshotInfoList) {
            $res['LiveStreamSnapshotInfoList'] = null !== $this->liveStreamSnapshotInfoList ? $this->liveStreamSnapshotInfoList->toArray($noStream) : $this->liveStreamSnapshotInfoList;
        }

        if (null !== $this->nextStartTime) {
            $res['NextStartTime'] = $this->nextStartTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
