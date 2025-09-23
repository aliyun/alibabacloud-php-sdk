<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLogFilesResponseBody\switchListItems;

use AlibabaCloud\Dara\Model;

class switchStepItems extends Model
{
    /**
     * @var string
     */
    public $DBNodeId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $simulatePhase;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $stepName;

    /**
     * @var string
     */
    public $timeCost;
    protected $_name = [
        'DBNodeId' => 'DBNodeId',
        'endTime' => 'EndTime',
        'isSuccess' => 'IsSuccess',
        'simulatePhase' => 'SimulatePhase',
        'startTime' => 'StartTime',
        'stepName' => 'StepName',
        'timeCost' => 'TimeCost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->simulatePhase) {
            $res['SimulatePhase'] = $this->simulatePhase;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }

        if (null !== $this->timeCost) {
            $res['TimeCost'] = $this->timeCost;
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
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['SimulatePhase'])) {
            $model->simulatePhase = $map['SimulatePhase'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        if (isset($map['TimeCost'])) {
            $model->timeCost = $map['TimeCost'];
        }

        return $model;
    }
}
