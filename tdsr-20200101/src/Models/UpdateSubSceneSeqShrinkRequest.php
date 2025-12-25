<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Dara\Model;

class UpdateSubSceneSeqShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sortSubSceneIdsShrink;
    protected $_name = [
        'sceneId' => 'SceneId',
        'sortSubSceneIdsShrink' => 'SortSubSceneIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->sortSubSceneIdsShrink) {
            $res['SortSubSceneIds'] = $this->sortSubSceneIdsShrink;
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
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['SortSubSceneIds'])) {
            $model->sortSubSceneIdsShrink = $map['SortSubSceneIds'];
        }

        return $model;
    }
}
