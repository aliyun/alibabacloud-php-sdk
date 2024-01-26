<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20181111\Models\ListRunnableScenesResponseBody;

use AlibabaCloud\SDK\PTS\V20181111\Models\ListRunnableScenesResponseBody\scenes\scene;
use AlibabaCloud\Tea\Model;

class scenes extends Model
{
    /**
     * @var scene[]
     */
    public $scene;
    protected $_name = [
        'scene' => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scene) {
            $res['Scene'] = [];
            if (null !== $this->scene && \is_array($this->scene)) {
                $n = 0;
                foreach ($this->scene as $item) {
                    $res['Scene'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Scene'])) {
            if (!empty($map['Scene'])) {
                $model->scene = [];
                $n            = 0;
                foreach ($map['Scene'] as $item) {
                    $model->scene[$n++] = null !== $item ? scene::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
