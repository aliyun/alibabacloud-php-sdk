<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainSnapshotDataResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainSnapshotDataResponseBody\snapshotDataInfos\snapshotDataInfo;
use AlibabaCloud\Tea\Model;

class snapshotDataInfos extends Model
{
    /**
     * @var snapshotDataInfo[]
     */
    public $snapshotDataInfo;
    protected $_name = [
        'snapshotDataInfo' => 'SnapshotDataInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotDataInfo) {
            $res['SnapshotDataInfo'] = [];
            if (null !== $this->snapshotDataInfo && \is_array($this->snapshotDataInfo)) {
                $n = 0;
                foreach ($this->snapshotDataInfo as $item) {
                    $res['SnapshotDataInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotDataInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotDataInfo'])) {
            if (!empty($map['SnapshotDataInfo'])) {
                $model->snapshotDataInfo = [];
                $n                       = 0;
                foreach ($map['SnapshotDataInfo'] as $item) {
                    $model->snapshotDataInfo[$n++] = null !== $item ? snapshotDataInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
