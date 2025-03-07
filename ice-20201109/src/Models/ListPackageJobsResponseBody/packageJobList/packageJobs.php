<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponseBody\packageJobList;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponseBody\packageJobList\packageJobs\inputs;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponseBody\packageJobList\packageJobs\output;
use AlibabaCloud\Tea\Model;

class packageJobs extends Model
{
    /**
     * @description The error code returned if the job fails.
     *
     * @example InvalidParameter
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the job was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-07-07T14:00:32Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the job was complete. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-07-07T15:00:32Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The input of the job.
     *
     * @var inputs[]
     */
    public $inputs;

    /**
     * @description The job ID.
     *
     * @example 7b38a5d86f1e47838927b6e7ccb11cbe
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The error message that is returned.
     *
     * @example Resource content bad.
     *
     * @var string
     */
    public $message;

    /**
     * @description The time when the job was last modified. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-07-07T15:00:32Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The name of the job.
     *
     * @example job-name
     *
     * @var string
     */
    public $name;

    /**
     * @description The output of the job.
     *
     * @var output
     */
    public $output;

    /**
     * @description The ID of the ApsaraVideo Media Processing (MPS) queue that is used to run the job.
     *
     * @example 5b40833e4c3e4d4e95a866abb9a42510
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The priority of the job. Valid values: 1 to 10. The greater the value, the higher the priority. Default value: 6.
     *
     * @example 6
     *
     * @var int
     */
    public $priority;

    /**
     * @description The state of the job.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the job was submitted. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-07-07T14:00:32Z
     *
     * @var string
     */
    public $submitTime;

    /**
     * @description The source of the job. Valid values:
     *
     *   API
     *   WorkFlow
     *   Console
     *
     * @example API
     *
     * @var string
     */
    public $triggerSource;

    /**
     * @description The user-defined data.
     *
     * @example {"param": "value"}
     *
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
        'pipelineId'    => 'PipelineId',
        'priority'      => 'Priority',
        'status'        => 'Status',
        'submitTime'    => 'SubmitTime',
        'triggerSource' => 'TriggerSource',
        'userData'      => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Inputs'] = [];
            if (null !== $this->inputs && \is_array($this->inputs)) {
                $n = 0;
                foreach ($this->inputs as $item) {
                    $res['Inputs'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return packageJobs
     */
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
                $n             = 0;
                foreach ($map['Inputs'] as $item) {
                    $model->inputs[$n++] = null !== $item ? inputs::fromMap($item) : $item;
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
