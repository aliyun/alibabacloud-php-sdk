<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCdrObDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;

class cdrObDetails extends Model
{
    /**
     * @var int
     */
    public $answerTime;

    /**
     * @var int
     */
    public $bridgeDuration;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var string
     */
    public $callTypeDesc;

    /**
     * @var int
     */
    public $calleeRingingTime;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var string
     */
    public $clientNumber;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var int
     */
    public $detailCallType;

    /**
     * @var string
     */
    public $detailCallTypeDesc;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $mainUniqueId;

    /**
     * @var string
     */
    public $obSipCause;

    /**
     * @var string
     */
    public $obSipCauseRaw;

    /**
     * @var string
     */
    public $recordFile;

    /**
     * @var int
     */
    public $sipCause;

    /**
     * @var string
     */
    public $sipCauseDesc;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $tsiFile;

    /**
     * @var string
     */
    public $uniqueId;

    /**
     * @var string
     */
    public $webrtcCallId;
    protected $_name = [
        'answerTime' => 'AnswerTime',
        'bridgeDuration' => 'BridgeDuration',
        'callId' => 'CallId',
        'callType' => 'CallType',
        'callTypeDesc' => 'CallTypeDesc',
        'calleeRingingTime' => 'CalleeRingingTime',
        'clientName' => 'ClientName',
        'clientNumber' => 'ClientNumber',
        'cno' => 'Cno',
        'detailCallType' => 'DetailCallType',
        'detailCallTypeDesc' => 'DetailCallTypeDesc',
        'endTime' => 'EndTime',
        'mainUniqueId' => 'MainUniqueId',
        'obSipCause' => 'ObSipCause',
        'obSipCauseRaw' => 'ObSipCauseRaw',
        'recordFile' => 'RecordFile',
        'sipCause' => 'SipCause',
        'sipCauseDesc' => 'SipCauseDesc',
        'startTime' => 'StartTime',
        'tsiFile' => 'TsiFile',
        'uniqueId' => 'UniqueId',
        'webrtcCallId' => 'WebrtcCallId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerTime) {
            $res['AnswerTime'] = $this->answerTime;
        }

        if (null !== $this->bridgeDuration) {
            $res['BridgeDuration'] = $this->bridgeDuration;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->callTypeDesc) {
            $res['CallTypeDesc'] = $this->callTypeDesc;
        }

        if (null !== $this->calleeRingingTime) {
            $res['CalleeRingingTime'] = $this->calleeRingingTime;
        }

        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }

        if (null !== $this->clientNumber) {
            $res['ClientNumber'] = $this->clientNumber;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->detailCallType) {
            $res['DetailCallType'] = $this->detailCallType;
        }

        if (null !== $this->detailCallTypeDesc) {
            $res['DetailCallTypeDesc'] = $this->detailCallTypeDesc;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->mainUniqueId) {
            $res['MainUniqueId'] = $this->mainUniqueId;
        }

        if (null !== $this->obSipCause) {
            $res['ObSipCause'] = $this->obSipCause;
        }

        if (null !== $this->obSipCauseRaw) {
            $res['ObSipCauseRaw'] = $this->obSipCauseRaw;
        }

        if (null !== $this->recordFile) {
            $res['RecordFile'] = $this->recordFile;
        }

        if (null !== $this->sipCause) {
            $res['SipCause'] = $this->sipCause;
        }

        if (null !== $this->sipCauseDesc) {
            $res['SipCauseDesc'] = $this->sipCauseDesc;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tsiFile) {
            $res['TsiFile'] = $this->tsiFile;
        }

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }

        if (null !== $this->webrtcCallId) {
            $res['WebrtcCallId'] = $this->webrtcCallId;
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
        if (isset($map['AnswerTime'])) {
            $model->answerTime = $map['AnswerTime'];
        }

        if (isset($map['BridgeDuration'])) {
            $model->bridgeDuration = $map['BridgeDuration'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['CallTypeDesc'])) {
            $model->callTypeDesc = $map['CallTypeDesc'];
        }

        if (isset($map['CalleeRingingTime'])) {
            $model->calleeRingingTime = $map['CalleeRingingTime'];
        }

        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }

        if (isset($map['ClientNumber'])) {
            $model->clientNumber = $map['ClientNumber'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['DetailCallType'])) {
            $model->detailCallType = $map['DetailCallType'];
        }

        if (isset($map['DetailCallTypeDesc'])) {
            $model->detailCallTypeDesc = $map['DetailCallTypeDesc'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MainUniqueId'])) {
            $model->mainUniqueId = $map['MainUniqueId'];
        }

        if (isset($map['ObSipCause'])) {
            $model->obSipCause = $map['ObSipCause'];
        }

        if (isset($map['ObSipCauseRaw'])) {
            $model->obSipCauseRaw = $map['ObSipCauseRaw'];
        }

        if (isset($map['RecordFile'])) {
            $model->recordFile = $map['RecordFile'];
        }

        if (isset($map['SipCause'])) {
            $model->sipCause = $map['SipCause'];
        }

        if (isset($map['SipCauseDesc'])) {
            $model->sipCauseDesc = $map['SipCauseDesc'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TsiFile'])) {
            $model->tsiFile = $map['TsiFile'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        if (isset($map['WebrtcCallId'])) {
            $model->webrtcCallId = $map['WebrtcCallId'];
        }

        return $model;
    }
}
