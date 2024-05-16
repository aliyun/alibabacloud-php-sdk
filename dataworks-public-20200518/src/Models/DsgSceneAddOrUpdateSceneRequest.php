<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgSceneAddOrUpdateSceneRequest\scenes;
use AlibabaCloud\Tea\Model;

class DsgSceneAddOrUpdateSceneRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var scenes[]
     */
    public $scenes;
    protected $_name = [
        'scenes' => 'scenes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scenes) {
            $res['scenes'] = [];
            if (null !== $this->scenes && \is_array($this->scenes)) {
                $n = 0;
                foreach ($this->scenes as $item) {
                    $res['scenes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgSceneAddOrUpdateSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scenes'])) {
            if (!empty($map['scenes'])) {
                $model->scenes = [];
                $n             = 0;
                foreach ($map['scenes'] as $item) {
                    $model->scenes[$n++] = null !== $item ? scenes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
