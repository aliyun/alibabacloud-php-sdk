<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobResponseBody\editingBatchJob\subJobList;
use AlibabaCloud\Tea\Model;

class editingBatchJob extends Model
{
    /**
     * @description The time when the job was complete.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2024-06-13T08:57:07Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the job was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-06-13T08:47:07Z
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
     * @description The extended information. This parameter contains the following fields:
     *
     * ErrorMessage: the error message of the main job.
     * @example {
     * "ErrorCode": "InvalidMaterial.NotFound",
     * "ErrorMessage": "The specified clips id not found:[\\"****30d0b5e871eebb2ff7f6c75a****\\"]"
     * }
     * @var string
     */
    public $extend;

    /**
     * @description The input configurations. For more information, see [InputConfig](~~2692547#2faed1559549n~~).
     *
     * @var string
     */
    public $inputConfig;

    /**
     * @description The job ID.
     *
     * @example ****b6b2750d4308892ac3330238****
     *
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @description The time when the job was last modified.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2024-06-13T08:57:07Z
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
     * @description The job state. Valid values:
     *
     * Finished: The job is complete.
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @description The quick video production subjobs.
     *
     * @var subJobList[]
     */
    public $subJobList;

    /**
     * @description The user-defined data, including the business and callback configurations. For more information, see [UserData](https://help.aliyun.com/document_detail/357745.html).
     *
     * @example {"NotifyAddress":"http://xx.xx.xxx"}
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
        'subJobList'    => 'SubJobList',
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
        if (null !== $this->subJobList) {
            $res['SubJobList'] = [];
            if (null !== $this->subJobList && \is_array($this->subJobList)) {
                $n = 0;
                foreach ($this->subJobList as $item) {
                    $res['SubJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return editingBatchJob
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
        if (isset($map['SubJobList'])) {
            if (!empty($map['SubJobList'])) {
                $model->subJobList = [];
                $n                 = 0;
                foreach ($map['SubJobList'] as $item) {
                    $model->subJobList[$n++] = null !== $item ? subJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
