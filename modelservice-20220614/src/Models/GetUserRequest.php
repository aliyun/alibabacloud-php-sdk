<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614\Models;

use AlibabaCloud\Dara\Model;

class GetUserRequest extends Model
{
    /**
     * @var string
     */
    public $sceneType;
    protected $_name = [
        'sceneType' => 'scene_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneType) {
            $res['scene_type'] = $this->sceneType;
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
        if (isset($map['scene_type'])) {
            $model->sceneType = $map['scene_type'];
        }

        return $model;
    }
}
