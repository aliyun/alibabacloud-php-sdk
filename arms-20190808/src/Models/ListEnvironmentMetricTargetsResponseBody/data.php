<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentMetricTargetsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentMetricTargetsResponseBody\data\activeTargets;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentMetricTargetsResponseBody\data\droppedTargets;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The active targets.
     *
     * @var activeTargets[]
     */
    public $activeTargets;

    /**
     * @description The deleted targets.
     *
     * @var droppedTargets[]
     */
    public $droppedTargets;
    protected $_name = [
        'activeTargets'  => 'ActiveTargets',
        'droppedTargets' => 'DroppedTargets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeTargets) {
            $res['ActiveTargets'] = [];
            if (null !== $this->activeTargets && \is_array($this->activeTargets)) {
                $n = 0;
                foreach ($this->activeTargets as $item) {
                    $res['ActiveTargets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->droppedTargets) {
            $res['DroppedTargets'] = [];
            if (null !== $this->droppedTargets && \is_array($this->droppedTargets)) {
                $n = 0;
                foreach ($this->droppedTargets as $item) {
                    $res['DroppedTargets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveTargets'])) {
            if (!empty($map['ActiveTargets'])) {
                $model->activeTargets = [];
                $n                    = 0;
                foreach ($map['ActiveTargets'] as $item) {
                    $model->activeTargets[$n++] = null !== $item ? activeTargets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DroppedTargets'])) {
            if (!empty($map['DroppedTargets'])) {
                $model->droppedTargets = [];
                $n                     = 0;
                foreach ($map['DroppedTargets'] as $item) {
                    $model->droppedTargets[$n++] = null !== $item ? droppedTargets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
