<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\inputGroup;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\outFileMeta;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\output;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\scheduleConfig;

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
        if (\is_array($this->inputGroup)) {
            Model::validateArray($this->inputGroup);
        }
        if (null !== $this->outFileMeta) {
            $this->outFileMeta->validate();
        }
        if (null !== $this->output) {
            $this->output->validate();
        }
        if (null !== $this->processConfig) {
            $this->processConfig->validate();
        }
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
        }
        if (\is_array($this->submitResultJson)) {
            Model::validateArray($this->submitResultJson);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->inputGroup) {
            if (\is_array($this->inputGroup)) {
                $res['InputGroup'] = [];
                $n1                = 0;
                foreach ($this->inputGroup as $item1) {
                    $res['InputGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['OutFileMeta'] = null !== $this->outFileMeta ? $this->outFileMeta->toArray($noStream) : $this->outFileMeta;
        }

        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
        }

        if (null !== $this->parentJobId) {
            $res['ParentJobId'] = $this->parentJobId;
        }

        if (null !== $this->processConfig) {
            $res['ProcessConfig'] = null !== $this->processConfig ? $this->processConfig->toArray($noStream) : $this->processConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toArray($noStream) : $this->scheduleConfig;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->submitResultJson) {
            if (\is_array($this->submitResultJson)) {
                $res['SubmitResultJson'] = [];
                foreach ($this->submitResultJson as $key1 => $value1) {
                    $res['SubmitResultJson'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['InputGroup'])) {
            if (!empty($map['InputGroup'])) {
                $model->inputGroup = [];
                $n1                = 0;
                foreach ($map['InputGroup'] as $item1) {
                    $model->inputGroup[$n1++] = inputGroup::fromMap($item1);
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
            if (!empty($map['SubmitResultJson'])) {
                $model->submitResultJson = [];
                foreach ($map['SubmitResultJson'] as $key1 => $value1) {
                    $model->submitResultJson[$key1] = $value1;
                }
            }
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
