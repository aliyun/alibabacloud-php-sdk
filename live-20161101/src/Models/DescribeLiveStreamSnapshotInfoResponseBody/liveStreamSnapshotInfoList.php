<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoResponseBody\liveStreamSnapshotInfoList\liveStreamSnapshotInfo;
use AlibabaCloud\Tea\Model;

class liveStreamSnapshotInfoList extends Model
{
    /**
     * @var liveStreamSnapshotInfo[]
     */
    public $liveStreamSnapshotInfo;
    protected $_name = [
        'liveStreamSnapshotInfo' => 'LiveStreamSnapshotInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamSnapshotInfo) {
            $res['LiveStreamSnapshotInfo'] = [];
            if (null !== $this->liveStreamSnapshotInfo && \is_array($this->liveStreamSnapshotInfo)) {
                $n = 0;
                foreach ($this->liveStreamSnapshotInfo as $item) {
                    $res['LiveStreamSnapshotInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamSnapshotInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamSnapshotInfo'])) {
            if (!empty($map['LiveStreamSnapshotInfo'])) {
                $model->liveStreamSnapshotInfo = [];
                $n                             = 0;
                foreach ($map['LiveStreamSnapshotInfo'] as $item) {
                    $model->liveStreamSnapshotInfo[$n++] = null !== $item ? liveStreamSnapshotInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
