<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DsgSceneQuerySceneListByNameRequest extends Model
{
    /**
     * @example dev_
     *
     * @var string
     */
    public $sceneName;
    protected $_name = [
        'sceneName' => 'SceneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgSceneQuerySceneListByNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        return $model;
    }
}
