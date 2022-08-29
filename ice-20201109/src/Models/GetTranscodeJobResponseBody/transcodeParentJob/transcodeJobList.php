<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\inputGroup;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\outFileMeta;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\output;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\scheduleConfig;
use AlibabaCloud\Tea\Model;

class transcodeJobList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var inputGroup[]
     */
    public $inputGroup;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $jobIndex;

    /**
     * @var string
     */
    public $name;

    /**
     * @var outFileMeta
     */
    public $outFileMeta;

    /**
     * @var output
     */
    public $output;

    /**
     * @var string
     */
    public $parentJobId;

    /**
     * @var processConfig
     */
    public $processConfig;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @var string
     */
    public $status;

    /**
     * @var mixed[]
     */
    public $submitResultJson;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'createTime'       => 'CreateTime',
        'finishTime'       => 'FinishTime',
        'inputGroup'       => 'InputGroup',
        'jobId'            => 'JobId',
        'jobIndex'         => 'JobIndex',
        'name'             => 'Name',
        'outFileMeta'      => 'OutFileMeta',
        'output'           => 'Output',
        'parentJobId'      => 'ParentJobId',
        'processConfig'    => 'ProcessConfig',
        'requestId'        => 'RequestId',
        'scheduleConfig'   => 'ScheduleConfig',
        'status'           => 'Status',
        'submitResultJson' => 'SubmitResultJson',
        'submitTime'       => 'SubmitTime',
        'userData'         => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->inputGroup) {
            $res['InputGroup'] = [];
            if (null !== $this->inputGroup && \is_array($this->inputGroup)) {
                $n = 0;
                foreach ($this->inputGroup as $item) {
                    $res['InputGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobIndex) {
            $res['JobIndex'] = $this->jobIndex;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outFileMeta) {
            $res['OutFileMeta'] = null !== $this->outFileMeta ? $this->outFileMeta->toMap() : null;
        }
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->parentJobId) {
            $res['ParentJobId'] = $this->parentJobId;
        }
        if (null !== $this->processConfig) {
            $res['ProcessConfig'] = null !== $this->processConfig ? $this->processConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitResultJson) {
            $res['SubmitResultJson'] = $this->submitResultJson;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InputGroup'])) {
            if (!empty($map['InputGroup'])) {
                $model->inputGroup = [];
                $n                 = 0;
                foreach ($map['InputGroup'] as $item) {
                    $model->inputGroup[$n++] = null !== $item ? inputGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobIndex'])) {
            $model->jobIndex = $map['JobIndex'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutFileMeta'])) {
            $model->outFileMeta = outFileMeta::fromMap($map['OutFileMeta']);
        }
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['ParentJobId'])) {
            $model->parentJobId = $map['ParentJobId'];
        }
        if (isset($map['ProcessConfig'])) {
            $model->processConfig = processConfig::fromMap($map['ProcessConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitResultJson'])) {
            $model->submitResultJson = $map['SubmitResultJson'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
