<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLPlansResponseBody;

use AlibabaCloud\Tea\Model;

class SQLPlans extends Model
{
    /**
     * @description The average execution duration, in ms.
     *
     * @example 1
     *
     * @var float
     */
    public $avgExecutionMS;

    /**
     * @description The average execution duration when the database uses this execution plan, in ms.
     *
     * @example 288
     *
     * @var int
     */
    public $avgExecutionTimeMS;

    /**
     * @description The time when the plan was loaded for the first time, .
     *
     * @example 1641492303000
     *
     * @var int
     */
    public $firstLoadTime;

    /**
     * @description The time when the plan was loaded for the first time, in UTC +0.
     *
     * @example 2022-01-06T18:05:03Z
     *
     * @var string
     */
    public $firstLoadTimeUTCString;

    /**
     * @description The number of hits.
     *
     * @example 3
     *
     * @var int
     */
    public $hitCount;

    /**
     * @description The major compaction version.
     *
     * @example 132
     *
     * @var int
     */
    public $mergedVersion;

    /**
     * @description The IP address of the node.
     *
     * @example i-bp16niirq4zdmgvm****
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @description The outline data.
     *
     * @var string
     */
    public $outlineData;

    /**
     * @description OutlineID.
     *
     * @example -1
     *
     * @var int
     */
    public $outlineId;

    /**
     * @description The time when the plan was bound.
     *
     * @example 1641492303000
     *
     * @var int
     */
    public $outlineTime;

    /**
     * @description The time when the plan was bound, in UTC +0.
     *
     * @example 2022-01-06T18:05:03Z
     *
     * @var string
     */
    public $outlineTimeUTCString;

    /**
     * @description The complete execution plan of the SQL statement.
     *
     * @example PHY_TABLE_SCAN | bmsql_order_line | 40 ******
     *
     * @var string
     */
    public $planFull;

    /**
     * @description The ID of the SQL execution plan in the database.
     *
     * @example 9114
     *
     * @var int
     */
    public $planId;

    /**
     * @description The information about the plan.
     *
     * @example PHY_TABLE_SCAN
     *
     * @var string
     */
    public $planInfo;

    /**
     * @description The unique identifier of the SQL execution plan in the diagnostic system.
     *
     * @example 859ef7ee****b23ac98cdeb2476f****
     *
     * @var string
     */
    public $planUnionHash;

    /**
     * @description The query SQL statement.
     *
     * @example SELECT ol_i_id, ***, *** FROM aaa
     *
     * @var string
     */
    public $querySQL;
    protected $_name = [
        'avgExecutionMS'         => 'AvgExecutionMS',
        'avgExecutionTimeMS'     => 'AvgExecutionTimeMS',
        'firstLoadTime'          => 'FirstLoadTime',
        'firstLoadTimeUTCString' => 'FirstLoadTimeUTCString',
        'hitCount'               => 'HitCount',
        'mergedVersion'          => 'MergedVersion',
        'nodeIp'                 => 'NodeIp',
        'outlineData'            => 'OutlineData',
        'outlineId'              => 'OutlineId',
        'outlineTime'            => 'OutlineTime',
        'outlineTimeUTCString'   => 'OutlineTimeUTCString',
        'planFull'               => 'PlanFull',
        'planId'                 => 'PlanId',
        'planInfo'               => 'PlanInfo',
        'planUnionHash'          => 'PlanUnionHash',
        'querySQL'               => 'QuerySQL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgExecutionMS) {
            $res['AvgExecutionMS'] = $this->avgExecutionMS;
        }
        if (null !== $this->avgExecutionTimeMS) {
            $res['AvgExecutionTimeMS'] = $this->avgExecutionTimeMS;
        }
        if (null !== $this->firstLoadTime) {
            $res['FirstLoadTime'] = $this->firstLoadTime;
        }
        if (null !== $this->firstLoadTimeUTCString) {
            $res['FirstLoadTimeUTCString'] = $this->firstLoadTimeUTCString;
        }
        if (null !== $this->hitCount) {
            $res['HitCount'] = $this->hitCount;
        }
        if (null !== $this->mergedVersion) {
            $res['MergedVersion'] = $this->mergedVersion;
        }
        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }
        if (null !== $this->outlineData) {
            $res['OutlineData'] = $this->outlineData;
        }
        if (null !== $this->outlineId) {
            $res['OutlineId'] = $this->outlineId;
        }
        if (null !== $this->outlineTime) {
            $res['OutlineTime'] = $this->outlineTime;
        }
        if (null !== $this->outlineTimeUTCString) {
            $res['OutlineTimeUTCString'] = $this->outlineTimeUTCString;
        }
        if (null !== $this->planFull) {
            $res['PlanFull'] = $this->planFull;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planInfo) {
            $res['PlanInfo'] = $this->planInfo;
        }
        if (null !== $this->planUnionHash) {
            $res['PlanUnionHash'] = $this->planUnionHash;
        }
        if (null !== $this->querySQL) {
            $res['QuerySQL'] = $this->querySQL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLPlans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgExecutionMS'])) {
            $model->avgExecutionMS = $map['AvgExecutionMS'];
        }
        if (isset($map['AvgExecutionTimeMS'])) {
            $model->avgExecutionTimeMS = $map['AvgExecutionTimeMS'];
        }
        if (isset($map['FirstLoadTime'])) {
            $model->firstLoadTime = $map['FirstLoadTime'];
        }
        if (isset($map['FirstLoadTimeUTCString'])) {
            $model->firstLoadTimeUTCString = $map['FirstLoadTimeUTCString'];
        }
        if (isset($map['HitCount'])) {
            $model->hitCount = $map['HitCount'];
        }
        if (isset($map['MergedVersion'])) {
            $model->mergedVersion = $map['MergedVersion'];
        }
        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }
        if (isset($map['OutlineData'])) {
            $model->outlineData = $map['OutlineData'];
        }
        if (isset($map['OutlineId'])) {
            $model->outlineId = $map['OutlineId'];
        }
        if (isset($map['OutlineTime'])) {
            $model->outlineTime = $map['OutlineTime'];
        }
        if (isset($map['OutlineTimeUTCString'])) {
            $model->outlineTimeUTCString = $map['OutlineTimeUTCString'];
        }
        if (isset($map['PlanFull'])) {
            $model->planFull = $map['PlanFull'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanInfo'])) {
            $model->planInfo = $map['PlanInfo'];
        }
        if (isset($map['PlanUnionHash'])) {
            $model->planUnionHash = $map['PlanUnionHash'];
        }
        if (isset($map['QuerySQL'])) {
            $model->querySQL = $map['QuerySQL'];
        }

        return $model;
    }
}
