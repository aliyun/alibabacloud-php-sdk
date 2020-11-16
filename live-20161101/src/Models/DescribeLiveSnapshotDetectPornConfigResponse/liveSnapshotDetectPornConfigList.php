<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigResponse\liveSnapshotDetectPornConfigList\liveSnapshotDetectPornConfig;
use AlibabaCloud\Tea\Model;

class liveSnapshotDetectPornConfigList extends Model
{
    /**
     * @var liveSnapshotDetectPornConfig[]
     */
    public $liveSnapshotDetectPornConfig;
    protected $_name = [
        'liveSnapshotDetectPornConfig' => 'LiveSnapshotDetectPornConfig',
    ];

    public function validate()
    {
        Model::validateRequired('liveSnapshotDetectPornConfig', $this->liveSnapshotDetectPornConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveSnapshotDetectPornConfig) {
            $res['LiveSnapshotDetectPornConfig'] = [];
            if (null !== $this->liveSnapshotDetectPornConfig && \is_array($this->liveSnapshotDetectPornConfig)) {
                $n = 0;
                foreach ($this->liveSnapshotDetectPornConfig as $item) {
                    $res['LiveSnapshotDetectPornConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveSnapshotDetectPornConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveSnapshotDetectPornConfig'])) {
            if (!empty($map['LiveSnapshotDetectPornConfig'])) {
                $model->liveSnapshotDetectPornConfig = [];
                $n                                   = 0;
                foreach ($map['LiveSnapshotDetectPornConfig'] as $item) {
                    $model->liveSnapshotDetectPornConfig[$n++] = null !== $item ? liveSnapshotDetectPornConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
