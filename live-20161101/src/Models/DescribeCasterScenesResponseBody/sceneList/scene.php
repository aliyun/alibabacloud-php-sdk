<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody\sceneList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody\sceneList\scene\componentIds;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody\sceneList\scene\streamInfos;
use AlibabaCloud\Tea\Model;

class scene extends Model
{
    /**
     * @description The components.
     *
     * @var componentIds
     */
    public $componentIds;

    /**
     * @description The ID of the layout.
     *
     * @example 37cb2f8b-f152-4338-b928-6704f71d****
     *
     * @var string
     */
    public $layoutId;

    /**
     * @description Indicates whether the output video is in PVW mode or PGM mode. Valid values:
     *
     *   **0**: in PVW mode.
     *   **1**: in PGM mode.
     *
     * @example 0
     *
     * @var string
     */
    public $outputType;

    /**
     * @description The ID of the scene. You can use the ID as a request parameter in the API operation that is used to modify the audio configurations of the scene, query the audio configurations of the scene, start the scene, or stop the scene.
     *
     * @example b5f8c837-ceeb-424f-b30b-68e94e86****
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description The name of the scene.
     *
     * @example scene1
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description The status of the scene. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The information about the stream.
     *
     * @var streamInfos
     */
    public $streamInfos;

    /**
     * @description The URL of the output stream.
     *
     * @example rtmp://developer.aliyundoc.com/caster/4a82a3d1b7f0462ea37348366201****?auth_key=1608953344-0-0-ac8c628078541d7055a170ec59a5****
     *
     * @var string
     */
    public $streamUrl;
    protected $_name = [
        'componentIds' => 'ComponentIds',
        'layoutId' => 'LayoutId',
        'outputType' => 'OutputType',
        'sceneId' => 'SceneId',
        'sceneName' => 'SceneName',
        'status' => 'Status',
        'streamInfos' => 'StreamInfos',
        'streamUrl' => 'StreamUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentIds) {
            $res['ComponentIds'] = null !== $this->componentIds ? $this->componentIds->toMap() : null;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return scene
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentIds'])) {
            $model->componentIds = componentIds::fromMap($map['ComponentIds']);
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
