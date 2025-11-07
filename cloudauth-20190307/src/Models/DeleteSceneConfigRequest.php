<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class DeleteSceneConfigRequest extends Model
{
    /**
     * @var int
     */
    public $sceneConfigId;
    protected $_name = [
        'sceneConfigId' => 'sceneConfigId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneConfigId) {
            $res['sceneConfigId'] = $this->sceneConfigId;
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
        if (isset($map['sceneConfigId'])) {
            $model->sceneConfigId = $map['sceneConfigId'];
        }

        return $model;
    }
}
