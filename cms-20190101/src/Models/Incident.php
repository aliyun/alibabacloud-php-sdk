<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class Incident extends Model
{
    /**
     * @var int
     */
    public $actionTime;

    /**
     * @var int
     */
    public $alertCount;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var mixed[]
     */
    public $groupingData;

    /**
     * @var string
     */
    public $groupingId;

    /**
     * @var string
     */
    public $groupingKey;

    /**
     * @var string
     */
    public $incidentId;

    /**
     * @var string
     */
    public $incidentStatus;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $strategyUuid;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'actionTime'     => 'ActionTime',
        'alertCount'     => 'AlertCount',
        'endTime'        => 'EndTime',
        'groupingData'   => 'GroupingData',
        'groupingId'     => 'GroupingId',
        'groupingKey'    => 'GroupingKey',
        'incidentId'     => 'IncidentId',
        'incidentStatus' => 'IncidentStatus',
        'severity'       => 'Severity',
        'startTime'      => 'StartTime',
        'strategyUuid'   => 'StrategyUuid',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionTime) {
            $res['ActionTime'] = $this->actionTime;
        }
        if (null !== $this->alertCount) {
            $res['AlertCount'] = $this->alertCount;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->groupingData) {
            $res['GroupingData'] = $this->groupingData;
        }
        if (null !== $this->groupingId) {
            $res['GroupingId'] = $this->groupingId;
        }
        if (null !== $this->groupingKey) {
            $res['GroupingKey'] = $this->groupingKey;
        }
        if (null !== $this->incidentId) {
            $res['IncidentId'] = $this->incidentId;
        }
        if (null !== $this->incidentStatus) {
            $res['IncidentStatus'] = $this->incidentStatus;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->strategyUuid) {
            $res['StrategyUuid'] = $this->strategyUuid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Incident
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionTime'])) {
            $model->actionTime = $map['ActionTime'];
        }
        if (isset($map['AlertCount'])) {
            $model->alertCount = $map['AlertCount'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GroupingData'])) {
            $model->groupingData = $map['GroupingData'];
        }
        if (isset($map['GroupingId'])) {
            $model->groupingId = $map['GroupingId'];
        }
        if (isset($map['GroupingKey'])) {
            $model->groupingKey = $map['GroupingKey'];
        }
        if (isset($map['IncidentId'])) {
            $model->incidentId = $map['IncidentId'];
        }
        if (isset($map['IncidentStatus'])) {
            $model->incidentStatus = $map['IncidentStatus'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StrategyUuid'])) {
            $model->strategyUuid = $map['StrategyUuid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
