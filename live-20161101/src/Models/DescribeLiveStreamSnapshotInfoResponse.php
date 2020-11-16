<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoResponse\liveStreamSnapshotInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamSnapshotInfoResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextStartTime;

    /**
     * @var liveStreamSnapshotInfoList
     */
    public $liveStreamSnapshotInfoList;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'nextStartTime'              => 'NextStartTime',
        'liveStreamSnapshotInfoList' => 'LiveStreamSnapshotInfoList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextStartTime', $this->nextStartTime, true);
        Model::validateRequired('liveStreamSnapshotInfoList', $this->liveStreamSnapshotInfoList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextStartTime) {
            $res['NextStartTime'] = $this->nextStartTime;
        }
        if (null !== $this->liveStreamSnapshotInfoList) {
            $res['LiveStreamSnapshotInfoList'] = null !== $this->liveStreamSnapshotInfoList ? $this->liveStreamSnapshotInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamSnapshotInfoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextStartTime'])) {
            $model->nextStartTime = $map['NextStartTime'];
        }
        if (isset($map['LiveStreamSnapshotInfoList'])) {
            $model->liveStreamSnapshotInfoList = liveStreamSnapshotInfoList::fromMap($map['LiveStreamSnapshotInfoList']);
        }

        return $model;
    }
}
