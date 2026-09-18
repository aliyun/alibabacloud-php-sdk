<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models;

use AlibabaCloud\Dara\Model;

class ListAttackTargetsRequest extends Model
{
    /**
     * @var string
     */
    public $firstScanTimeEnd;

    /**
     * @var string
     */
    public $firstScanTimeStart;

    /**
     * @var string
     */
    public $lastScanStatus;

    /**
     * @var string
     */
    public $lastScanTimeEnd;

    /**
     * @var string
     */
    public $lastScanTimeStart;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sortField;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'firstScanTimeEnd' => 'FirstScanTimeEnd',
        'firstScanTimeStart' => 'FirstScanTimeStart',
        'lastScanStatus' => 'LastScanStatus',
        'lastScanTimeEnd' => 'LastScanTimeEnd',
        'lastScanTimeStart' => 'LastScanTimeStart',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'provider' => 'Provider',
        'riskLevel' => 'RiskLevel',
        'sortField' => 'SortField',
        'sortOrder' => 'SortOrder',
        'targetName' => 'TargetName',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstScanTimeEnd) {
            $res['FirstScanTimeEnd'] = $this->firstScanTimeEnd;
        }

        if (null !== $this->firstScanTimeStart) {
            $res['FirstScanTimeStart'] = $this->firstScanTimeStart;
        }

        if (null !== $this->lastScanStatus) {
            $res['LastScanStatus'] = $this->lastScanStatus;
        }

        if (null !== $this->lastScanTimeEnd) {
            $res['LastScanTimeEnd'] = $this->lastScanTimeEnd;
        }

        if (null !== $this->lastScanTimeStart) {
            $res['LastScanTimeStart'] = $this->lastScanTimeStart;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }

        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['FirstScanTimeEnd'])) {
            $model->firstScanTimeEnd = $map['FirstScanTimeEnd'];
        }

        if (isset($map['FirstScanTimeStart'])) {
            $model->firstScanTimeStart = $map['FirstScanTimeStart'];
        }

        if (isset($map['LastScanStatus'])) {
            $model->lastScanStatus = $map['LastScanStatus'];
        }

        if (isset($map['LastScanTimeEnd'])) {
            $model->lastScanTimeEnd = $map['LastScanTimeEnd'];
        }

        if (isset($map['LastScanTimeStart'])) {
            $model->lastScanTimeStart = $map['LastScanTimeStart'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
