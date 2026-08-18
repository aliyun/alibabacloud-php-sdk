<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCaseDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class callDetailRecords extends Model
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
    public $dispositionCode;

    /**
     * @var string
     */
    public $dispositionReason;

    /**
     * @var bool
     */
    public $draftVersion;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $releaseInitiator;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $talkTime;

    /**
     * @var int
     */
    public $talkTurns;

    /**
     * @var string
     */
    public $transferTarget;

    /**
     * @var string
     */
    public $transferType;
    protected $_name = [
        'accessChannelId' => 'AccessChannelId',
        'accessChannelType' => 'AccessChannelType',
        'callee' => 'Callee',
        'caller' => 'Caller',
        'dispositionCode' => 'DispositionCode',
        'dispositionReason' => 'DispositionReason',
        'draftVersion' => 'DraftVersion',
        'duration' => 'Duration',
        'endTime' => 'EndTime',
        'releaseInitiator' => 'ReleaseInitiator',
        'sessionId' => 'SessionId',
        'startTime' => 'StartTime',
        'talkTime' => 'TalkTime',
        'talkTurns' => 'TalkTurns',
        'transferTarget' => 'TransferTarget',
        'transferType' => 'TransferType',
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

        if (null !== $this->dispositionCode) {
            $res['DispositionCode'] = $this->dispositionCode;
        }

        if (null !== $this->dispositionReason) {
            $res['DispositionReason'] = $this->dispositionReason;
        }

        if (null !== $this->draftVersion) {
            $res['DraftVersion'] = $this->draftVersion;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->releaseInitiator) {
            $res['ReleaseInitiator'] = $this->releaseInitiator;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->talkTime) {
            $res['TalkTime'] = $this->talkTime;
        }

        if (null !== $this->talkTurns) {
            $res['TalkTurns'] = $this->talkTurns;
        }

        if (null !== $this->transferTarget) {
            $res['TransferTarget'] = $this->transferTarget;
        }

        if (null !== $this->transferType) {
            $res['TransferType'] = $this->transferType;
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

        if (isset($map['DispositionCode'])) {
            $model->dispositionCode = $map['DispositionCode'];
        }

        if (isset($map['DispositionReason'])) {
            $model->dispositionReason = $map['DispositionReason'];
        }

        if (isset($map['DraftVersion'])) {
            $model->draftVersion = $map['DraftVersion'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ReleaseInitiator'])) {
            $model->releaseInitiator = $map['ReleaseInitiator'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TalkTime'])) {
            $model->talkTime = $map['TalkTime'];
        }

        if (isset($map['TalkTurns'])) {
            $model->talkTurns = $map['TalkTurns'];
        }

        if (isset($map['TransferTarget'])) {
            $model->transferTarget = $map['TransferTarget'];
        }

        if (isset($map['TransferType'])) {
            $model->transferType = $map['TransferType'];
        }

        return $model;
    }
}
