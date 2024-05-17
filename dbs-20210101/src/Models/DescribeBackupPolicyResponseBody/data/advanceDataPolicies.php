<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyResponseBody\data;

use AlibabaCloud\Tea\Model;

class advanceDataPolicies extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoCreated;

    /**
     * @example F
     *
     * @var string
     */
    public $bakType;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $destRegion;

    /**
     * @example level1
     *
     * @var string
     */
    public $destType;

    /**
     * @example copy
     *
     * @var string
     */
    public $dumpAction;

    /**
     * @example dayOfWeek
     *
     * @var string
     */
    public $filterKey;

    /**
     * @example crontab
     *
     * @var string
     */
    public $filterType;

    /**
     * @example 1,2,3,4,5,6,7
     *
     * @var string
     */
    public $filterValue;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @example delay
     *
     * @var string
     */
    public $retentionType;

    /**
     * @example 7
     *
     * @var string
     */
    public $retentionValue;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $srcRegion;

    /**
     * @example db
     *
     * @var string
     */
    public $srcType;

    /**
     * @example 71930ac2e9f15e41615e10627c******
     *
     * @var string
     */
    public $strategyId;
    protected $_name = [
        'autoCreated'    => 'AutoCreated',
        'bakType'        => 'BakType',
        'destRegion'     => 'DestRegion',
        'destType'       => 'DestType',
        'dumpAction'     => 'DumpAction',
        'filterKey'      => 'FilterKey',
        'filterType'     => 'FilterType',
        'filterValue'    => 'FilterValue',
        'policyId'       => 'PolicyId',
        'retentionType'  => 'RetentionType',
        'retentionValue' => 'RetentionValue',
        'srcRegion'      => 'SrcRegion',
        'srcType'        => 'SrcType',
        'strategyId'     => 'StrategyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCreated) {
            $res['AutoCreated'] = $this->autoCreated;
        }
        if (null !== $this->bakType) {
            $res['BakType'] = $this->bakType;
        }
        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }
        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }
        if (null !== $this->dumpAction) {
            $res['DumpAction'] = $this->dumpAction;
        }
        if (null !== $this->filterKey) {
            $res['FilterKey'] = $this->filterKey;
        }
        if (null !== $this->filterType) {
            $res['FilterType'] = $this->filterType;
        }
        if (null !== $this->filterValue) {
            $res['FilterValue'] = $this->filterValue;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->retentionType) {
            $res['RetentionType'] = $this->retentionType;
        }
        if (null !== $this->retentionValue) {
            $res['RetentionValue'] = $this->retentionValue;
        }
        if (null !== $this->srcRegion) {
            $res['SrcRegion'] = $this->srcRegion;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return advanceDataPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCreated'])) {
            $model->autoCreated = $map['AutoCreated'];
        }
        if (isset($map['BakType'])) {
            $model->bakType = $map['BakType'];
        }
        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }
        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }
        if (isset($map['DumpAction'])) {
            $model->dumpAction = $map['DumpAction'];
        }
        if (isset($map['FilterKey'])) {
            $model->filterKey = $map['FilterKey'];
        }
        if (isset($map['FilterType'])) {
            $model->filterType = $map['FilterType'];
        }
        if (isset($map['FilterValue'])) {
            $model->filterValue = $map['FilterValue'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RetentionType'])) {
            $model->retentionType = $map['RetentionType'];
        }
        if (isset($map['RetentionValue'])) {
            $model->retentionValue = $map['RetentionValue'];
        }
        if (isset($map['SrcRegion'])) {
            $model->srcRegion = $map['SrcRegion'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        return $model;
    }
}
