<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\advanceSetting;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\fileParameterList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\globalParameterList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\loadConfig;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList;
use AlibabaCloud\Tea\Model;

class scene extends Model
{
    /**
     * @var advanceSetting
     */
    public $advanceSetting;

    /**
     * @var string
     */
    public $createTime;

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
     * @var string
     */
    public $modifiedTime;

    /**
     * @var relationList[]
     */
    public $relationList;

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
    public $status;
    protected $_name = [
        'advanceSetting'      => 'AdvanceSetting',
        'createTime'          => 'CreateTime',
        'fileParameterList'   => 'FileParameterList',
        'globalParameterList' => 'GlobalParameterList',
        'loadConfig'          => 'LoadConfig',
        'modifiedTime'        => 'ModifiedTime',
        'relationList'        => 'RelationList',
        'sceneId'             => 'SceneId',
        'sceneName'           => 'SceneName',
        'status'              => 'Status',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
