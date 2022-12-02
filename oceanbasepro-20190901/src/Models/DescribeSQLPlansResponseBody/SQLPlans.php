<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLPlansResponseBody;

use AlibabaCloud\Tea\Model;

class SQLPlans extends Model
{
    /**
     * @var float
     */
    public $avgExecutionMS;

    /**
     * @var int
     */
    public $avgExecutionTimeMS;

    /**
     * @var int
     */
    public $firstLoadTime;

    /**
     * @var string
     */
    public $firstLoadTimeUTCString;

    /**
     * @var int
     */
    public $hitCount;

    /**
     * @var int
     */
    public $mergedVersion;

    /**
     * @var string
     */
    public $nodeIp;

    /**
     * @var string
     */
    public $outlineData;

    /**
     * @var int
     */
    public $outlineId;

    /**
     * @var int
     */
    public $outlineTime;

    /**
     * @var string
     */
    public $outlineTimeUTCString;

    /**
     * @var string
     */
    public $planFull;

    /**
     * @var int
     */
    public $planId;

    /**
     * @var string
     */
    public $planInfo;

    /**
     * @var string
     */
    public $planUnionHash;

    /**
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
