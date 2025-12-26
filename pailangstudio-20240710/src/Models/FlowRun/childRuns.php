<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun\childRuns\flowSource;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun\childRuns\jobInfo;

class childRuns extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $flowRunId;

    /**
     * @var flowSource
     */
    public $flowSource;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $gmtStartTime;

    /**
     * @var jobInfo
     */
    public $jobInfo;

    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $runName;

    /**
     * @var string
     */
    public $runResult;

    /**
     * @var string
     */
    public $runStatus;
    protected $_name = [
        'duration' => 'Duration',
        'flowRunId' => 'FlowRunId',
        'flowSource' => 'FlowSource',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtFinishTime' => 'GmtFinishTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'gmtStartTime' => 'GmtStartTime',
        'jobInfo' => 'JobInfo',
        'runMode' => 'RunMode',
        'runName' => 'RunName',
        'runResult' => 'RunResult',
        'runStatus' => 'RunStatus',
    ];

    public function validate()
    {
        if (null !== $this->flowSource) {
            $this->flowSource->validate();
        }
        if (null !== $this->jobInfo) {
            $this->jobInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->flowRunId) {
            $res['FlowRunId'] = $this->flowRunId;
        }

        if (null !== $this->flowSource) {
            $res['FlowSource'] = null !== $this->flowSource ? $this->flowSource->toArray($noStream) : $this->flowSource;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtFinishTime) {
            $res['GmtFinishTime'] = $this->gmtFinishTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->gmtStartTime) {
            $res['GmtStartTime'] = $this->gmtStartTime;
        }

        if (null !== $this->jobInfo) {
            $res['JobInfo'] = null !== $this->jobInfo ? $this->jobInfo->toArray($noStream) : $this->jobInfo;
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        if (null !== $this->runName) {
            $res['RunName'] = $this->runName;
        }

        if (null !== $this->runResult) {
            $res['RunResult'] = $this->runResult;
        }

        if (null !== $this->runStatus) {
            $res['RunStatus'] = $this->runStatus;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['FlowRunId'])) {
            $model->flowRunId = $map['FlowRunId'];
        }

        if (isset($map['FlowSource'])) {
            $model->flowSource = flowSource::fromMap($map['FlowSource']);
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtFinishTime'])) {
            $model->gmtFinishTime = $map['GmtFinishTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['GmtStartTime'])) {
            $model->gmtStartTime = $map['GmtStartTime'];
        }

        if (isset($map['JobInfo'])) {
            $model->jobInfo = jobInfo::fromMap($map['JobInfo']);
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        if (isset($map['RunName'])) {
            $model->runName = $map['RunName'];
        }

        if (isset($map['RunResult'])) {
            $model->runResult = $map['RunResult'];
        }

        if (isset($map['RunStatus'])) {
            $model->runStatus = $map['RunStatus'];
        }

        return $model;
    }
}
