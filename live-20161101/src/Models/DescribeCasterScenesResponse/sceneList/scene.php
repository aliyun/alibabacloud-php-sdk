<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponse\sceneList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponse\sceneList\scene\componentIds;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponse\sceneList\scene\streamInfos;
use AlibabaCloud\Tea\Model;

class scene extends Model
{
    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var string
     */
    public $streamUrl;

    /**
     * @var int
     */
    public $status;

    /**
     * @var streamInfos
     */
    public $streamInfos;

    /**
     * @var componentIds
     */
    public $componentIds;
    protected $_name = [
        'sceneId'      => 'SceneId',
        'sceneName'    => 'SceneName',
        'outputType'   => 'OutputType',
        'layoutId'     => 'LayoutId',
        'streamUrl'    => 'StreamUrl',
        'status'       => 'Status',
        'streamInfos'  => 'StreamInfos',
        'componentIds' => 'ComponentIds',
    ];

    public function validate()
    {
        Model::validateRequired('sceneId', $this->sceneId, true);
        Model::validateRequired('sceneName', $this->sceneName, true);
        Model::validateRequired('outputType', $this->outputType, true);
        Model::validateRequired('layoutId', $this->layoutId, true);
        Model::validateRequired('streamUrl', $this->streamUrl, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('streamInfos', $this->streamInfos, true);
        Model::validateRequired('componentIds', $this->componentIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->streamInfos) {
            $res['StreamInfos'] = null !== $this->streamInfos ? $this->streamInfos->toMap() : null;
        }
        if (null !== $this->componentIds) {
            $res['ComponentIds'] = null !== $this->componentIds ? $this->componentIds->toMap() : null;
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
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StreamInfos'])) {
            $model->streamInfos = streamInfos::fromMap($map['StreamInfos']);
        }
        if (isset($map['ComponentIds'])) {
            $model->componentIds = componentIds::fromMap($map['ComponentIds']);
        }

        return $model;
    }
}
