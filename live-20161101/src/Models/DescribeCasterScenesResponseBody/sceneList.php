<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody\sceneList\scene;

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
        if (\is_array($this->scene)) {
            Model::validateArray($this->scene);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scene) {
            if (\is_array($this->scene)) {
                $res['Scene'] = [];
                $n1 = 0;
                foreach ($this->scene as $item1) {
                    $res['Scene'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Scene'])) {
            if (!empty($map['Scene'])) {
                $model->scene = [];
                $n1 = 0;
                foreach ($map['Scene'] as $item1) {
                    $model->scene[$n1] = scene::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
