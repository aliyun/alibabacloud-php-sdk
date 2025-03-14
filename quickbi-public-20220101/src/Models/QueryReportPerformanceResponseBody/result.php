<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReportPerformanceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The average duration of cache hits.
     *
     * @example 2.2
     *
     * @var float
     */
    public $cacheCostTimeAvg;

    /**
     * @description The number of cache hits.
     *
     * @example 1
     *
     * @var int
     */
    public $cacheQueryCount;

    /**
     * @description The number of times the chart is queried.
     *
     * @example 1
     *
     * @var int
     */
    public $componentQueryCount;

    /**
     * @description The average number of times the chart is queried.
     *
     * @example 2.0
     *
     * @var float
     */
    public $componentQueryCountAvg;

    /**
     * @description The average query duration associated with the SQL pattern.
     *
     * @example 0.2
     *
     * @var float
     */
    public $costTimeAvg;

    /**
     * @description The number of queries.
     *
     * @example 50
     *
     * @var int
     */
    public $queryCount;

    /**
     * @description The average number of queries.
     *
     * @example 3.3
     *
     * @var float
     */
    public $queryCountAvg;

    /**
     * @description The percentage of the number of queries that exceed the 5S.
     *
     * @example 0.5
     *
     * @var float
     */
    public $queryOverFivePercentNum;

    /**
     * @description Query the proportion of more than 5S.
     *
     * @example 0.5
     *
     * @var string
     */
    public $queryOverFiveSecPercent;

    /**
     * @description The percentage of queries that exceed 10s.
     *
     * @example 0.5
     *
     * @var string
     */
    public $queryOverTenSecPercent;

    /**
     * @description The number of queries that exceed 10 seconds.
     *
     * @example 0.5
     *
     * @var float
     */
    public $queryOverTenSecPercentNum;

    /**
     * @description The number of times that the chart query times out.
     *
     * @example 8
     *
     * @var int
     */
    public $queryTimeoutCount;

    /**
     * @description The percentage of timeout times for chart queries.
     *
     * @example 0.5
     *
     * @var float
     */
    public $queryTimeoutCountPercent;

    /**
     * @description The average time consumed by the Quick engine query.
     *
     * @example 10
     *
     * @var float
     */
    public $quickIndexCostTimeAvg;

    /**
     * @description The number of times that the Quick engine is hit.
     *
     * @example 5
     *
     * @var int
     */
    public $quickIndexQueryCount;

    /**
     * @description The proportion of duplicate queries.
     *
     * @example 0.8
     *
     * @var string
     */
    public $repeatQueryPercent;

    /**
     * @description The number of duplicate queries.
     *
     * @example 3
     *
     * @var float
     */
    public $repeatQueryPercentNum;

    /**
     * @description The number of times the query is repeated.
     *
     * @example 1
     *
     * @var int
     */
    public $repeatSqlQueryCount;

    /**
     * @description The proportion of duplicate queries.
     *
     * @example 0.7
     *
     * @var string
     */
    public $repeatSqlQueryPercent;

    /**
     * @description The ID of the work.
     *
     * @example 6b407e50-e774-406b-9956-da2425c2****
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The name of the report.
     *
     * @example ClusterAddonUpgradeReport
     *
     * @var string
     */
    public $reportName;

    /**
     * @description The format of the report.
     *
     * @example report
     *
     * @var string
     */
    public $reportType;

    /**
     * @description The ID of the workspace to which the work belongs.
     *
     * @example ab46ed33-6278-4ef7-8013-8c1335f266ee
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The name of the group.
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'cacheCostTimeAvg' => 'CacheCostTimeAvg',
        'cacheQueryCount' => 'CacheQueryCount',
        'componentQueryCount' => 'ComponentQueryCount',
        'componentQueryCountAvg' => 'ComponentQueryCountAvg',
        'costTimeAvg' => 'CostTimeAvg',
        'queryCount' => 'QueryCount',
        'queryCountAvg' => 'QueryCountAvg',
        'queryOverFivePercentNum' => 'QueryOverFivePercentNum',
        'queryOverFiveSecPercent' => 'QueryOverFiveSecPercent',
        'queryOverTenSecPercent' => 'QueryOverTenSecPercent',
        'queryOverTenSecPercentNum' => 'QueryOverTenSecPercentNum',
        'queryTimeoutCount' => 'QueryTimeoutCount',
        'queryTimeoutCountPercent' => 'QueryTimeoutCountPercent',
        'quickIndexCostTimeAvg' => 'QuickIndexCostTimeAvg',
        'quickIndexQueryCount' => 'QuickIndexQueryCount',
        'repeatQueryPercent' => 'RepeatQueryPercent',
        'repeatQueryPercentNum' => 'RepeatQueryPercentNum',
        'repeatSqlQueryCount' => 'RepeatSqlQueryCount',
        'repeatSqlQueryPercent' => 'RepeatSqlQueryPercent',
        'reportId' => 'ReportId',
        'reportName' => 'ReportName',
        'reportType' => 'ReportType',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheCostTimeAvg) {
            $res['CacheCostTimeAvg'] = $this->cacheCostTimeAvg;
        }
        if (null !== $this->cacheQueryCount) {
            $res['CacheQueryCount'] = $this->cacheQueryCount;
        }
        if (null !== $this->componentQueryCount) {
            $res['ComponentQueryCount'] = $this->componentQueryCount;
        }
        if (null !== $this->componentQueryCountAvg) {
            $res['ComponentQueryCountAvg'] = $this->componentQueryCountAvg;
        }
        if (null !== $this->costTimeAvg) {
            $res['CostTimeAvg'] = $this->costTimeAvg;
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }
        if (null !== $this->queryCountAvg) {
            $res['QueryCountAvg'] = $this->queryCountAvg;
        }
        if (null !== $this->queryOverFivePercentNum) {
            $res['QueryOverFivePercentNum'] = $this->queryOverFivePercentNum;
        }
        if (null !== $this->queryOverFiveSecPercent) {
            $res['QueryOverFiveSecPercent'] = $this->queryOverFiveSecPercent;
        }
        if (null !== $this->queryOverTenSecPercent) {
            $res['QueryOverTenSecPercent'] = $this->queryOverTenSecPercent;
        }
        if (null !== $this->queryOverTenSecPercentNum) {
            $res['QueryOverTenSecPercentNum'] = $this->queryOverTenSecPercentNum;
        }
        if (null !== $this->queryTimeoutCount) {
            $res['QueryTimeoutCount'] = $this->queryTimeoutCount;
        }
        if (null !== $this->queryTimeoutCountPercent) {
            $res['QueryTimeoutCountPercent'] = $this->queryTimeoutCountPercent;
        }
        if (null !== $this->quickIndexCostTimeAvg) {
            $res['QuickIndexCostTimeAvg'] = $this->quickIndexCostTimeAvg;
        }
        if (null !== $this->quickIndexQueryCount) {
            $res['QuickIndexQueryCount'] = $this->quickIndexQueryCount;
        }
        if (null !== $this->repeatQueryPercent) {
            $res['RepeatQueryPercent'] = $this->repeatQueryPercent;
        }
        if (null !== $this->repeatQueryPercentNum) {
            $res['RepeatQueryPercentNum'] = $this->repeatQueryPercentNum;
        }
        if (null !== $this->repeatSqlQueryCount) {
            $res['RepeatSqlQueryCount'] = $this->repeatSqlQueryCount;
        }
        if (null !== $this->repeatSqlQueryPercent) {
            $res['RepeatSqlQueryPercent'] = $this->repeatSqlQueryPercent;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->reportName) {
            $res['ReportName'] = $this->reportName;
        }
        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheCostTimeAvg'])) {
            $model->cacheCostTimeAvg = $map['CacheCostTimeAvg'];
        }
        if (isset($map['CacheQueryCount'])) {
            $model->cacheQueryCount = $map['CacheQueryCount'];
        }
        if (isset($map['ComponentQueryCount'])) {
            $model->componentQueryCount = $map['ComponentQueryCount'];
        }
        if (isset($map['ComponentQueryCountAvg'])) {
            $model->componentQueryCountAvg = $map['ComponentQueryCountAvg'];
        }
        if (isset($map['CostTimeAvg'])) {
            $model->costTimeAvg = $map['CostTimeAvg'];
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }
        if (isset($map['QueryCountAvg'])) {
            $model->queryCountAvg = $map['QueryCountAvg'];
        }
        if (isset($map['QueryOverFivePercentNum'])) {
            $model->queryOverFivePercentNum = $map['QueryOverFivePercentNum'];
        }
        if (isset($map['QueryOverFiveSecPercent'])) {
            $model->queryOverFiveSecPercent = $map['QueryOverFiveSecPercent'];
        }
        if (isset($map['QueryOverTenSecPercent'])) {
            $model->queryOverTenSecPercent = $map['QueryOverTenSecPercent'];
        }
        if (isset($map['QueryOverTenSecPercentNum'])) {
            $model->queryOverTenSecPercentNum = $map['QueryOverTenSecPercentNum'];
        }
        if (isset($map['QueryTimeoutCount'])) {
            $model->queryTimeoutCount = $map['QueryTimeoutCount'];
        }
        if (isset($map['QueryTimeoutCountPercent'])) {
            $model->queryTimeoutCountPercent = $map['QueryTimeoutCountPercent'];
        }
        if (isset($map['QuickIndexCostTimeAvg'])) {
            $model->quickIndexCostTimeAvg = $map['QuickIndexCostTimeAvg'];
        }
        if (isset($map['QuickIndexQueryCount'])) {
            $model->quickIndexQueryCount = $map['QuickIndexQueryCount'];
        }
        if (isset($map['RepeatQueryPercent'])) {
            $model->repeatQueryPercent = $map['RepeatQueryPercent'];
        }
        if (isset($map['RepeatQueryPercentNum'])) {
            $model->repeatQueryPercentNum = $map['RepeatQueryPercentNum'];
        }
        if (isset($map['RepeatSqlQueryCount'])) {
            $model->repeatSqlQueryCount = $map['RepeatSqlQueryCount'];
        }
        if (isset($map['RepeatSqlQueryPercent'])) {
            $model->repeatSqlQueryPercent = $map['RepeatSqlQueryPercent'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ReportName'])) {
            $model->reportName = $map['ReportName'];
        }
        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
