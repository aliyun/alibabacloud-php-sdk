<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCaseDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCaseDetailResponseBody\data\case_\labels;

class case_ extends Model
{
    /**
     * @var int
     */
    public $attemptedCount;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var string
     */
    public $campaignId;

    /**
     * @var string
     */
    public $campaignName;

    /**
     * @var string
     */
    public $caseId;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $customVariables;

    /**
     * @var int
     */
    public $dialingTime;

    /**
     * @var string
     */
    public $dispositionCode;

    /**
     * @var string
     */
    public $dispositionReason;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var int
     */
    public $lastAttemptedTime;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $referenceId;

    /**
     * @var int
     */
    public $ringingDuration;

    /**
     * @var int
     */
    public $ringingTime;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $talkTime;
    protected $_name = [
        'attemptedCount' => 'AttemptedCount',
        'callerNumber' => 'CallerNumber',
        'campaignId' => 'CampaignId',
        'campaignName' => 'CampaignName',
        'caseId' => 'CaseId',
        'createdTime' => 'CreatedTime',
        'customVariables' => 'CustomVariables',
        'dialingTime' => 'DialingTime',
        'dispositionCode' => 'DispositionCode',
        'dispositionReason' => 'DispositionReason',
        'instanceId' => 'InstanceId',
        'labels' => 'Labels',
        'lastAttemptedTime' => 'LastAttemptedTime',
        'phoneNumber' => 'PhoneNumber',
        'priority' => 'Priority',
        'referenceId' => 'ReferenceId',
        'ringingDuration' => 'RingingDuration',
        'ringingTime' => 'RingingTime',
        'scriptId' => 'ScriptId',
        'scriptName' => 'ScriptName',
        'sessionId' => 'SessionId',
        'state' => 'State',
        'talkTime' => 'TalkTime',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attemptedCount) {
            $res['AttemptedCount'] = $this->attemptedCount;
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }

        if (null !== $this->campaignName) {
            $res['CampaignName'] = $this->campaignName;
        }

        if (null !== $this->caseId) {
            $res['CaseId'] = $this->caseId;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->customVariables) {
            $res['CustomVariables'] = $this->customVariables;
        }

        if (null !== $this->dialingTime) {
            $res['DialingTime'] = $this->dialingTime;
        }

        if (null !== $this->dispositionCode) {
            $res['DispositionCode'] = $this->dispositionCode;
        }

        if (null !== $this->dispositionReason) {
            $res['DispositionReason'] = $this->dispositionReason;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastAttemptedTime) {
            $res['LastAttemptedTime'] = $this->lastAttemptedTime;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
        }

        if (null !== $this->ringingDuration) {
            $res['RingingDuration'] = $this->ringingDuration;
        }

        if (null !== $this->ringingTime) {
            $res['RingingTime'] = $this->ringingTime;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->talkTime) {
            $res['TalkTime'] = $this->talkTime;
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
        if (isset($map['AttemptedCount'])) {
            $model->attemptedCount = $map['AttemptedCount'];
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }

        if (isset($map['CampaignName'])) {
            $model->campaignName = $map['CampaignName'];
        }

        if (isset($map['CaseId'])) {
            $model->caseId = $map['CaseId'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['CustomVariables'])) {
            $model->customVariables = $map['CustomVariables'];
        }

        if (isset($map['DialingTime'])) {
            $model->dialingTime = $map['DialingTime'];
        }

        if (isset($map['DispositionCode'])) {
            $model->dispositionCode = $map['DispositionCode'];
        }

        if (isset($map['DispositionReason'])) {
            $model->dispositionReason = $map['DispositionReason'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LastAttemptedTime'])) {
            $model->lastAttemptedTime = $map['LastAttemptedTime'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }

        if (isset($map['RingingDuration'])) {
            $model->ringingDuration = $map['RingingDuration'];
        }

        if (isset($map['RingingTime'])) {
            $model->ringingTime = $map['RingingTime'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TalkTime'])) {
            $model->talkTime = $map['TalkTime'];
        }

        return $model;
    }
}
