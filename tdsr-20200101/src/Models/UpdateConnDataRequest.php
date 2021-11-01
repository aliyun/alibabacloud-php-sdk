<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class UpdateConnDataRequest extends Model
{
    /**
     * @description 关联数据
     *
     * @var string
     */
    public $connData;

    /**
     * @description 场景ID
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'connData' => 'ConnData',
        'sceneId'  => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connData) {
            $res['ConnData'] = $this->connData;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConnDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnData'])) {
            $model->connData = $map['ConnData'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
