<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryReportPerformanceRequest extends Model
{
    /**
     * @description The average duration (minutes).
     *
     * @example 1
     *
     * @var int
     */
    public $costTimeAvgMin;

    /**
     * @description Current page number for organization member list:
     *
     *   Pages start from page 1.
     *   Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of rows per page in a paged query.
     *
     *   Default value: 10.
     *   Maximum value: 1,000.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The query type. Valid values:
     *
     *   **lastDay**: Yesterday
     *   **sevenDays**: Within seven days
     *   **thirtyDays**: Within 30 days
     *
     * This parameter is required.
     *
     * @example sevenDays
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The ID of the security report.
     *
     * @example 6b407e50-e774-406b-9956-da2425c2****
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The resource types.
     *
     * @example report
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The workspace ID.
     *
     * This parameter is required.
     *
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'costTimeAvgMin' => 'CostTimeAvgMin',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'queryType' => 'QueryType',
        'reportId' => 'ReportId',
        'resourceType' => 'ResourceType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->costTimeAvgMin) {
            $res['CostTimeAvgMin'] = $this->costTimeAvgMin;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryReportPerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostTimeAvgMin'])) {
            $model->costTimeAvgMin = $map['CostTimeAvgMin'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
