<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

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
        'sceneId'               => 'SceneId',
        'sortSubSceneIdsShrink' => 'SortSubSceneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateSubSceneSeqShrinkRequest
     */
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
