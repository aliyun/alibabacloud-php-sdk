<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponse\sceneList\scene;
use AlibabaCloud\Tea\Model;

class sceneList extends Model
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
        Model::validateRequired('scene', $this->scene, true);
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
     * @return sceneList
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
