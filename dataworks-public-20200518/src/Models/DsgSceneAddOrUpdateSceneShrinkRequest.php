<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DsgSceneAddOrUpdateSceneShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $scenesShrink;
    protected $_name = [
        'scenesShrink' => 'scenes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scenesShrink) {
            $res['scenes'] = $this->scenesShrink;
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
            $model->scenesShrink = $map['scenes'];
        }

        return $model;
    }
}
