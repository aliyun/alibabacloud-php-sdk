<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckResultResponseBody\list_\riskItemResources;

class list_ extends Model
{
    /**
     * @var int
     */
    public $affectedCount;
    /**
     * @var int
     */
    public $checkTime;
    /**
     * @var int
     */
    public $itemId;
    /**
     * @var int
     */
    public $remainingTime;
    /**
     * @var string
     */
    public $repairStatus;
    /**
     * @var string
     */
    public $riskAssertType;
    /**
     * @var riskItemResources[]
     */
    public $riskItemResources;
    /**
     * @var string
     */
    public $riskLevel;
    /**
     * @var int
     */
    public $sort;
    /**
     * @var string
     */
    public $startStatus;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $taskId;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'affectedCount'     => 'AffectedCount',
        'checkTime'         => 'CheckTime',
        'itemId'            => 'ItemId',
        'remainingTime'     => 'RemainingTime',
        'repairStatus'      => 'RepairStatus',
        'riskAssertType'    => 'RiskAssertType',
        'riskItemResources' => 'RiskItemResources',
        'riskLevel'         => 'RiskLevel',
        'sort'              => 'Sort',
        'startStatus'       => 'StartStatus',
        'status'            => 'Status',
        'taskId'            => 'TaskId',
        'title'             => 'Title',
        'type'              => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->riskItemResources)) {
            Model::validateArray($this->riskItemResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedCount) {
            $res['AffectedCount'] = $this->affectedCount;
        }

        if (null !== $this->checkTime) {
            $res['CheckTime'] = $this->checkTime;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->remainingTime) {
            $res['RemainingTime'] = $this->remainingTime;
        }

        if (null !== $this->repairStatus) {
            $res['RepairStatus'] = $this->repairStatus;
        }

        if (null !== $this->riskAssertType) {
            $res['RiskAssertType'] = $this->riskAssertType;
        }

        if (null !== $this->riskItemResources) {
            if (\is_array($this->riskItemResources)) {
                $res['RiskItemResources'] = [];
                $n1                       = 0;
                foreach ($this->riskItemResources as $item1) {
                    $res['RiskItemResources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->startStatus) {
            $res['StartStatus'] = $this->startStatus;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AffectedCount'])) {
            $model->affectedCount = $map['AffectedCount'];
        }

        if (isset($map['CheckTime'])) {
            $model->checkTime = $map['CheckTime'];
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['RemainingTime'])) {
            $model->remainingTime = $map['RemainingTime'];
        }

        if (isset($map['RepairStatus'])) {
            $model->repairStatus = $map['RepairStatus'];
        }

        if (isset($map['RiskAssertType'])) {
            $model->riskAssertType = $map['RiskAssertType'];
        }

        if (isset($map['RiskItemResources'])) {
            if (!empty($map['RiskItemResources'])) {
                $model->riskItemResources = [];
                $n1                       = 0;
                foreach ($map['RiskItemResources'] as $item1) {
                    $model->riskItemResources[$n1++] = riskItemResources::fromMap($item1);
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['StartStatus'])) {
            $model->startStatus = $map['StartStatus'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
