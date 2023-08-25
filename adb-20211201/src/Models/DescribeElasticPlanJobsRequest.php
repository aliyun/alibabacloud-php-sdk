<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticPlanJobsRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the ID of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     * @example amv-wz9509beptiz****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the scaling plan.
     *
     * > *   If you do not specify this parameter, all scaling plans of the cluster are queried.
     * > *   You can call the [DescribeElasticPlans](~~601334~~) operation to query the name of a scaling plan.
     * @example test
     *
     * @var string
     */
    public $elasticPlanName;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of scaling plan jobs to return per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the resource group.
     *
     * > *   If you do not specify this parameter, the scaling plans of all resource groups are queried, including interactive resource groups and elastic I/O units (EIUs).
     * > *   You can call the [DescribeDBResourceGroup](~~459446~~) operation to query the name of a resource group within a specific cluster.
     * @example test
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The time to enable the scaling plan job.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time must be in UTC.
     * @example 2022-01-01T12:01:00Z
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
     *
     *   SUCCESSFUL: The job is successfully run.
     *
     *   FAILED: The job fails.
     *
     * > If you do not specify this parameter, scaling plan jobs in all states are queried.
     * @example SUCCESSFUL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'DBClusterId'       => 'DBClusterId',
        'elasticPlanName'   => 'ElasticPlanName',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'resourceGroupName' => 'ResourceGroupName',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->elasticPlanName) {
            $res['ElasticPlanName'] = $this->elasticPlanName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticPlanJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ElasticPlanName'])) {
            $model->elasticPlanName = $map['ElasticPlanName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        return $model;
    }
}
