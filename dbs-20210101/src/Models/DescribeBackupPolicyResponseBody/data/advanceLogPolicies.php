<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyResponseBody\data;

use AlibabaCloud\Tea\Model;

class advanceLogPolicies extends Model
{
    /**
     * @example cn-shanghai
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
     * @example 1
     *
     * @var bool
     */
    public $enableLogBackup;

    /**
     * @example delay
     *
     * @var string
     */
    public $logRetentionType;

    /**
     * @example 3
     *
     * @var string
     */
    public $logRetentionValue;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $srcRegion;

    /**
     * @example level1
     *
     * @var string
     */
    public $srcType;

    /**
     * @example 6s67c7i3y8f8p72808p******
     *
     * @var string
     */
    public $strategyId;
    protected $_name = [
        'destRegion'        => 'DestRegion',
        'destType'          => 'DestType',
        'enableLogBackup'   => 'EnableLogBackup',
        'logRetentionType'  => 'LogRetentionType',
        'logRetentionValue' => 'LogRetentionValue',
        'srcRegion'         => 'SrcRegion',
        'srcType'           => 'SrcType',
        'strategyId'        => 'StrategyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }
        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }
        if (null !== $this->enableLogBackup) {
            $res['EnableLogBackup'] = $this->enableLogBackup;
        }
        if (null !== $this->logRetentionType) {
            $res['LogRetentionType'] = $this->logRetentionType;
        }
        if (null !== $this->logRetentionValue) {
            $res['LogRetentionValue'] = $this->logRetentionValue;
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
     * @return advanceLogPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }
        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }
        if (isset($map['EnableLogBackup'])) {
            $model->enableLogBackup = $map['EnableLogBackup'];
        }
        if (isset($map['LogRetentionType'])) {
            $model->logRetentionType = $map['LogRetentionType'];
        }
        if (isset($map['LogRetentionValue'])) {
            $model->logRetentionValue = $map['LogRetentionValue'];
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
