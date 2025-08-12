<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigResponseBody\liveSnapshotDetectPornConfigList\liveSnapshotDetectPornConfig;

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
        if (\is_array($this->liveSnapshotDetectPornConfig)) {
            Model::validateArray($this->liveSnapshotDetectPornConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveSnapshotDetectPornConfig) {
            if (\is_array($this->liveSnapshotDetectPornConfig)) {
                $res['LiveSnapshotDetectPornConfig'] = [];
                $n1 = 0;
                foreach ($this->liveSnapshotDetectPornConfig as $item1) {
                    $res['LiveSnapshotDetectPornConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveSnapshotDetectPornConfig'])) {
            if (!empty($map['LiveSnapshotDetectPornConfig'])) {
                $model->liveSnapshotDetectPornConfig = [];
                $n1 = 0;
                foreach ($map['LiveSnapshotDetectPornConfig'] as $item1) {
                    $model->liveSnapshotDetectPornConfig[$n1] = liveSnapshotDetectPornConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
