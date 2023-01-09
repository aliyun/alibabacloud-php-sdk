<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest;

use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\advanceSetting;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\fileParameterList;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\globalParameterList;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\relationList;
use AlibabaCloud\Tea\Model;

class scene extends Model
{
    /**
     * @var advanceSetting
     */
    public $advanceSetting;

    /**
     * @var fileParameterList[]
     */
    public $fileParameterList;

    /**
     * @var globalParameterList[]
     */
    public $globalParameterList;

    /**
     * @var loadConfig
     */
    public $loadConfig;

    /**
     * @var relationList[]
     */
    public $relationList;

    /**
     * @example IUYAHGJ
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example test
     *
     * @var string
     */
    public $sceneName;
    protected $_name = [
        'advanceSetting'      => 'AdvanceSetting',
        'fileParameterList'   => 'FileParameterList',
        'globalParameterList' => 'GlobalParameterList',
        'loadConfig'          => 'LoadConfig',
        'relationList'        => 'RelationList',
        'sceneId'             => 'SceneId',
        'sceneName'           => 'SceneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advanceSetting) {
            $res['AdvanceSetting'] = null !== $this->advanceSetting ? $this->advanceSetting->toMap() : null;
        }
        if (null !== $this->fileParameterList) {
            $res['FileParameterList'] = [];
            if (null !== $this->fileParameterList && \is_array($this->fileParameterList)) {
                $n = 0;
                foreach ($this->fileParameterList as $item) {
                    $res['FileParameterList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->globalParameterList) {
            $res['GlobalParameterList'] = [];
            if (null !== $this->globalParameterList && \is_array($this->globalParameterList)) {
                $n = 0;
                foreach ($this->globalParameterList as $item) {
                    $res['GlobalParameterList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->loadConfig) {
            $res['LoadConfig'] = null !== $this->loadConfig ? $this->loadConfig->toMap() : null;
        }
        if (null !== $this->relationList) {
            $res['RelationList'] = [];
            if (null !== $this->relationList && \is_array($this->relationList)) {
                $n = 0;
                foreach ($this->relationList as $item) {
                    $res['RelationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
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
        if (isset($map['AdvanceSetting'])) {
            $model->advanceSetting = advanceSetting::fromMap($map['AdvanceSetting']);
        }
        if (isset($map['FileParameterList'])) {
            if (!empty($map['FileParameterList'])) {
                $model->fileParameterList = [];
                $n                        = 0;
                foreach ($map['FileParameterList'] as $item) {
                    $model->fileParameterList[$n++] = null !== $item ? fileParameterList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GlobalParameterList'])) {
            if (!empty($map['GlobalParameterList'])) {
                $model->globalParameterList = [];
                $n                          = 0;
                foreach ($map['GlobalParameterList'] as $item) {
                    $model->globalParameterList[$n++] = null !== $item ? globalParameterList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LoadConfig'])) {
            $model->loadConfig = loadConfig::fromMap($map['LoadConfig']);
        }
        if (isset($map['RelationList'])) {
            if (!empty($map['RelationList'])) {
                $model->relationList = [];
                $n                   = 0;
                foreach ($map['RelationList'] as $item) {
                    $model->relationList[$n++] = null !== $item ? relationList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        return $model;
    }
}
