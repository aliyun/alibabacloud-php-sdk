<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\UpdateCasterSceneAudioRequest\audioLayer;
use AlibabaCloud\Tea\Model;

class UpdateCasterSceneAudioRequest extends Model
{
    /**
     * @description The audio configurations.
     *
     * @var audioLayer[]
     */
    public $audioLayer;

    /**
     * @description The ID of the production studio.
     *
     *   If the production studio was created by calling the [CreateCaster](https://help.aliyun.com/document_detail/2848009.html) operation, check the value of the response parameter CasterId to obtain the ID.
     *   If the production studio was created by using the ApsaraVideo Live console, obtain the ID on the **Production Studio Management** page. To go to the page, log on to the **ApsaraVideo Live console** and click **Production Studios** in the left-side navigation pane.
     *
     * >  You can find the ID of the production studio in the Instance ID/Name column.
     *
     * This parameter is required.
     *
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The audio mode. By default, the AFV mode is used. If you do not specify this parameter, the scene retains the last configuration. Valid values:
     *
     *   **0**: the audio mixing mode.
     *   **1**: the AFV mode.
     *
     * @example 1
     *
     * @var int
     */
    public $followEnable;

    /**
     * @description The location IDs of the audio layers, which are in the same order as the audio layers.
     *
     * @example RV01
     *
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
     * @description The ID of the scene. If you call the [DescribeCasterScenes](https://help.aliyun.com/document_detail/2848039.html) operation to query scenes of the production studio, check the value of the response parameter ComponentId to obtain the ID.
     *
     * This parameter is required.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e1****
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioLayer) {
            $res['AudioLayer'] = [];
            if (null !== $this->audioLayer && \is_array($this->audioLayer)) {
                $n = 0;
                foreach ($this->audioLayer as $item) {
                    $res['AudioLayer'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['MixList'] = $this->mixList;
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

    /**
     * @param array $map
     *
     * @return UpdateCasterSceneAudioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioLayer'])) {
            if (!empty($map['AudioLayer'])) {
                $model->audioLayer = [];
                $n = 0;
                foreach ($map['AudioLayer'] as $item) {
                    $model->audioLayer[$n++] = null !== $item ? audioLayer::fromMap($item) : $item;
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
                $model->mixList = $map['MixList'];
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
