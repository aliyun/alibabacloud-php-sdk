<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\advanceSetting;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\fileParameterList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\globalParameterList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\loadConfig;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\relationList;

class sceneSnapShot extends Model
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
        'advanceSetting' => 'AdvanceSetting',
        'createTime' => 'CreateTime',
        'fileParameterList' => 'FileParameterList',
        'globalParameterList' => 'GlobalParameterList',
        'loadConfig' => 'LoadConfig',
        'modifiedTime' => 'ModifiedTime',
        'relationList' => 'RelationList',
        'sceneId' => 'SceneId',
        'sceneName' => 'SceneName',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->advanceSetting) {
            $this->advanceSetting->validate();
        }
        if (\is_array($this->fileParameterList)) {
            Model::validateArray($this->fileParameterList);
        }
        if (\is_array($this->globalParameterList)) {
            Model::validateArray($this->globalParameterList);
        }
        if (null !== $this->loadConfig) {
            $this->loadConfig->validate();
        }
        if (\is_array($this->relationList)) {
            Model::validateArray($this->relationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advanceSetting) {
            $res['AdvanceSetting'] = null !== $this->advanceSetting ? $this->advanceSetting->toArray($noStream) : $this->advanceSetting;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->fileParameterList) {
            if (\is_array($this->fileParameterList)) {
                $res['FileParameterList'] = [];
                $n1 = 0;
                foreach ($this->fileParameterList as $item1) {
                    $res['FileParameterList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->globalParameterList) {
            if (\is_array($this->globalParameterList)) {
                $res['GlobalParameterList'] = [];
                $n1 = 0;
                foreach ($this->globalParameterList as $item1) {
                    $res['GlobalParameterList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->loadConfig) {
            $res['LoadConfig'] = null !== $this->loadConfig ? $this->loadConfig->toArray($noStream) : $this->loadConfig;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->relationList) {
            if (\is_array($this->relationList)) {
                $res['RelationList'] = [];
                $n1 = 0;
                foreach ($this->relationList as $item1) {
                    $res['RelationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['FileParameterList'] as $item1) {
                    $model->fileParameterList[$n1] = fileParameterList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GlobalParameterList'])) {
            if (!empty($map['GlobalParameterList'])) {
                $model->globalParameterList = [];
                $n1 = 0;
                foreach ($map['GlobalParameterList'] as $item1) {
                    $model->globalParameterList[$n1] = globalParameterList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['RelationList'] as $item1) {
                    $model->relationList[$n1] = relationList::fromMap($item1);
                    ++$n1;
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
