<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCampaignsResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
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
     * @var string
     */
    public $campaignId;

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
    public $casesUncompletedAfterAttempted;

    /**
     * @var float
     */
    public $completedRate;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var int
     */
    public $fixedQuota;

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
    public $plannedEndTime;

    /**
     * @var int
     */
    public $plannedStartTime;

    /**
     * @var bool
     */
    public $runUntilEndTime;

    /**
     * @var string
     */
    public $scriptId;

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
    public $updatedTime;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'actualEndTime' => 'ActualEndTime',
        'actualStartTime' => 'ActualStartTime',
        'campaignId' => 'CampaignId',
        'casesAborted' => 'CasesAborted',
        'casesConnected' => 'CasesConnected',
        'casesUncompleted' => 'CasesUncompleted',
        'casesUncompletedAfterAttempted' => 'CasesUncompletedAfterAttempted',
        'completedRate' => 'CompletedRate',
        'createdTime' => 'CreatedTime',
        'fixedQuota' => 'FixedQuota',
        'maxAttemptCount' => 'MaxAttemptCount',
        'minAttemptInterval' => 'MinAttemptInterval',
        'name' => 'Name',
        'plannedEndTime' => 'PlannedEndTime',
        'plannedStartTime' => 'PlannedStartTime',
        'runUntilEndTime' => 'RunUntilEndTime',
        'scriptId' => 'ScriptId',
        'state' => 'State',
        'totalCases' => 'TotalCases',
        'updatedTime' => 'UpdatedTime',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualEndTime) {
            $res['ActualEndTime'] = $this->actualEndTime;
        }

        if (null !== $this->actualStartTime) {
            $res['ActualStartTime'] = $this->actualStartTime;
        }

        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
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

        if (null !== $this->casesUncompletedAfterAttempted) {
            $res['CasesUncompletedAfterAttempted'] = $this->casesUncompletedAfterAttempted;
        }

        if (null !== $this->completedRate) {
            $res['CompletedRate'] = $this->completedRate;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->fixedQuota) {
            $res['FixedQuota'] = $this->fixedQuota;
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

        if (null !== $this->plannedEndTime) {
            $res['PlannedEndTime'] = $this->plannedEndTime;
        }

        if (null !== $this->plannedStartTime) {
            $res['PlannedStartTime'] = $this->plannedStartTime;
        }

        if (null !== $this->runUntilEndTime) {
            $res['RunUntilEndTime'] = $this->runUntilEndTime;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->totalCases) {
            $res['TotalCases'] = $this->totalCases;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['ActualEndTime'])) {
            $model->actualEndTime = $map['ActualEndTime'];
        }

        if (isset($map['ActualStartTime'])) {
            $model->actualStartTime = $map['ActualStartTime'];
        }

        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
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

        if (isset($map['CasesUncompletedAfterAttempted'])) {
            $model->casesUncompletedAfterAttempted = $map['CasesUncompletedAfterAttempted'];
        }

        if (isset($map['CompletedRate'])) {
            $model->completedRate = $map['CompletedRate'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['FixedQuota'])) {
            $model->fixedQuota = $map['FixedQuota'];
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

        if (isset($map['PlannedEndTime'])) {
            $model->plannedEndTime = $map['PlannedEndTime'];
        }

        if (isset($map['PlannedStartTime'])) {
            $model->plannedStartTime = $map['PlannedStartTime'];
        }

        if (isset($map['RunUntilEndTime'])) {
            $model->runUntilEndTime = $map['RunUntilEndTime'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TotalCases'])) {
            $model->totalCases = $map['TotalCases'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
