<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescirbeWorkflowResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $inputDataSize;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $jobNamespace;

    /**
     * @var string
     */
    public $outputDataSize;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $totalBases;

    /**
     * @var string
     */
    public $totalReads;

    /**
     * @var string
     */
    public $userInputData;
    protected $_name = [
        'createTime'     => 'create_time',
        'duration'       => 'duration',
        'finishTime'     => 'finish_time',
        'inputDataSize'  => 'input_data_size',
        'jobName'        => 'job_name',
        'jobNamespace'   => 'job_namespace',
        'outputDataSize' => 'output_data_size',
        'status'         => 'status',
        'totalBases'     => 'total_bases',
        'totalReads'     => 'total_reads',
        'userInputData'  => 'user_input_data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->finishTime) {
            $res['finish_time'] = $this->finishTime;
        }
        if (null !== $this->inputDataSize) {
            $res['input_data_size'] = $this->inputDataSize;
        }
        if (null !== $this->jobName) {
            $res['job_name'] = $this->jobName;
        }
        if (null !== $this->jobNamespace) {
            $res['job_namespace'] = $this->jobNamespace;
        }
        if (null !== $this->outputDataSize) {
            $res['output_data_size'] = $this->outputDataSize;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->totalBases) {
            $res['total_bases'] = $this->totalBases;
        }
        if (null !== $this->totalReads) {
            $res['total_reads'] = $this->totalReads;
        }
        if (null !== $this->userInputData) {
            $res['user_input_data'] = $this->userInputData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescirbeWorkflowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['create_time'])) {
            $model->createTime = $map['create_time'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['finish_time'])) {
            $model->finishTime = $map['finish_time'];
        }
        if (isset($map['input_data_size'])) {
            $model->inputDataSize = $map['input_data_size'];
        }
        if (isset($map['job_name'])) {
            $model->jobName = $map['job_name'];
        }
        if (isset($map['job_namespace'])) {
            $model->jobNamespace = $map['job_namespace'];
        }
        if (isset($map['output_data_size'])) {
            $model->outputDataSize = $map['output_data_size'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['total_bases'])) {
            $model->totalBases = $map['total_bases'];
        }
        if (isset($map['total_reads'])) {
            $model->totalReads = $map['total_reads'];
        }
        if (isset($map['user_input_data'])) {
            $model->userInputData = $map['user_input_data'];
        }

        return $model;
    }
}
