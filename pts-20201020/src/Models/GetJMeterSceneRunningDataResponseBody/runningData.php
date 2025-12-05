<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSceneRunningDataResponseBody;

use AlibabaCloud\Dara\Model;

class runningData extends Model
{
    /**
     * @var int
     */
    public $agentCount;

    /**
     * @var string[]
     */
    public $agentIdList;

    /**
     * @var mixed[]
     */
    public $allSampleStat;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $hasError;

    /**
     * @var bool
     */
    public $hasReport;

    /**
     * @var int
     */
    public $holdFor;

    /**
     * @var bool
     */
    public $isDebugging;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var mixed[][]
     */
    public $sampleStatList;

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
    public $stageName;

    /**
     * @var int
     */
    public $startTimeTS;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $vum;
    protected $_name = [
        'agentCount' => 'AgentCount',
        'agentIdList' => 'AgentIdList',
        'allSampleStat' => 'AllSampleStat',
        'concurrency' => 'Concurrency',
        'errorMessage' => 'ErrorMessage',
        'hasError' => 'HasError',
        'hasReport' => 'HasReport',
        'holdFor' => 'HoldFor',
        'isDebugging' => 'IsDebugging',
        'reportId' => 'ReportId',
        'sampleStatList' => 'SampleStatList',
        'sceneId' => 'SceneId',
        'sceneName' => 'SceneName',
        'stageName' => 'StageName',
        'startTimeTS' => 'StartTimeTS',
        'status' => 'Status',
        'vum' => 'Vum',
    ];

    public function validate()
    {
        if (\is_array($this->agentIdList)) {
            Model::validateArray($this->agentIdList);
        }
        if (\is_array($this->allSampleStat)) {
            Model::validateArray($this->allSampleStat);
        }
        if (\is_array($this->sampleStatList)) {
            Model::validateArray($this->sampleStatList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCount) {
            $res['AgentCount'] = $this->agentCount;
        }

        if (null !== $this->agentIdList) {
            if (\is_array($this->agentIdList)) {
                $res['AgentIdList'] = [];
                $n1 = 0;
                foreach ($this->agentIdList as $item1) {
                    $res['AgentIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->allSampleStat) {
            if (\is_array($this->allSampleStat)) {
                $res['AllSampleStat'] = [];
                foreach ($this->allSampleStat as $key1 => $value1) {
                    $res['AllSampleStat'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->sampleStatList)) {
                $res['SampleStatList'] = [];
                $n1 = 0;
                foreach ($this->sampleStatList as $item1) {
                    if (\is_array($item1)) {
                        $res['SampleStatList'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['SampleStatList'][$n1][$key2] = $value2;
                        }
                    }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentCount'])) {
            $model->agentCount = $map['AgentCount'];
        }

        if (isset($map['AgentIdList'])) {
            if (!empty($map['AgentIdList'])) {
                $model->agentIdList = [];
                $n1 = 0;
                foreach ($map['AgentIdList'] as $item1) {
                    $model->agentIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AllSampleStat'])) {
            if (!empty($map['AllSampleStat'])) {
                $model->allSampleStat = [];
                foreach ($map['AllSampleStat'] as $key1 => $value1) {
                    $model->allSampleStat[$key1] = $value1;
                }
            }
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
                $model->sampleStatList = [];
                $n1 = 0;
                foreach ($map['SampleStatList'] as $item1) {
                    if (!empty($item1)) {
                        $model->sampleStatList[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->sampleStatList[$n1][$key2] = $value2;
                        }
                    }
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
