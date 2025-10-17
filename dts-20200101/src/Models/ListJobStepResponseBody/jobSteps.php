<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ListJobStepResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListJobStepResponseBody\jobSteps\errorDetails;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListJobStepResponseBody\jobSteps\subJobSteps;

class jobSteps extends Model
{
    /**
     * @var string
     */
    public $bootTime;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var int
     */
    public $incLatencyMilliseconds;

    /**
     * @var int
     */
    public $incLatencySeconds;

    /**
     * @var string
     */
    public $jobStepId;

    /**
     * @var string
     */
    public $jobStepName;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var bool
     */
    public $needAcceleration;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $serial;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $subJobCount;

    /**
     * @var subJobSteps[]
     */
    public $subJobSteps;

    /**
     * @var string
     */
    public $redisPhaseType;
    protected $_name = [
        'bootTime' => 'BootTime',
        'code' => 'Code',
        'createTime' => 'CreateTime',
        'errMsg' => 'ErrMsg',
        'errorDetails' => 'ErrorDetails',
        'finishTime' => 'FinishTime',
        'incLatencyMilliseconds' => 'IncLatencyMilliseconds',
        'incLatencySeconds' => 'IncLatencySeconds',
        'jobStepId' => 'JobStepId',
        'jobStepName' => 'JobStepName',
        'modifyTime' => 'ModifyTime',
        'needAcceleration' => 'NeedAcceleration',
        'progress' => 'Progress',
        'serial' => 'Serial',
        'state' => 'State',
        'subJobCount' => 'SubJobCount',
        'subJobSteps' => 'SubJobSteps',
        'redisPhaseType' => 'redisPhaseType',
    ];

    public function validate()
    {
        if (\is_array($this->errorDetails)) {
            Model::validateArray($this->errorDetails);
        }
        if (\is_array($this->subJobSteps)) {
            Model::validateArray($this->subJobSteps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bootTime) {
            $res['BootTime'] = $this->bootTime;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }

        if (null !== $this->errorDetails) {
            if (\is_array($this->errorDetails)) {
                $res['ErrorDetails'] = [];
                $n1 = 0;
                foreach ($this->errorDetails as $item1) {
                    $res['ErrorDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->incLatencyMilliseconds) {
            $res['IncLatencyMilliseconds'] = $this->incLatencyMilliseconds;
        }

        if (null !== $this->incLatencySeconds) {
            $res['IncLatencySeconds'] = $this->incLatencySeconds;
        }

        if (null !== $this->jobStepId) {
            $res['JobStepId'] = $this->jobStepId;
        }

        if (null !== $this->jobStepName) {
            $res['JobStepName'] = $this->jobStepName;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->needAcceleration) {
            $res['NeedAcceleration'] = $this->needAcceleration;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->serial) {
            $res['Serial'] = $this->serial;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->subJobCount) {
            $res['SubJobCount'] = $this->subJobCount;
        }

        if (null !== $this->subJobSteps) {
            if (\is_array($this->subJobSteps)) {
                $res['SubJobSteps'] = [];
                $n1 = 0;
                foreach ($this->subJobSteps as $item1) {
                    $res['SubJobSteps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->redisPhaseType) {
            $res['redisPhaseType'] = $this->redisPhaseType;
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
        if (isset($map['BootTime'])) {
            $model->bootTime = $map['BootTime'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }

        if (isset($map['ErrorDetails'])) {
            if (!empty($map['ErrorDetails'])) {
                $model->errorDetails = [];
                $n1 = 0;
                foreach ($map['ErrorDetails'] as $item1) {
                    $model->errorDetails[$n1] = errorDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['IncLatencyMilliseconds'])) {
            $model->incLatencyMilliseconds = $map['IncLatencyMilliseconds'];
        }

        if (isset($map['IncLatencySeconds'])) {
            $model->incLatencySeconds = $map['IncLatencySeconds'];
        }

        if (isset($map['JobStepId'])) {
            $model->jobStepId = $map['JobStepId'];
        }

        if (isset($map['JobStepName'])) {
            $model->jobStepName = $map['JobStepName'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['NeedAcceleration'])) {
            $model->needAcceleration = $map['NeedAcceleration'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['Serial'])) {
            $model->serial = $map['Serial'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['SubJobCount'])) {
            $model->subJobCount = $map['SubJobCount'];
        }

        if (isset($map['SubJobSteps'])) {
            if (!empty($map['SubJobSteps'])) {
                $model->subJobSteps = [];
                $n1 = 0;
                foreach ($map['SubJobSteps'] as $item1) {
                    $model->subJobSteps[$n1] = subJobSteps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['redisPhaseType'])) {
            $model->redisPhaseType = $map['redisPhaseType'];
        }

        return $model;
    }
}
