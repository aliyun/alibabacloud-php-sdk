<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsResponseBody\result;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsResponseBody\result\sceneList\componentCategory;
use AlibabaCloud\Tea\Model;

class sceneList extends Model
{
    /**
     * @description 组件信息
     *
     * @var componentCategory[]
     */
    public $componentCategory;

    /**
     * @description 场景类别
     *
     * @var string
     */
    public $scene;
    protected $_name = [
        'componentCategory' => 'ComponentCategory',
        'scene'             => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentCategory) {
            $res['ComponentCategory'] = [];
            if (null !== $this->componentCategory && \is_array($this->componentCategory)) {
                $n = 0;
                foreach ($this->componentCategory as $item) {
                    $res['ComponentCategory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
        if (isset($map['ComponentCategory'])) {
            if (!empty($map['ComponentCategory'])) {
                $model->componentCategory = [];
                $n                        = 0;
                foreach ($map['ComponentCategory'] as $item) {
                    $model->componentCategory[$n++] = null !== $item ? componentCategory::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
