<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\image\snapshots;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\image\sprites;
use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @var snapshots[]
     */
    public $snapshots;

    /**
     * @var sprites[]
     */
    public $sprites;
    protected $_name = [
        'snapshots' => 'Snapshots',
        'sprites'   => 'Sprites',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
