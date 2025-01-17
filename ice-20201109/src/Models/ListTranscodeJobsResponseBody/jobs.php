<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\inputGroup;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\scheduleConfig;

class jobs extends Model
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
     * @var int
     */
    public $jobCount;
    /**
     * @var string
     */
    public $name;
    /**
     * @var outputGroup[]
     */
    public $outputGroup;
    /**
     * @var string
     */
    public $parentJobId;
    /**
     * @var int
     */
    public $percent;
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
     * @var string
     */
    public $submitTime;
    /**
     * @var string
     */
    public $triggerSource;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'finishTime'     => 'FinishTime',
        'inputGroup'     => 'InputGroup',
        'jobCount'       => 'JobCount',
        'name'           => 'Name',
        'outputGroup'    => 'OutputGroup',
        'parentJobId'    => 'ParentJobId',
        'percent'        => 'Percent',
        'requestId'      => 'RequestId',
        'scheduleConfig' => 'ScheduleConfig',
        'status'         => 'Status',
        'submitTime'     => 'SubmitTime',
        'triggerSource'  => 'TriggerSource',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
        if (\is_array($this->inputGroup)) {
            Model::validateArray($this->inputGroup);
        }
        if (\is_array($this->outputGroup)) {
            Model::validateArray($this->outputGroup);
        }
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
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

        if (null !== $this->jobCount) {
            $res['JobCount'] = $this->jobCount;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputGroup) {
            if (\is_array($this->outputGroup)) {
                $res['OutputGroup'] = [];
                $n1                 = 0;
                foreach ($this->outputGroup as $item1) {
                    $res['OutputGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->parentJobId) {
            $res['ParentJobId'] = $this->parentJobId;
        }

        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
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

        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }

        if (null !== $this->triggerSource) {
            $res['TriggerSource'] = $this->triggerSource;
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

        if (isset($map['JobCount'])) {
            $model->jobCount = $map['JobCount'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OutputGroup'])) {
            if (!empty($map['OutputGroup'])) {
                $model->outputGroup = [];
                $n1                 = 0;
                foreach ($map['OutputGroup'] as $item1) {
                    $model->outputGroup[$n1++] = outputGroup::fromMap($item1);
                }
            }
        }

        if (isset($map['ParentJobId'])) {
            $model->parentJobId = $map['ParentJobId'];
        }

        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
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

        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        if (isset($map['TriggerSource'])) {
            $model->triggerSource = $map['TriggerSource'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
