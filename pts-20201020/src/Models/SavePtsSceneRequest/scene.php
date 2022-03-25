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
     * @description 高级设置
     *
     * @var advanceSetting
     */
    public $advanceSetting;

    /**
     * @description 文件参数
     *
     * @var fileParameterList[]
     */
    public $fileParameterList;

    /**
     * @description 全局自定义参数
     *
     * @var globalParameterList[]
     */
    public $globalParameterList;

    /**
     * @description 施压配置
     *
     * @var loadConfig
     */
    public $loadConfig;

    /**
     * @description 链路配置
     *
     * @var relationList[]
     */
    public $relationList;

    /**
     * @description 场景ID，不传为新建，传递为修改
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description 场景名
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
