<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneAudioRequest\audioLayer;

class UpdateCasterSceneAudioRequest extends Model
{
    /**
     * @var audioLayer[]
     */
    public $audioLayer;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var int
     */
    public $followEnable;

    /**
     * @var string[]
     */
    public $mixList;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'audioLayer' => 'AudioLayer',
        'casterId' => 'CasterId',
        'followEnable' => 'FollowEnable',
        'mixList' => 'MixList',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'sceneId' => 'SceneId',
    ];

    public function validate()
    {
        if (\is_array($this->audioLayer)) {
            Model::validateArray($this->audioLayer);
        }
        if (\is_array($this->mixList)) {
            Model::validateArray($this->mixList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioLayer) {
            if (\is_array($this->audioLayer)) {
                $res['AudioLayer'] = [];
                $n1 = 0;
                foreach ($this->audioLayer as $item1) {
                    $res['AudioLayer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        if (null !== $this->followEnable) {
            $res['FollowEnable'] = $this->followEnable;
        }

        if (null !== $this->mixList) {
            if (\is_array($this->mixList)) {
                $res['MixList'] = [];
                $n1 = 0;
                foreach ($this->mixList as $item1) {
                    $res['MixList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
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
        if (isset($map['AudioLayer'])) {
            if (!empty($map['AudioLayer'])) {
                $model->audioLayer = [];
                $n1 = 0;
                foreach ($map['AudioLayer'] as $item1) {
                    $model->audioLayer[$n1] = audioLayer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        if (isset($map['FollowEnable'])) {
            $model->followEnable = $map['FollowEnable'];
        }

        if (isset($map['MixList'])) {
            if (!empty($map['MixList'])) {
                $model->mixList = [];
                $n1 = 0;
                foreach ($map['MixList'] as $item1) {
                    $model->mixList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
