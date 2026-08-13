<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;

class CreateCampaignShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attemptOrder;

    /**
     * @var string
     */
    public $callableTime;

    /**
     * @var string
     */
    public $caseFileKey;

    /**
     * @var string
     */
    public $casesShrink;

    /**
     * @var int
     */
    public $dialingTimeoutSeconds;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $fixedQuota;

    /**
     * @var string
     */
    public $flashSmsParameters;

    /**
     * @var bool
     */
    public $holidayRestricted;

    /**
     * @var string
     */
    public $instanceId;

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
     * @var string
     */
    public $numbersShrink;

    /**
     * @var string
     */
    public $redialRestrictions;

    /**
     * @var bool
     */
    public $runUntilEndTime;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'attemptOrder' => 'AttemptOrder',
        'callableTime' => 'CallableTime',
        'caseFileKey' => 'CaseFileKey',
        'casesShrink' => 'Cases',
        'dialingTimeoutSeconds' => 'DialingTimeoutSeconds',
        'endTime' => 'EndTime',
        'fixedQuota' => 'FixedQuota',
        'flashSmsParameters' => 'FlashSmsParameters',
        'holidayRestricted' => 'HolidayRestricted',
        'instanceId' => 'InstanceId',
        'maxAttemptCount' => 'MaxAttemptCount',
        'minAttemptInterval' => 'MinAttemptInterval',
        'name' => 'Name',
        'numbersShrink' => 'Numbers',
        'redialRestrictions' => 'RedialRestrictions',
        'runUntilEndTime' => 'RunUntilEndTime',
        'scriptId' => 'ScriptId',
        'startTime' => 'StartTime',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attemptOrder) {
            $res['AttemptOrder'] = $this->attemptOrder;
        }

        if (null !== $this->callableTime) {
            $res['CallableTime'] = $this->callableTime;
        }

        if (null !== $this->caseFileKey) {
            $res['CaseFileKey'] = $this->caseFileKey;
        }

        if (null !== $this->casesShrink) {
            $res['Cases'] = $this->casesShrink;
        }

        if (null !== $this->dialingTimeoutSeconds) {
            $res['DialingTimeoutSeconds'] = $this->dialingTimeoutSeconds;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->fixedQuota) {
            $res['FixedQuota'] = $this->fixedQuota;
        }

        if (null !== $this->flashSmsParameters) {
            $res['FlashSmsParameters'] = $this->flashSmsParameters;
        }

        if (null !== $this->holidayRestricted) {
            $res['HolidayRestricted'] = $this->holidayRestricted;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (null !== $this->numbersShrink) {
            $res['Numbers'] = $this->numbersShrink;
        }

        if (null !== $this->redialRestrictions) {
            $res['RedialRestrictions'] = $this->redialRestrictions;
        }

        if (null !== $this->runUntilEndTime) {
            $res['RunUntilEndTime'] = $this->runUntilEndTime;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AttemptOrder'])) {
            $model->attemptOrder = $map['AttemptOrder'];
        }

        if (isset($map['CallableTime'])) {
            $model->callableTime = $map['CallableTime'];
        }

        if (isset($map['CaseFileKey'])) {
            $model->caseFileKey = $map['CaseFileKey'];
        }

        if (isset($map['Cases'])) {
            $model->casesShrink = $map['Cases'];
        }

        if (isset($map['DialingTimeoutSeconds'])) {
            $model->dialingTimeoutSeconds = $map['DialingTimeoutSeconds'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FixedQuota'])) {
            $model->fixedQuota = $map['FixedQuota'];
        }

        if (isset($map['FlashSmsParameters'])) {
            $model->flashSmsParameters = $map['FlashSmsParameters'];
        }

        if (isset($map['HolidayRestricted'])) {
            $model->holidayRestricted = $map['HolidayRestricted'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        if (isset($map['Numbers'])) {
            $model->numbersShrink = $map['Numbers'];
        }

        if (isset($map['RedialRestrictions'])) {
            $model->redialRestrictions = $map['RedialRestrictions'];
        }

        if (isset($map['RunUntilEndTime'])) {
            $model->runUntilEndTime = $map['RunUntilEndTime'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
