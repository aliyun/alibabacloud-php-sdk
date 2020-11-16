<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponse\pgmSceneInfos;

use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponse\pgmSceneInfos\sceneInfo\streamInfos;
use AlibabaCloud\Tea\Model;

class sceneInfo extends Model
{
    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $streamUrl;

    /**
     * @var streamInfos
     */
    public $streamInfos;
    protected $_name = [
        'sceneId'     => 'SceneId',
        'streamUrl'   => 'StreamUrl',
        'streamInfos' => 'StreamInfos',
    ];

    public function validate()
    {
        Model::validateRequired('sceneId', $this->sceneId, true);
        Model::validateRequired('streamUrl', $this->streamUrl, true);
        Model::validateRequired('streamInfos', $this->streamInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }
        if (null !== $this->streamInfos) {
            $res['StreamInfos'] = null !== $this->streamInfos ? $this->streamInfos->toMap() : null;
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
        if (isset($map['StreamInfos'])) {
            $model->streamInfos = streamInfos::fromMap($map['StreamInfos']);
        }

        return $model;
    }
}
