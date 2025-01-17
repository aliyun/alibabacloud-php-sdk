<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetPackageJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPackageJobResponseBody\packageJob\inputs;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPackageJobResponseBody\packageJob\output;

class packageJob extends Model
{
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
    public $finishTime;
    /**
     * @var inputs[]
     */
    public $inputs;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var string
     */
    public $name;
    /**
     * @var output
     */
    public $output;
    /**
     * @var string
     */
    public $outputUrl;
    /**
     * @var string
     */
    public $pipelineId;
    /**
     * @var int
     */
    public $priority;
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
        'code'          => 'Code',
        'createTime'    => 'CreateTime',
        'finishTime'    => 'FinishTime',
        'inputs'        => 'Inputs',
        'jobId'         => 'JobId',
        'message'       => 'Message',
        'modifiedTime'  => 'ModifiedTime',
        'name'          => 'Name',
        'output'        => 'Output',
        'outputUrl'     => 'OutputUrl',
        'pipelineId'    => 'PipelineId',
        'priority'      => 'Priority',
        'status'        => 'Status',
        'submitTime'    => 'SubmitTime',
        'triggerSource' => 'TriggerSource',
        'userData'      => 'UserData',
    ];

    public function validate()
    {
        if (\is_array($this->inputs)) {
            Model::validateArray($this->inputs);
        }
        if (null !== $this->output) {
            $this->output->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->inputs) {
            if (\is_array($this->inputs)) {
                $res['Inputs'] = [];
                $n1            = 0;
                foreach ($this->inputs as $item1) {
                    $res['Inputs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
        }

        if (null !== $this->outputUrl) {
            $res['OutputUrl'] = $this->outputUrl;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['Inputs'])) {
            if (!empty($map['Inputs'])) {
                $model->inputs = [];
                $n1            = 0;
                foreach ($map['Inputs'] as $item1) {
                    $model->inputs[$n1++] = inputs::fromMap($item1);
                }
            }
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }

        if (isset($map['OutputUrl'])) {
            $model->outputUrl = $map['OutputUrl'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
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
