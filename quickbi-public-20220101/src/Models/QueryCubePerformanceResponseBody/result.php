<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCubePerformanceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1
     *
     * @var float
     */
    public $cacheCostTimeAvg;

    /**
     * @example 1
     *
     * @var int
     */
    public $cacheQueryCount;

    /**
     * @example 1
     *
     * @var float
     */
    public $costTimeAvg;

    /**
     * @example 7c7223ae-****-3c744528014b
     *
     * @var string
     */
    public $cubeId;

    /**
     * @example test
     *
     * @var string
     */
    public $cubeName;

    /**
     * @example 50
     *
     * @var int
     */
    public $queryCount;

    /**
     * @example 1
     *
     * @var float
     */
    public $queryCountAvg;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $queryOverFivePercentNum;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $queryOverFiveSecPercent;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $queryOverTenSecPercent;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $queryOverTenSecPercentNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $queryTimeoutCount;

    /**
     * @example 1
     *
     * @var float
     */
    public $queryTimeoutCountPercent;

    /**
     * @example 1
     *
     * @var float
     */
    public $quickIndexCostTimeAvg;

    /**
     * @example 1
     *
     * @var int
     */
    public $quickIndexQueryCount;

    /**
     * @example 0.3
     *
     * @var string
     */
    public $repeatQueryPercent;

    /**
     * @example 1
     *
     * @var float
     */
    public $repeatQueryPercentNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $repeatSqlQueryCount;

    /**
     * @example 1
     *
     * @var string
     */
    public $repeatSqlQueryPercent;

    /**
     * @example 87c6b145-090c-43e1-9426-8f93be23****
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'cacheCostTimeAvg'          => 'CacheCostTimeAvg',
        'cacheQueryCount'           => 'CacheQueryCount',
        'costTimeAvg'               => 'CostTimeAvg',
        'cubeId'                    => 'CubeId',
        'cubeName'                  => 'CubeName',
        'queryCount'                => 'QueryCount',
        'queryCountAvg'             => 'QueryCountAvg',
        'queryOverFivePercentNum'   => 'QueryOverFivePercentNum',
        'queryOverFiveSecPercent'   => 'QueryOverFiveSecPercent',
        'queryOverTenSecPercent'    => 'QueryOverTenSecPercent',
        'queryOverTenSecPercentNum' => 'QueryOverTenSecPercentNum',
        'queryTimeoutCount'         => 'QueryTimeoutCount',
        'queryTimeoutCountPercent'  => 'QueryTimeoutCountPercent',
        'quickIndexCostTimeAvg'     => 'QuickIndexCostTimeAvg',
        'quickIndexQueryCount'      => 'QuickIndexQueryCount',
        'repeatQueryPercent'        => 'RepeatQueryPercent',
        'repeatQueryPercentNum'     => 'RepeatQueryPercentNum',
        'repeatSqlQueryCount'       => 'RepeatSqlQueryCount',
        'repeatSqlQueryPercent'     => 'RepeatSqlQueryPercent',
        'workspaceId'               => 'WorkspaceId',
        'workspaceName'             => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheCostTimeAvg) {
            $res['CacheCostTimeAvg'] = $this->cacheCostTimeAvg;
        }
        if (null !== $this->cacheQueryCount) {
            $res['CacheQueryCount'] = $this->cacheQueryCount;
        }
        if (null !== $this->costTimeAvg) {
            $res['CostTimeAvg'] = $this->costTimeAvg;
        }
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }
        if (null !== $this->cubeName) {
            $res['CubeName'] = $this->cubeName;
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
        if (isset($map['CostTimeAvg'])) {
            $model->costTimeAvg = $map['CostTimeAvg'];
        }
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }
        if (isset($map['CubeName'])) {
            $model->cubeName = $map['CubeName'];
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
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
