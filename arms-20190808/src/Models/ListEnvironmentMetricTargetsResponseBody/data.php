<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentMetricTargetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentMetricTargetsResponseBody\data\activeTargets;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentMetricTargetsResponseBody\data\droppedTargets;

class data extends Model
{
    /**
     * @var activeTargets[]
     */
    public $activeTargets;
    /**
     * @var droppedTargets[]
     */
    public $droppedTargets;
    protected $_name = [
        'activeTargets'  => 'ActiveTargets',
        'droppedTargets' => 'DroppedTargets',
    ];

    public function validate()
    {
        if (\is_array($this->activeTargets)) {
            Model::validateArray($this->activeTargets);
        }
        if (\is_array($this->droppedTargets)) {
            Model::validateArray($this->droppedTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeTargets) {
            if (\is_array($this->activeTargets)) {
                $res['ActiveTargets'] = [];
                $n1                   = 0;
                foreach ($this->activeTargets as $item1) {
                    $res['ActiveTargets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->droppedTargets) {
            if (\is_array($this->droppedTargets)) {
                $res['DroppedTargets'] = [];
                $n1                    = 0;
                foreach ($this->droppedTargets as $item1) {
                    $res['DroppedTargets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ActiveTargets'])) {
            if (!empty($map['ActiveTargets'])) {
                $model->activeTargets = [];
                $n1                   = 0;
                foreach ($map['ActiveTargets'] as $item1) {
                    $model->activeTargets[$n1++] = activeTargets::fromMap($item1);
                }
            }
        }

        if (isset($map['DroppedTargets'])) {
            if (!empty($map['DroppedTargets'])) {
                $model->droppedTargets = [];
                $n1                    = 0;
                foreach ($map['DroppedTargets'] as $item1) {
                    $model->droppedTargets[$n1++] = droppedTargets::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
