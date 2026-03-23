<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyBackupPolicyRequest;

use AlibabaCloud\Dara\Model;

class advancedLogPolicies extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $destRegion;

    /**
     * @var string
     */
    public $destType;

    /**
     * @var int
     */
    public $enableLogBackup;

    /**
     * @var string
     */
    public $filterKey;

    /**
     * @var string
     */
    public $filterValue;

    /**
     * @var string
     */
    public $logRetentionType;

    /**
     * @var int
     */
    public $logRetentionValue;

    /**
     * @var string
     */
    public $srcRegion;

    /**
     * @var string
     */
    public $srcType;

    /**
     * @var string
     */
    public $strategyId;
    protected $_name = [
        'actionType' => 'ActionType',
        'destRegion' => 'DestRegion',
        'destType' => 'DestType',
        'enableLogBackup' => 'EnableLogBackup',
        'filterKey' => 'FilterKey',
        'filterValue' => 'FilterValue',
        'logRetentionType' => 'LogRetentionType',
        'logRetentionValue' => 'LogRetentionValue',
        'srcRegion' => 'SrcRegion',
        'srcType' => 'SrcType',
        'strategyId' => 'StrategyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }

        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }

        if (null !== $this->enableLogBackup) {
            $res['EnableLogBackup'] = $this->enableLogBackup;
        }

        if (null !== $this->filterKey) {
            $res['FilterKey'] = $this->filterKey;
        }

        if (null !== $this->filterValue) {
            $res['FilterValue'] = $this->filterValue;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }

        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }

        if (isset($map['EnableLogBackup'])) {
            $model->enableLogBackup = $map['EnableLogBackup'];
        }

        if (isset($map['FilterKey'])) {
            $model->filterKey = $map['FilterKey'];
        }

        if (isset($map['FilterValue'])) {
            $model->filterValue = $map['FilterValue'];
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
