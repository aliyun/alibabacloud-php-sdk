<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;

class ListCallDetailRecordsShrinkRequest extends Model
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
    public $callee;

    /**
     * @var string
     */
    public $caller;

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
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $issueResolved;

    /**
     * @var int
     */
    public $maxTalkTurns;

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
    public $scriptId;

    /**
     * @var string
     */
    public $sessionIdsShrink;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'accessChannelId' => 'AccessChannelId',
        'accessChannelType' => 'AccessChannelType',
        'callee' => 'Callee',
        'caller' => 'Caller',
        'dispositionCodesShrink' => 'DispositionCodes',
        'dispositionReasonsShrink' => 'DispositionReasons',
        'draftVersion' => 'DraftVersion',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'issueResolved' => 'IssueResolved',
        'maxTalkTurns' => 'MaxTalkTurns',
        'minTalkTurns' => 'MinTalkTurns',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'scriptId' => 'ScriptId',
        'sessionIdsShrink' => 'SessionIds',
        'startTime' => 'StartTime',
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

        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }

        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
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

        if (null !== $this->issueResolved) {
            $res['IssueResolved'] = $this->issueResolved;
        }

        if (null !== $this->maxTalkTurns) {
            $res['MaxTalkTurns'] = $this->maxTalkTurns;
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

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->sessionIdsShrink) {
            $res['SessionIds'] = $this->sessionIdsShrink;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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

        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }

        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
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

        if (isset($map['IssueResolved'])) {
            $model->issueResolved = $map['IssueResolved'];
        }

        if (isset($map['MaxTalkTurns'])) {
            $model->maxTalkTurns = $map['MaxTalkTurns'];
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

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['SessionIds'])) {
            $model->sessionIdsShrink = $map['SessionIds'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
