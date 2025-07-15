<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody\pvwSceneInfos;

use AlibabaCloud\Tea\Model;

class sceneInfo extends Model
{
    /**
     * @description The ID of the scene.
     *
     * @example b5f8c837-ceeb-424f-b30b-68e94e86****
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description The streaming URL of the PVW scene in the production studio. The value is not a stream relay URL.
     *
     * @example rtmp://abclive/caster/example.net
     *
     * @var string
     */
    public $streamUrl;
    protected $_name = [
        'sceneId' => 'SceneId',
        'streamUrl' => 'StreamUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sceneInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }

        return $model;
    }
}
