<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;

class ListCasesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accessChannelId;

    /**
     * @var string
     */
    public $accessChannelType;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $campaignId;

    /**
     * @var bool
     */
    public $caseCompleted;

    /**
     * @var string
     */
    public $caseIdsShrink;

    /**
     * @var string
     */
    public $dispositionCodesShrink;

    /**
     * @var string
     */
    public $dispositionReasonsShrink;

    /**
     * @var bool
     */
    public $draftVersion;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $labelSearchShrink;

    /**
     * @var int
     */
    public $maxRingingDuration;

    /**
     * @var int
     */
    public $maxTalkTime;

    /**
     * @var int
     */
    public $maxTalkTurns;

    /**
     * @var int
     */
    public $minRingingDuration;

    /**
     * @var int
     */
    public $minTalkTime;

    /**
     * @var int
     */
    public $minTalkTurns;

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
    public $phoneNumber;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $statesShrink;
    protected $_name = [
        'accessChannelId' => 'AccessChannelId',
        'accessChannelType' => 'AccessChannelType',
        'caller' => 'Caller',
        'campaignId' => 'CampaignId',
        'caseCompleted' => 'CaseCompleted',
        'caseIdsShrink' => 'CaseIds',
        'dispositionCodesShrink' => 'DispositionCodes',
        'dispositionReasonsShrink' => 'DispositionReasons',
        'draftVersion' => 'DraftVersion',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'labelSearchShrink' => 'LabelSearch',
        'maxRingingDuration' => 'MaxRingingDuration',
        'maxTalkTime' => 'MaxTalkTime',
        'maxTalkTurns' => 'MaxTalkTurns',
        'minRingingDuration' => 'MinRingingDuration',
        'minTalkTime' => 'MinTalkTime',
        'minTalkTurns' => 'MinTalkTurns',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'phoneNumber' => 'PhoneNumber',
        'scriptId' => 'ScriptId',
        'startTime' => 'StartTime',
        'statesShrink' => 'States',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessChannelId) {
            $res['AccessChannelId'] = $this->accessChannelId;
        }

        if (null !== $this->accessChannelType) {
            $res['AccessChannelType'] = $this->accessChannelType;
        }

        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }

        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }

        if (null !== $this->caseCompleted) {
            $res['CaseCompleted'] = $this->caseCompleted;
        }

        if (null !== $this->caseIdsShrink) {
            $res['CaseIds'] = $this->caseIdsShrink;
        }

        if (null !== $this->dispositionCodesShrink) {
            $res['DispositionCodes'] = $this->dispositionCodesShrink;
        }

        if (null !== $this->dispositionReasonsShrink) {
            $res['DispositionReasons'] = $this->dispositionReasonsShrink;
        }

        if (null !== $this->draftVersion) {
            $res['DraftVersion'] = $this->draftVersion;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->labelSearchShrink) {
            $res['LabelSearch'] = $this->labelSearchShrink;
        }

        if (null !== $this->maxRingingDuration) {
            $res['MaxRingingDuration'] = $this->maxRingingDuration;
        }

        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }

        if (null !== $this->maxTalkTurns) {
            $res['MaxTalkTurns'] = $this->maxTalkTurns;
        }

        if (null !== $this->minRingingDuration) {
            $res['MinRingingDuration'] = $this->minRingingDuration;
        }

        if (null !== $this->minTalkTime) {
            $res['MinTalkTime'] = $this->minTalkTime;
        }

        if (null !== $this->minTalkTurns) {
            $res['MinTalkTurns'] = $this->minTalkTurns;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->statesShrink) {
            $res['States'] = $this->statesShrink;
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
        if (isset($map['AccessChannelId'])) {
            $model->accessChannelId = $map['AccessChannelId'];
        }

        if (isset($map['AccessChannelType'])) {
            $model->accessChannelType = $map['AccessChannelType'];
        }

        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }

        if (isset($map['CaseCompleted'])) {
            $model->caseCompleted = $map['CaseCompleted'];
        }

        if (isset($map['CaseIds'])) {
            $model->caseIdsShrink = $map['CaseIds'];
        }

        if (isset($map['DispositionCodes'])) {
            $model->dispositionCodesShrink = $map['DispositionCodes'];
        }

        if (isset($map['DispositionReasons'])) {
            $model->dispositionReasonsShrink = $map['DispositionReasons'];
        }

        if (isset($map['DraftVersion'])) {
            $model->draftVersion = $map['DraftVersion'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LabelSearch'])) {
            $model->labelSearchShrink = $map['LabelSearch'];
        }

        if (isset($map['MaxRingingDuration'])) {
            $model->maxRingingDuration = $map['MaxRingingDuration'];
        }

        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }

        if (isset($map['MaxTalkTurns'])) {
            $model->maxTalkTurns = $map['MaxTalkTurns'];
        }

        if (isset($map['MinRingingDuration'])) {
            $model->minRingingDuration = $map['MinRingingDuration'];
        }

        if (isset($map['MinTalkTime'])) {
            $model->minTalkTime = $map['MinTalkTime'];
        }

        if (isset($map['MinTalkTurns'])) {
            $model->minTalkTurns = $map['MinTalkTurns'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['States'])) {
            $model->statesShrink = $map['States'];
        }

        return $model;
    }
}
