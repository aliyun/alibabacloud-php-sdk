<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListBatchMediaProducingJobsResponseBody;

use AlibabaCloud\Tea\Model;

class editingBatchJobList extends Model
{
    /**
     * @example 2023-06-09T06:38:09Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @example 2023-06-09T06:36:48Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example {
     * }
     * @var string
     */
    public $editingConfig;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $inputConfig;

    /**
     * @example ******7ecbee4c6d9b8474498e******
     *
     * @var string
     */
    public $jobId;

    /**
     * @example Script
     *
     * @var string
     */
    public $jobType;

    /**
     * @example 2023-06-09T06:37:58Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example {
     * }
     * @var string
     */
    public $outputConfig;

    /**
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
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
