<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DsgSceneQuerySceneListByNameRequest extends Model
{
    /**
     * @var string
     */
    public $sceneName;
    protected $_name = [
        'sceneName' => 'SceneName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
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
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        return $model;
    }
}
