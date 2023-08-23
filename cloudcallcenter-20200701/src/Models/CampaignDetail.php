<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models;

use AlibabaCloud\Tea\Model;

class CampaignDetail extends Model
{
    /**
     * @var int
     */
    public $actualEndTime;

    /**
     * @var int
     */
    public $actualStartTime;

    /**
     * @var int
     */
    public $casesAborted;

    /**
     * @var int
     */
    public $casesConnected;

    /**
     * @var int
     */
    public $casesUncompleted;

    /**
     * @var int
     */
    public $completedRate;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $maxAttemptCount;

    /**
     * @var int
     */
    public $minAttemptInterval;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $planedEndTime;

    /**
     * @var int
     */
    public $planedStartTime;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $totalCases;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'actualEndTime'      => 'ActualEndTime',
        'actualStartTime'    => 'ActualStartTime',
        'casesAborted'       => 'CasesAborted',
        'casesConnected'     => 'CasesConnected',
        'casesUncompleted'   => 'CasesUncompleted',
        'completedRate'      => 'CompletedRate',
        'createTime'         => 'CreateTime',
        'id'                 => 'Id',
        'maxAttemptCount'    => 'MaxAttemptCount',
        'minAttemptInterval' => 'MinAttemptInterval',
        'name'               => 'Name',
        'planedEndTime'      => 'PlanedEndTime',
        'planedStartTime'    => 'PlanedStartTime',
        'queueName'          => 'QueueName',
        'state'              => 'State',
        'totalCases'         => 'TotalCases',
        'updateTime'         => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualEndTime) {
            $res['ActualEndTime'] = $this->actualEndTime;
        }
        if (null !== $this->actualStartTime) {
            $res['ActualStartTime'] = $this->actualStartTime;
        }
        if (null !== $this->casesAborted) {
            $res['CasesAborted'] = $this->casesAborted;
        }
        if (null !== $this->casesConnected) {
            $res['CasesConnected'] = $this->casesConnected;
        }
        if (null !== $this->casesUncompleted) {
            $res['CasesUncompleted'] = $this->casesUncompleted;
        }
        if (null !== $this->completedRate) {
            $res['CompletedRate'] = $this->completedRate;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maxAttemptCount) {
            $res['MaxAttemptCount'] = $this->maxAttemptCount;
        }
        if (null !== $this->minAttemptInterval) {
            $res['MinAttemptInterval'] = $this->minAttemptInterval;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->planedEndTime) {
            $res['PlanedEndTime'] = $this->planedEndTime;
        }
        if (null !== $this->planedStartTime) {
            $res['PlanedStartTime'] = $this->planedStartTime;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->totalCases) {
            $res['TotalCases'] = $this->totalCases;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CampaignDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualEndTime'])) {
            $model->actualEndTime = $map['ActualEndTime'];
        }
        if (isset($map['ActualStartTime'])) {
            $model->actualStartTime = $map['ActualStartTime'];
        }
        if (isset($map['CasesAborted'])) {
            $model->casesAborted = $map['CasesAborted'];
        }
        if (isset($map['CasesConnected'])) {
            $model->casesConnected = $map['CasesConnected'];
        }
        if (isset($map['CasesUncompleted'])) {
            $model->casesUncompleted = $map['CasesUncompleted'];
        }
        if (isset($map['CompletedRate'])) {
            $model->completedRate = $map['CompletedRate'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaxAttemptCount'])) {
            $model->maxAttemptCount = $map['MaxAttemptCount'];
        }
        if (isset($map['MinAttemptInterval'])) {
            $model->minAttemptInterval = $map['MinAttemptInterval'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PlanedEndTime'])) {
            $model->planedEndTime = $map['PlanedEndTime'];
        }
        if (isset($map['PlanedStartTime'])) {
            $model->planedStartTime = $map['PlanedStartTime'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TotalCases'])) {
            $model->totalCases = $map['TotalCases'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
