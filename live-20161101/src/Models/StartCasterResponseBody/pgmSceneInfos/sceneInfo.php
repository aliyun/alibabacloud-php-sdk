<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody\pgmSceneInfos;

use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody\pgmSceneInfos\sceneInfo\streamInfos;
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
     * @description The stream relay URLs.
     *
     * @var streamInfos
     */
    public $streamInfos;

    /**
     * @description The streaming URL of the PGM scene in the production studio. The value is not a stream relay URL.
     *
     * @example rtmp://abclive/caster/example.edu
     *
     * @var string
     */
    public $streamUrl;
    protected $_name = [
        'sceneId' => 'SceneId',
        'streamInfos' => 'StreamInfos',
        'streamUrl' => 'StreamUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->streamInfos) {
            $res['StreamInfos'] = null !== $this->streamInfos ? $this->streamInfos->toMap() : null;
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
        if (isset($map['StreamInfos'])) {
            $model->streamInfos = streamInfos::fromMap($map['StreamInfos']);
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }

        return $model;
    }
}
