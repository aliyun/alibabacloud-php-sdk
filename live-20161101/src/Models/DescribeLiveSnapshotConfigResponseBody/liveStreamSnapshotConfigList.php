<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotConfigResponseBody\liveStreamSnapshotConfigList\liveStreamSnapshotConfig;
use AlibabaCloud\Tea\Model;

class liveStreamSnapshotConfigList extends Model
{
    /**
     * @var liveStreamSnapshotConfig[]
     */
    public $liveStreamSnapshotConfig;
    protected $_name = [
        'liveStreamSnapshotConfig' => 'LiveStreamSnapshotConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamSnapshotConfig) {
            $res['LiveStreamSnapshotConfig'] = [];
            if (null !== $this->liveStreamSnapshotConfig && \is_array($this->liveStreamSnapshotConfig)) {
                $n = 0;
                foreach ($this->liveStreamSnapshotConfig as $item) {
                    $res['LiveStreamSnapshotConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamSnapshotConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamSnapshotConfig'])) {
            if (!empty($map['LiveStreamSnapshotConfig'])) {
                $model->liveStreamSnapshotConfig = [];
                $n                               = 0;
                foreach ($map['LiveStreamSnapshotConfig'] as $item) {
                    $model->liveStreamSnapshotConfig[$n++] = null !== $item ? liveStreamSnapshotConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
