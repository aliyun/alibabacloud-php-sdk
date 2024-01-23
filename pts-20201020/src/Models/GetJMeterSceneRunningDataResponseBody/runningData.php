<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSceneRunningDataResponseBody;

use AlibabaCloud\Tea\Model;

class runningData extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $agentCount;

    /**
     * @var string[]
     */
    public $agentIdList;

    /**
     * @example { "failTps":0,"successRtAvg":33,"successRtMin":29,"successRtSum":99407,         "rtAvg":33.459104678559406,"rtMin":29,"failRtMax":0,"duration":997,         "samplerId":-1, "successRtMax":133,"fullStat":{       "requestBytesSum":629926,"successRtAvg":33,"successRtMin":29,"successRtSum":174551,"count":5206,"rtSeg99":53, "successTps":2397.9732842008293,"rtSeg90":36, "rtSeg50":32,            "rtSeg99Sum":53,"rtAvg":33.528812908182864, "rtMin":29,             "failRtMax":0,"duration":2171, "successCount":5206,            "rtSegStatCount":1,"tps":2397.9732842008293 }, "successCount":2971, "failRtSum":0,"failCount":0,"count":2971,"concurrency":100, "successTps":2979.939819458375,"tps":2979.939819458375,"failRtAvg":0,         "failRtMin":0,  "rtMax":133}
     *
     * @var mixed[]
     */
    public $allSampleStat;

    /**
     * @example 1000
     *
     * @var int
     */
    public $concurrency;

    /**
     * @example 引擎租用失败
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasError;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasReport;

    /**
     * @example 600
     *
     * @var int
     */
    public $holdFor;

    /**
     * @example false
     *
     * @var bool
     */
    public $isDebugging;

    /**
     * @example DYYPLDKS
     *
     * @var string
     */
    public $reportId;

    /**
     * @var mixed[][]
     */
    public $sampleStatList;

    /**
     * @example DYYPZIH
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

    /**
     * @example 任务执行
     *
     * @var string
     */
    public $stageName;

    /**
     * @example 1639970040000
     *
     * @var int
     */
    public $startTimeTS;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example 100
     *
     * @var int
     */
    public $vum;
    protected $_name = [
        'agentCount'     => 'AgentCount',
        'agentIdList'    => 'AgentIdList',
        'allSampleStat'  => 'AllSampleStat',
        'concurrency'    => 'Concurrency',
        'errorMessage'   => 'ErrorMessage',
        'hasError'       => 'HasError',
        'hasReport'      => 'HasReport',
        'holdFor'        => 'HoldFor',
        'isDebugging'    => 'IsDebugging',
        'reportId'       => 'ReportId',
        'sampleStatList' => 'SampleStatList',
        'sceneId'        => 'SceneId',
        'sceneName'      => 'SceneName',
        'stageName'      => 'StageName',
        'startTimeTS'    => 'StartTimeTS',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->hasError) {
            $res['HasError'] = $this->hasError;
        }
        if (null !== $this->hasReport) {
            $res['HasReport'] = $this->hasReport;
        }
        if (null !== $this->holdFor) {
            $res['HoldFor'] = $this->holdFor;
        }
        if (null !== $this->isDebugging) {
            $res['IsDebugging'] = $this->isDebugging;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
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
        if (null !== $this->startTimeTS) {
            $res['StartTimeTS'] = $this->startTimeTS;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['HasError'])) {
            $model->hasError = $map['HasError'];
        }
        if (isset($map['HasReport'])) {
            $model->hasReport = $map['HasReport'];
        }
        if (isset($map['HoldFor'])) {
            $model->holdFor = $map['HoldFor'];
        }
        if (isset($map['IsDebugging'])) {
            $model->isDebugging = $map['IsDebugging'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
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
        if (isset($map['StartTimeTS'])) {
            $model->startTimeTS = $map['StartTimeTS'];
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
