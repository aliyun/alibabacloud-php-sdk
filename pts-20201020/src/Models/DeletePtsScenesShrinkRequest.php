<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;

class DeletePtsScenesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $sceneIdsShrink;
    protected $_name = [
        'sceneIdsShrink' => 'SceneIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneIdsShrink) {
            $res['SceneIds'] = $this->sceneIdsShrink;
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
        if (isset($map['SceneIds'])) {
            $model->sceneIdsShrink = $map['SceneIds'];
        }

        return $model;
    }
}
