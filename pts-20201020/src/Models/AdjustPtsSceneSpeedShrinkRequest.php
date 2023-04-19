<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class AdjustPtsSceneSpeedShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiSpeedListShrink;

    /**
     * @example DYXXX12H
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'apiSpeedListShrink' => 'ApiSpeedList',
        'sceneId'            => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiSpeedListShrink) {
            $res['ApiSpeedList'] = $this->apiSpeedListShrink;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdjustPtsSceneSpeedShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiSpeedList'])) {
            $model->apiSpeedListShrink = $map['ApiSpeedList'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
