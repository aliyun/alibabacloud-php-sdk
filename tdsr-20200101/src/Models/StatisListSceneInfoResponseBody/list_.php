<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\StatisListSceneInfoResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 0：默认类型(增加type字段时默认值) 1：3D模型 2：全景图片3：全景视频
     *
     * @var int
     */
    public $sceneType;

    /**
     * @description 发布时间到秒
     *
     * @var string
     */
    public $publishTime;

    /**
     * @description 主场景名称
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description 资源数量
     *
     * @var int
     */
    public $resCount;

    /**
     * @description 项目名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description 计费量
     *
     * @var int
     */
    public $measureCount;

    /**
     * @description statustinyin是否已发布 0:未发布 1：已发布
     *
     * @var int
     */
    public $publishStatus;

    /**
     * @description 主场景创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 主场景id
     *
     * @var int
     */
    public $sceneId;

    /**
     * @description 项目Id
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'sceneType'     => 'SceneType',
        'publishTime'   => 'PublishTime',
        'sceneName'     => 'SceneName',
        'resCount'      => 'ResCount',
        'projectName'   => 'ProjectName',
        'measureCount'  => 'MeasureCount',
        'publishStatus' => 'PublishStatus',
        'createTime'    => 'CreateTime',
        'sceneId'       => 'SceneId',
        'projectId'     => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->resCount) {
            $res['ResCount'] = $this->resCount;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->measureCount) {
            $res['MeasureCount'] = $this->measureCount;
        }
        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['ResCount'])) {
            $model->resCount = $map['ResCount'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['MeasureCount'])) {
            $model->measureCount = $map['MeasureCount'];
        }
        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
