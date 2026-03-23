<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupPolicyResponseBody\advancedDataPolicies;

use AlibabaCloud\Dara\Model;

class advancedDataPolicy extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $bakType;

    /**
     * @var string
     */
    public $destRegion;

    /**
     * @var string
     */
    public $destType;

    /**
     * @var string
     */
    public $filterKey;

    /**
     * @var string
     */
    public $filterType;

    /**
     * @var string
     */
    public $filterValue;

    /**
     * @var bool
     */
    public $onlyPreserveOneEachDay;

    /**
     * @var bool
     */
    public $onlyPreserveOneEachHour;

    /**
     * @var string
     */
    public $retentionType;

    /**
     * @var int
     */
    public $retentionValue;

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
        'bakType' => 'BakType',
        'destRegion' => 'DestRegion',
        'destType' => 'DestType',
        'filterKey' => 'FilterKey',
        'filterType' => 'FilterType',
        'filterValue' => 'FilterValue',
        'onlyPreserveOneEachDay' => 'OnlyPreserveOneEachDay',
        'onlyPreserveOneEachHour' => 'OnlyPreserveOneEachHour',
        'retentionType' => 'RetentionType',
        'retentionValue' => 'RetentionValue',
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

        if (null !== $this->bakType) {
            $res['BakType'] = $this->bakType;
        }

        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }

        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
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

        if (null !== $this->onlyPreserveOneEachDay) {
            $res['OnlyPreserveOneEachDay'] = $this->onlyPreserveOneEachDay;
        }

        if (null !== $this->onlyPreserveOneEachHour) {
            $res['OnlyPreserveOneEachHour'] = $this->onlyPreserveOneEachHour;
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

        if (isset($map['BakType'])) {
            $model->bakType = $map['BakType'];
        }

        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }

        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
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

        if (isset($map['OnlyPreserveOneEachDay'])) {
            $model->onlyPreserveOneEachDay = $map['OnlyPreserveOneEachDay'];
        }

        if (isset($map['OnlyPreserveOneEachHour'])) {
            $model->onlyPreserveOneEachHour = $map['OnlyPreserveOneEachHour'];
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
