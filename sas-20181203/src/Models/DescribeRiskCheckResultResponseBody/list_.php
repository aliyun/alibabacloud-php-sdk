<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckResultResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckResultResponseBody\list_\riskItemResources;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The number of affected assets.
     *
     * @example 0
     *
     * @var int
     */
    public $affectedCount;

    /**
     * @description The timestamp when the last check was performed. Unit: milliseconds.
     *
     * @example 1639429164000
     *
     * @var int
     */
    public $checkTime;

    /**
     * @description The ID of the check item. For more information about the check item, see the check item table in the "Response parameters" section of this topic.
     *
     * @example 1
     *
     * @var int
     */
    public $itemId;

    /**
     * @description The time when the next check will be performed.
     *
     * @example 0
     *
     * @var int
     */
    public $remainingTime;

    /**
     * @description Indicates whether the risks that are detected based on the check item can be fixed. Valid values:
     *
     *   **enabled**: yes
     *   **disabled**: no
     *
     * @example disabled
     *
     * @var string
     */
    public $repairStatus;

    /**
     * @description The type of the affected assets.
     *
     * @example ECS
     *
     * @var string
     */
    public $riskAssertType;

    /**
     * @description An array that consists of the details about the check item.
     *
     * @var riskItemResources[]
     */
    public $riskItemResources;

    /**
     * @description The risk level of the check item. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The sequence number in the check results. The check items are sorted based on the sequence number.
     *
     * @example 1
     *
     * @var int
     */
    public $sort;

    /**
     * @description Indicates whether the check item is supported by the edition of Security Center that you purchase. Valid values:
     *
     *   **enabled**: yes
     *   **disable**: no
     *
     * @example enabled
     *
     * @var string
     */
    public $startStatus;

    /**
     * @description The status of the check results. Valid values:
     *
     *   **pass**
     *   **failed**
     *   **running**
     *   **waiting**
     *   **ignored**
     *   **falsePositive**
     *
     * @example pass
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the check task.
     *
     * @example 15384933
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The name of the check item.
     *
     * @example RDS - Whitelist Configuration
     *
     * @var string
     */
    public $title;

    /**
     * @description The type of the check item. Valid values:
     *
     *   Identity authentication and permissions
     *   Network access control
     *   Log audit
     *   Data security
     *   Monitoring and alerting
     *   Basic security protection
     *
     * @example Log audit
     *
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
    }

    public function toMap()
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
            $res['RiskItemResources'] = [];
            if (null !== $this->riskItemResources && \is_array($this->riskItemResources)) {
                $n = 0;
                foreach ($this->riskItemResources as $item) {
                    $res['RiskItemResources'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
                $n                        = 0;
                foreach ($map['RiskItemResources'] as $item) {
                    $model->riskItemResources[$n++] = null !== $item ? riskItemResources::fromMap($item) : $item;
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
