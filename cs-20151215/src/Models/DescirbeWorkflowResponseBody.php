<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescirbeWorkflowResponseBody extends Model
{
    /**
     * @description The time when the workflow was created.
     *
     * @example 2020-01-15 16:30:25 +0800 CST
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The duration of the workflow.
     *
     * @example 1h15m33.529968361s
     *
     * @var string
     */
    public $duration;

    /**
     * @description The end time of the task.
     *
     * @example 0001-01-01 00:00:00 +0000 UTC
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The size of the input data.
     *
     * @example 0
     *
     * @var string
     */
    public $inputDataSize;

    /**
     * @description The name of the workflow.
     *
     * @example wgs-gpu-97xfn
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The namespace to which the workflow belongs.
     *
     * @example 1171330362041663
     *
     * @var string
     */
    public $jobNamespace;

    /**
     * @description The size of the output data.
     *
     * @example 0
     *
     * @var string
     */
    public $outputDataSize;

    /**
     * @description The current state of the workflow.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The number of base pairs.
     *
     * @example 0
     *
     * @var string
     */
    public $totalBases;

    /**
     * @description The number of reads.
     *
     * @example 0
     *
     * @var string
     */
    public $totalReads;

    /**
     * @description The user input parameters.
     *
     * @example {\\"wgs_oss_region\\":\\"cn-shenzhen\\",\\"wgs_fastq_first_name\\":\\"fastq/huada/MGISEQ-200019SZ0002402\\",\\"wgs_fastq_second_name\\":\\"fastq/huada/MGISEQ-200019SZ0002402\\",\\"wgs_bucket_name\\":\\"gene-shenzhen\\",\\"wgs_vcf_file_name\\":\\"output/vcf/huada.vcf\\",\\"wgs_bam_file_name\\":\\"output/bam/huada.bam\\",\\"wgs_reference_file\\":\\"hg19\\",\\"wgs_service\\":\\"g\\"}
     *
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
