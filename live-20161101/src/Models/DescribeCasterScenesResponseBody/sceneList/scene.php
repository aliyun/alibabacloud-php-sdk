<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody\sceneList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody\sceneList\scene\componentIds;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody\sceneList\scene\streamInfos;

class scene extends Model
{
    /**
     * @var componentIds
     */
    public $componentIds;

    /**
     * @var string
     */
    public $layoutId;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var streamInfos
     */
    public $streamInfos;

    /**
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

    public function validate()
    {
        if (null !== $this->componentIds) {
            $this->componentIds->validate();
        }
        if (null !== $this->streamInfos) {
            $this->streamInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentIds) {
            $res['ComponentIds'] = null !== $this->componentIds ? $this->componentIds->toArray($noStream) : $this->componentIds;
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
