<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\TargetImage\animations;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetImage\snapshots;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetImage\sprites;
use AlibabaCloud\Tea\Model;

class TargetImage extends Model
{
    /**
     * @var animations[]
     */
    public $animations;

    /**
     * @var snapshots[]
     */
    public $snapshots;

    /**
     * @var sprites[]
     */
    public $sprites;
    protected $_name = [
        'animations' => 'Animations',
        'snapshots'  => 'Snapshots',
        'sprites'    => 'Sprites',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->animations) {
            $res['Animations'] = [];
            if (null !== $this->animations && \is_array($this->animations)) {
                $n = 0;
                foreach ($this->animations as $item) {
                    $res['Animations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = [];
            if (null !== $this->snapshots && \is_array($this->snapshots)) {
                $n = 0;
                foreach ($this->snapshots as $item) {
                    $res['Snapshots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sprites) {
            $res['Sprites'] = [];
            if (null !== $this->sprites && \is_array($this->sprites)) {
                $n = 0;
                foreach ($this->sprites as $item) {
                    $res['Sprites'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TargetImage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Animations'])) {
            if (!empty($map['Animations'])) {
                $model->animations = [];
                $n                 = 0;
                foreach ($map['Animations'] as $item) {
                    $model->animations[$n++] = null !== $item ? animations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Snapshots'])) {
            if (!empty($map['Snapshots'])) {
                $model->snapshots = [];
                $n                = 0;
                foreach ($map['Snapshots'] as $item) {
                    $model->snapshots[$n++] = null !== $item ? snapshots::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Sprites'])) {
            if (!empty($map['Sprites'])) {
                $model->sprites = [];
                $n              = 0;
                foreach ($map['Sprites'] as $item) {
                    $model->sprites[$n++] = null !== $item ? sprites::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
