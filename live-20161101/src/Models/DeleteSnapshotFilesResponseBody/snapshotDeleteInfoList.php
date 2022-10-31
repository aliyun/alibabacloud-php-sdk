<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DeleteSnapshotFilesResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DeleteSnapshotFilesResponseBody\snapshotDeleteInfoList\snapshotDeleteInfo;
use AlibabaCloud\Tea\Model;

class snapshotDeleteInfoList extends Model
{
    /**
     * @var snapshotDeleteInfo[]
     */
    public $snapshotDeleteInfo;
    protected $_name = [
        'snapshotDeleteInfo' => 'SnapshotDeleteInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotDeleteInfo) {
            $res['SnapshotDeleteInfo'] = [];
            if (null !== $this->snapshotDeleteInfo && \is_array($this->snapshotDeleteInfo)) {
                $n = 0;
                foreach ($this->snapshotDeleteInfo as $item) {
                    $res['SnapshotDeleteInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotDeleteInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotDeleteInfo'])) {
            if (!empty($map['SnapshotDeleteInfo'])) {
                $model->snapshotDeleteInfo = [];
                $n                         = 0;
                foreach ($map['SnapshotDeleteInfo'] as $item) {
                    $model->snapshotDeleteInfo[$n++] = null !== $item ? snapshotDeleteInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
