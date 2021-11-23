<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSceneRunningDataResponseBody;

use AlibabaCloud\Tea\Model;

class runningData extends Model
{
    /**
     * @description 压测引擎数量
     *
     * @var int
     */
    public $agentCount;

    /**
     * @description 压测引擎列表
     *
     * @var string[]
     */
    public $agentIdList;

    /**
     * @description 场景整体的采样状态
     *
     * @var mixed[]
     */
    public $allSampleStat;

    /**
     * @description 并发量
     *
     * @var int
     */
    public $concurrency;

    /**
     * @description 是否生成了报告
     *
     * @var bool
     */
    public $hasReport;

    /**
     * @description 是否是调试
     *
     * @var bool
     */
    public $isDebugging;

    /**
     * @description 每一个采样器的状态
     *
     * @var mixed[][]
     */
    public $sampleStatList;

    /**
     * @description 场景id
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description 场景名称
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description 当前所处阶段
     *
     * @var string
     */
    public $stageName;

    /**
     * @description 状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 目前消耗的vum
     *
     * @var int
     */
    public $vum;
    protected $_name = [
        'agentCount'     => 'AgentCount',
        'agentIdList'    => 'AgentIdList',
        'allSampleStat'  => 'AllSampleStat',
        'concurrency'    => 'Concurrency',
        'hasReport'      => 'HasReport',
        'isDebugging'    => 'IsDebugging',
        'sampleStatList' => 'SampleStatList',
        'sceneId'        => 'SceneId',
        'sceneName'      => 'SceneName',
        'stageName'      => 'StageName',
        'status'         => 'Status',
        'vum'            => 'Vum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentCount) {
            $res['AgentCount'] = $this->agentCount;
        }
        if (null !== $this->agentIdList) {
            $res['AgentIdList'] = $this->agentIdList;
        }
        if (null !== $this->allSampleStat) {
            $res['AllSampleStat'] = $this->allSampleStat;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->hasReport) {
            $res['HasReport'] = $this->hasReport;
        }
        if (null !== $this->isDebugging) {
            $res['IsDebugging'] = $this->isDebugging;
        }
        if (null !== $this->sampleStatList) {
            $res['SampleStatList'] = $this->sampleStatList;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vum) {
            $res['Vum'] = $this->vum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runningData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentCount'])) {
            $model->agentCount = $map['AgentCount'];
        }
        if (isset($map['AgentIdList'])) {
            if (!empty($map['AgentIdList'])) {
                $model->agentIdList = $map['AgentIdList'];
            }
        }
        if (isset($map['AllSampleStat'])) {
            $model->allSampleStat = $map['AllSampleStat'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['HasReport'])) {
            $model->hasReport = $map['HasReport'];
        }
        if (isset($map['IsDebugging'])) {
            $model->isDebugging = $map['IsDebugging'];
        }
        if (isset($map['SampleStatList'])) {
            if (!empty($map['SampleStatList'])) {
                $model->sampleStatList = $map['SampleStatList'];
            }
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Vum'])) {
            $model->vum = $map['Vum'];
        }

        return $model;
    }
}
