<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class UpdateSubSceneSeqRequest extends Model
{
    /**
     * @description 子场景ID
     *
     * @var string
     */
    public $sceneId;

    /**
     * @var string[]
     */
    public $sortSubSceneIds;
    protected $_name = [
        'sceneId'         => 'SceneId',
        'sortSubSceneIds' => 'SortSubSceneIds',
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
        if (null !== $this->sortSubSceneIds) {
            $res['SortSubSceneIds'] = $this->sortSubSceneIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSubSceneSeqRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SortSubSceneIds'])) {
            if (!empty($map['SortSubSceneIds'])) {
                $model->sortSubSceneIds = $map['SortSubSceneIds'];
            }
        }

        return $model;
    }
}
