<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList\material;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->sprite)) {
            Model::validateArray($this->sprite);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sprite) {
            if (\is_array($this->sprite)) {
                $res['Sprite'] = [];
                $n1 = 0;
                foreach ($this->sprite as $item1) {
                    $res['Sprite'][$n1++] = $item1;
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
        if (isset($map['Sprite'])) {
            if (!empty($map['Sprite'])) {
                $model->sprite = [];
                $n1 = 0;
                foreach ($map['Sprite'] as $item1) {
                    $model->sprite[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
