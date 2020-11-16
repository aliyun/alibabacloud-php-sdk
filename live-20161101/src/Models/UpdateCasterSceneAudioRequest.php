<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneAudioRequest\audioLayer;
use AlibabaCloud\Tea\Model;

class UpdateCasterSceneAudioRequest extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var int
     */
    public $followEnable;

    /**
     * @var audioLayer[]
     */
    public $audioLayer;

    /**
     * @var string[]
     */
    public $mixList;
    protected $_name = [
        'casterId'     => 'CasterId',
        'sceneId'      => 'SceneId',
        'followEnable' => 'FollowEnable',
        'audioLayer'   => 'AudioLayer',
        'mixList'      => 'MixList',
    ];

    public function validate()
    {
        Model::validateRequired('casterId', $this->casterId, true);
        Model::validateRequired('sceneId', $this->sceneId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->followEnable) {
            $res['FollowEnable'] = $this->followEnable;
        }
        if (null !== $this->audioLayer) {
            $res['AudioLayer'] = [];
            if (null !== $this->audioLayer && \is_array($this->audioLayer)) {
                $n = 0;
                foreach ($this->audioLayer as $item) {
                    $res['AudioLayer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mixList) {
            $res['MixList'] = $this->mixList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCasterSceneAudioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['FollowEnable'])) {
            $model->followEnable = $map['FollowEnable'];
        }
        if (isset($map['AudioLayer'])) {
            if (!empty($map['AudioLayer'])) {
                $model->audioLayer = [];
                $n                 = 0;
                foreach ($map['AudioLayer'] as $item) {
                    $model->audioLayer[$n++] = null !== $item ? audioLayer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MixList'])) {
            if (!empty($map['MixList'])) {
                $model->mixList = $map['MixList'];
            }
        }

        return $model;
    }
}
