<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoResponseBody\liveStreamSnapshotInfoList\liveStreamSnapshotInfo;

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
        if (\is_array($this->liveStreamSnapshotInfo)) {
            Model::validateArray($this->liveStreamSnapshotInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamSnapshotInfo) {
            if (\is_array($this->liveStreamSnapshotInfo)) {
                $res['LiveStreamSnapshotInfo'] = [];
                $n1 = 0;
                foreach ($this->liveStreamSnapshotInfo as $item1) {
                    $res['LiveStreamSnapshotInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['LiveStreamSnapshotInfo'])) {
            if (!empty($map['LiveStreamSnapshotInfo'])) {
                $model->liveStreamSnapshotInfo = [];
                $n1 = 0;
                foreach ($map['LiveStreamSnapshotInfo'] as $item1) {
                    $model->liveStreamSnapshotInfo[$n1] = liveStreamSnapshotInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
