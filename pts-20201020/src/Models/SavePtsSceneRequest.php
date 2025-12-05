<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene;

class SavePtsSceneRequest extends Model
{
    /**
     * @var scene
     */
    public $scene;
    protected $_name = [
        'scene' => 'Scene',
    ];

    public function validate()
    {
        if (null !== $this->scene) {
            $this->scene->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scene) {
            $res['Scene'] = null !== $this->scene ? $this->scene->toArray($noStream) : $this->scene;
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
            $model->scene = scene::fromMap($map['Scene']);
        }

        return $model;
    }
}
