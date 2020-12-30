<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList\material;

use AlibabaCloud\Tea\Model;

class sprites extends Model
{
    /**
     * @var string[]
     */
    public $sprite;
    protected $_name = [
        'sprite' => 'Sprite',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sprite) {
            $res['Sprite'] = $this->sprite;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sprites
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sprite'])) {
            if (!empty($map['Sprite'])) {
                $model->sprite = $map['Sprite'];
            }
        }

        return $model;
    }
}
