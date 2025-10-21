<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class GetModelInstanceInfoRequest extends Model
{
    /**
     * @var int
     */
    public $modelInstanceId;

    /**
     * @var int
     */
    public $sceneType;
    protected $_name = [
        'modelInstanceId' => 'ModelInstanceId',
        'sceneType' => 'SceneType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelInstanceId) {
            $res['ModelInstanceId'] = $this->modelInstanceId;
        }

        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
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
        if (isset($map['ModelInstanceId'])) {
            $model->modelInstanceId = $map['ModelInstanceId'];
        }

        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }

        return $model;
    }
}
