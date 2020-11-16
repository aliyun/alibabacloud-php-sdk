<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponse\pvwSceneInfos;

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
    protected $_name = [
        'sceneId'   => 'SceneId',
        'streamUrl' => 'StreamUrl',
    ];

    public function validate()
    {
        Model::validateRequired('sceneId', $this->sceneId, true);
        Model::validateRequired('streamUrl', $this->streamUrl, true);
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
