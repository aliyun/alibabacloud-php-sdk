<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeMetricsByInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class instanceComputeMetrics extends Model
{
    /**
     * @description The end time of the job execution.
     *
     * @example 1710432000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The job(instance) ID.
     *
     * @example 20240730****ddlr
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The owner of the job.
     *
     * @example ALIYUN$7632***@aliyun.com
     *
     * @var string
     */
    public $jobOwner;

    /**
     * @description The name of the project.
     *
     * @example odps_porject
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The signature of the SQL job.
     *
     * @example pqrs12345tuv
     *
     * @var string
     */
    public $signature;

    /**
     * @description Specifications Type, specifies the resource package that you select when you purchase the MaxCompute service.
     * - OdpsStandard: the pay-as-you-go resource package.
     *
     * - OdpsSpot: the pay-as-you-go spot resource package.
     *
     * @example OdpsStandard
     *
     * @var string
     */
    public $specCode;

    /**
     * @description The submission time of the job.
     *
     * @example 1610432000000
     *
     * @var int
     */
    public $submitTime;

    /**
     * @description Metering types.
     * - ComputationSql: the metering data of SQL jobs that involve internal tables.
     *
     * - ComputationSqlOTS: the metering data of SQL jobs that involve Tablestore external tables.
     *
     * - ComputationSqlOSS: the metering data of SQL jobs that involve OSS external tables.
     *
     * - MapReduce: the metering data of MapReduce jobs.
     *
     * - spark: the metering data of Spark jobs.
     *
     * - mars: the metering data of Mars jobs.
     *
     * @example ComputationSql
     *
     * @var string
     */
    public $type;

    /**
     * @description The unit of computing resource usage
     *
     * @example GB
     *
     * @var string
     */
    public $unit;

    /**
     * @description The computing resource usage is calculated based on the following items:
     *
     * - Amount of scanned data in the unit of GB. For the jobs whose metering types are ComputationSql, ComputationSqlOTS, or ComputationSqlOSS, they are billed based on the amount of scanned data. The computing resource usage of such a job is calculated by using the following formula: Amount of scanned data × Complexity. The complexity is fixed at 1 for the jobs whose metering types are ComputationSqlOTS or ComputationSqlOSS.
     *
     * - CU-hours. For the jobs whose metering types are MapReduce, spark, or mars, they are billed based on CU-hours.
     *
     * @example 1024
     *
     * @var float
     */
    public $usage;
    protected $_name = [
        'endTime' => 'endTime',
        'instanceId' => 'instanceId',
        'jobOwner' => 'jobOwner',
        'projectName' => 'projectName',
        'signature' => 'signature',
        'specCode' => 'specCode',
        'submitTime' => 'submitTime',
        'type' => 'type',
        'unit' => 'unit',
        'usage' => 'usage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->jobOwner) {
            $res['jobOwner'] = $this->jobOwner;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }
        if (null !== $this->specCode) {
            $res['specCode'] = $this->specCode;
        }
        if (null !== $this->submitTime) {
            $res['submitTime'] = $this->submitTime;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceComputeMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['jobOwner'])) {
            $model->jobOwner = $map['jobOwner'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }
        if (isset($map['specCode'])) {
            $model->specCode = $map['specCode'];
        }
        if (isset($map['submitTime'])) {
            $model->submitTime = $map['submitTime'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }
        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
