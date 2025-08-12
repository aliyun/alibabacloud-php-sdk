<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody\pgmSceneInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody\pgmSceneInfos\sceneInfo\streamInfos;

class sceneInfo extends Model
{
    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var streamInfos
     */
    public $streamInfos;

    /**
     * @var string
     */
    public $streamUrl;
    protected $_name = [
        'sceneId' => 'SceneId',
        'streamInfos' => 'StreamInfos',
        'streamUrl' => 'StreamUrl',
    ];

    public function validate()
    {
        if (null !== $this->streamInfos) {
            $this->streamInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->streamInfos) {
            $res['StreamInfos'] = null !== $this->streamInfos ? $this->streamInfos->toArray($noStream) : $this->streamInfos;
        }

        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
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

        if (isset($map['StreamInfos'])) {
            $model->streamInfos = streamInfos::fromMap($map['StreamInfos']);
        }

        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }

        return $model;
    }
}
