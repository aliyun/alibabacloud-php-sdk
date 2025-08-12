<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotConfigResponseBody\liveStreamSnapshotConfigList\liveStreamSnapshotConfig;

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
        if (\is_array($this->liveStreamSnapshotConfig)) {
            Model::validateArray($this->liveStreamSnapshotConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamSnapshotConfig) {
            if (\is_array($this->liveStreamSnapshotConfig)) {
                $res['LiveStreamSnapshotConfig'] = [];
                $n1 = 0;
                foreach ($this->liveStreamSnapshotConfig as $item1) {
                    $res['LiveStreamSnapshotConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveStreamSnapshotConfig'])) {
            if (!empty($map['LiveStreamSnapshotConfig'])) {
                $model->liveStreamSnapshotConfig = [];
                $n1 = 0;
                foreach ($map['LiveStreamSnapshotConfig'] as $item1) {
                    $model->liveStreamSnapshotConfig[$n1] = liveStreamSnapshotConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
