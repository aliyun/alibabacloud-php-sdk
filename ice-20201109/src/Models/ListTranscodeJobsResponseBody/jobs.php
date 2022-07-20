<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\inputGroup;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\scheduleConfig;
use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @description 任务创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 任务结束时间
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description 任务输入组 (目前只支持单个输入)
     *
     * @var inputGroup[]
     */
    public $inputGroup;

    /**
     * @description 子任务数量
     *
     * @var int
     */
    public $jobCount;

    /**
     * @description 任务名
     *
     * @var string
     */
    public $name;

    /**
     * @description 任务输出组
     *
     * @var outputGroup[]
     */
    public $outputGroup;

    /**
     * @description 主任务 id
     *
     * @var string
     */
    public $parentJobId;

    /**
     * @description 任务完成百分比
     *
     * @var int
     */
    public $percent;

    /**
     * @description 提交任务时请求 id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 任务调度配置
     *
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @description 任务状态 Success: 有子任务成功, Fail: 所有子任务失败
     *
     * @var string
     */
    public $status;

    /**
     * @description 任务提交时间
     *
     * @var string
     */
    public $submitTime;

    /**
     * @description 任务来源 - API, WorkFlow, Console
     *
     * @var string
     */
    public $triggerSource;

    /**
     * @description 用户数据
     *
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
        if (null !== $this->jobCount) {
            $res['JobCount'] = $this->jobCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputGroup) {
            $res['OutputGroup'] = [];
            if (null !== $this->outputGroup && \is_array($this->outputGroup)) {
                $n = 0;
                foreach ($this->outputGroup as $item) {
                    $res['OutputGroup'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return jobs
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
        if (isset($map['JobCount'])) {
            $model->jobCount = $map['JobCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutputGroup'])) {
            if (!empty($map['OutputGroup'])) {
                $model->outputGroup = [];
                $n                  = 0;
                foreach ($map['OutputGroup'] as $item) {
                    $model->outputGroup[$n++] = null !== $item ? outputGroup::fromMap($item) : $item;
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
