<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlanJobsResponseBody;

use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @description The amount of elastic resources.
     *
     * > *   If the Type parameter is set to EXECUTOR, ElasticAcu indicates the amount of elastic resources in the current resource group.
     * > *   If the Type parameter is set to WORKER, ElasticAcu indicates the total amount of elastic storage resources in the current cluster.
     * @example 16ACU
     *
     * @var string
     */
    public $elasticAcu;

    /**
     * @description The name of the scaling plan.
     *
     * @example test
     *
     * @var string
     */
    public $elasticPlanName;

    /**
     * @description The time when the scaling plan job was complete.
     *
     * >  The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-01-01T12:01:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The number of instances.
     *
     * > *   If the Type parameter is set to EXECUTOR, InstanceSize indicates the number of compute nodes.
     * > *   If the Type parameter is set to EXECUTOR, InstanceSize indicates the number of replica sets at the storage layer in the cluster.
     * @example 1
     *
     * @var int
     */
    public $instanceSize;

    /**
     * @description The amount of reserved resources.
     *
     * > *   If the Type parameter is set to EXECUTOR, ReserveAcu indicates the amount of reserved resources in the current resource group.
     * > *   If the Type parameter is set to WORKER, ReserveAcu indicates the total amount of reserved storage resources in the current cluster.
     * @example 16ACU
     *
     * @var string
     */
    public $reserveAcu;

    /**
     * @description The name of the resource group.
     *
     * @example test
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The time when the scaling plan job was enabled.
     *
     * >  The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-01-01T11:01:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the scaling plan job.
     *
     * Valid values:
     *
     *   RUNNING: The job is running.
     *   SUCCESSFUL: The job is successfully run.
     *   FAILED: The job fails.
     *
     * @example SUCCESSFUL
     *
     * @var string
     */
    public $status;

    /**
     * @description The amount of elastic resources after scaling.
     *
     * @example 32ACU
     *
     * @var string
     */
    public $targetSize;

    /**
     * @description The total amount of resources.
     *
     * > *   If the Type parameter is set to EXECUTOR, TotalAcu indicates the total amount of computing resources in the current resource group.
     * > *   If the Type parameter is set to WORKER, TotalAcu indicates the total amount of storage resources in the cluster.
     * @example 32ACU
     *
     * @var string
     */
    public $totalAcu;

    /**
     * @description The type of the scaling plan job.
     *
     * Valid values:
     *
     *   EXECUTOR: interactive resource groups, which fall into the computing resource category.
     *   WORKER: EIUs.
     *
     * @example EXECUTOR
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'elasticAcu'        => 'ElasticAcu',
        'elasticPlanName'   => 'ElasticPlanName',
        'endTime'           => 'EndTime',
        'instanceSize'      => 'InstanceSize',
        'reserveAcu'        => 'ReserveAcu',
        'resourceGroupName' => 'ResourceGroupName',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
        'targetSize'        => 'TargetSize',
        'totalAcu'          => 'TotalAcu',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticAcu) {
            $res['ElasticAcu'] = $this->elasticAcu;
        }
        if (null !== $this->elasticPlanName) {
            $res['ElasticPlanName'] = $this->elasticPlanName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceSize) {
            $res['InstanceSize'] = $this->instanceSize;
        }
        if (null !== $this->reserveAcu) {
            $res['ReserveAcu'] = $this->reserveAcu;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetSize) {
            $res['TargetSize'] = $this->targetSize;
        }
        if (null !== $this->totalAcu) {
            $res['TotalAcu'] = $this->totalAcu;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ElasticAcu'])) {
            $model->elasticAcu = $map['ElasticAcu'];
        }
        if (isset($map['ElasticPlanName'])) {
            $model->elasticPlanName = $map['ElasticPlanName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceSize'])) {
            $model->instanceSize = $map['InstanceSize'];
        }
        if (isset($map['ReserveAcu'])) {
            $model->reserveAcu = $map['ReserveAcu'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetSize'])) {
            $model->targetSize = $map['TargetSize'];
        }
        if (isset($map['TotalAcu'])) {
            $model->totalAcu = $map['TotalAcu'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
