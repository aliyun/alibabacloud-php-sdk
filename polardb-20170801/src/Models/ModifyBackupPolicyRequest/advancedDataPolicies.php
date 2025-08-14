<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyBackupPolicyRequest;

use AlibabaCloud\Dara\Model;

class advancedDataPolicies extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var bool
     */
    public $autoCreated;

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
    public $dumpAction;

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
    public $policyId;

    /**
     * @var string
     */
    public $retentionType;

    /**
     * @var string
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
    protected $_name = [
        'actionType' => 'ActionType',
        'autoCreated' => 'AutoCreated',
        'bakType' => 'BakType',
        'destRegion' => 'DestRegion',
        'destType' => 'DestType',
        'dumpAction' => 'DumpAction',
        'filterKey' => 'FilterKey',
        'filterType' => 'FilterType',
        'filterValue' => 'FilterValue',
        'onlyPreserveOneEachDay' => 'OnlyPreserveOneEachDay',
        'onlyPreserveOneEachHour' => 'OnlyPreserveOneEachHour',
        'policyId' => 'PolicyId',
        'retentionType' => 'RetentionType',
        'retentionValue' => 'RetentionValue',
        'srcRegion' => 'SrcRegion',
        'srcType' => 'SrcType',
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

        if (null !== $this->onlyPreserveOneEachDay) {
            $res['OnlyPreserveOneEachDay'] = $this->onlyPreserveOneEachDay;
        }

        if (null !== $this->onlyPreserveOneEachHour) {
            $res['OnlyPreserveOneEachHour'] = $this->onlyPreserveOneEachHour;
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

        if (isset($map['OnlyPreserveOneEachDay'])) {
            $model->onlyPreserveOneEachDay = $map['OnlyPreserveOneEachDay'];
        }

        if (isset($map['OnlyPreserveOneEachHour'])) {
            $model->onlyPreserveOneEachHour = $map['OnlyPreserveOneEachHour'];
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

        return $model;
    }
}
