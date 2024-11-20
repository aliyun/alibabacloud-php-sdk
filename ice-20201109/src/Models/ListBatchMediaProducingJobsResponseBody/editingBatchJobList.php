<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListBatchMediaProducingJobsResponseBody;

use AlibabaCloud\Tea\Model;

class editingBatchJobList extends Model
{
    /**
     * @description The time when the job was complete. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2023-06-09T06:38:09Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the job was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-06-09T06:36:48Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The editing configurations. For more information, see [EditingConfig](~~2692547#1be9bba03b7qu~~).
     *
     * @example {
     * }
     * @var string
     */
    public $editingConfig;

    /**
     * @description The extended information of the job.
     *
     * @example {}
     *
     * @var string
     */
    public $extend;

    /**
     * @description The input configurations.
     *
     * @var string
     */
    public $inputConfig;

    /**
     * @description The ID of the quick video production job.
     *
     * @example ******7ecbee4c6d9b8474498e******
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The job type.
     *
     * Valid values:
     *
     *   Script: script-based editing job that mixes media assets.
     *   Smart_Mix: intelligent editing job that mixes media assets.
     *
     * @example Script
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The time when the job was last modified.
     *
     * @example 2023-06-09T06:37:58Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The output configurations. For more information, see [OutputConfig](~~2692547#447b928fcbuoa~~).
     *
     * @example {
     * }
     * @var string
     */
    public $outputConfig;

    /**
     * @description The job state.
     *
     * Valid values:
     *
     *   Finished
     *   Init
     *   Failed
     *   Processing
     *
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @description The user-defined data in the JSON format, which can be up to 512 bytes in length. You can specify a custom callback URL. For more information, see [Configure a callback upon editing completion](https://help.aliyun.com/zh/ims/use-cases/to-configure-a-callback-when-a-clip-completes).
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'completeTime'  => 'CompleteTime',
        'createTime'    => 'CreateTime',
        'editingConfig' => 'EditingConfig',
        'extend'        => 'Extend',
        'inputConfig'   => 'InputConfig',
        'jobId'         => 'JobId',
        'jobType'       => 'JobType',
        'modifiedTime'  => 'ModifiedTime',
        'outputConfig'  => 'OutputConfig',
        'status'        => 'Status',
        'userData'      => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return editingBatchJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
