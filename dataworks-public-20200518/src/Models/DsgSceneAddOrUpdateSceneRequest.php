<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneAddOrUpdateSceneRequest\scenes;

class DsgSceneAddOrUpdateSceneRequest extends Model
{
    /**
     * @var scenes[]
     */
    public $scenes;
    protected $_name = [
        'scenes' => 'scenes',
    ];

    public function validate()
    {
        if (\is_array($this->scenes)) {
            Model::validateArray($this->scenes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scenes) {
            if (\is_array($this->scenes)) {
                $res['scenes'] = [];
                $n1            = 0;
                foreach ($this->scenes as $item1) {
                    $res['scenes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['scenes'])) {
            if (!empty($map['scenes'])) {
                $model->scenes = [];
                $n1            = 0;
                foreach ($map['scenes'] as $item1) {
                    $model->scenes[$n1++] = scenes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
