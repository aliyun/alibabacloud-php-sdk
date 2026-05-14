<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrIbAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class cdrIbAgent extends Model
{
    /**
     * @var int
     */
    public $agentAnswerInTime;

    /**
     * @var int
     */
    public $answerTime;

    /**
     * @var int
     */
    public $bindType;

    /**
     * @var int
     */
    public $bridgeDuration;

    /**
     * @var string
     */
    public $bridgeStatus;

    /**
     * @var string
     */
    public $bridgeStatusDetail;

    /**
     * @var string
     */
    public $callId;

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
     * @var string
     */
    public $customerCity;

    /**
     * @var string
     */
    public $customerNumber;

    /**
     * @var string
     */
    public $customerNumberEncrypt;

    /**
     * @var string
     */
    public $customerProvince;

    /**
     * @var string
     */
    public $detailCallType;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $hotline;

    /**
     * @var string
     */
    public $hotlineName;

    /**
     * @var int
     */
    public $ibRingingDuration;

    /**
     * @var string
     */
    public $mainUniqueId;

    /**
     * @var int
     */
    public $offhookTime;

    /**
     * @var string
     */
    public $onHookSource;

    /**
     * @var string
     */
    public $qname;

    /**
     * @var string
     */
    public $qno;

    /**
     * @var string
     */
    public $recordFile;

    /**
     * @var string
     */
    public $remember;

    /**
     * @var int
     */
    public $ringTime;

    /**
     * @var int
     */
    public $sayVoiceDuration;

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
    public $uniqueId;

    /**
     * @var string
     */
    public $webrtcCallId;
    protected $_name = [
        'agentAnswerInTime' => 'AgentAnswerInTime',
        'answerTime' => 'AnswerTime',
        'bindType' => 'BindType',
        'bridgeDuration' => 'BridgeDuration',
        'bridgeStatus' => 'BridgeStatus',
        'bridgeStatusDetail' => 'BridgeStatusDetail',
        'callId' => 'CallId',
        'clientName' => 'ClientName',
        'clientNumber' => 'ClientNumber',
        'cno' => 'Cno',
        'customerCity' => 'CustomerCity',
        'customerNumber' => 'CustomerNumber',
        'customerNumberEncrypt' => 'CustomerNumberEncrypt',
        'customerProvince' => 'CustomerProvince',
        'detailCallType' => 'DetailCallType',
        'endTime' => 'EndTime',
        'hotline' => 'Hotline',
        'hotlineName' => 'HotlineName',
        'ibRingingDuration' => 'IbRingingDuration',
        'mainUniqueId' => 'MainUniqueId',
        'offhookTime' => 'OffhookTime',
        'onHookSource' => 'OnHookSource',
        'qname' => 'Qname',
        'qno' => 'Qno',
        'recordFile' => 'RecordFile',
        'remember' => 'Remember',
        'ringTime' => 'RingTime',
        'sayVoiceDuration' => 'SayVoiceDuration',
        'sipCauseDesc' => 'SipCauseDesc',
        'startTime' => 'StartTime',
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
        if (null !== $this->agentAnswerInTime) {
            $res['AgentAnswerInTime'] = $this->agentAnswerInTime;
        }

        if (null !== $this->answerTime) {
            $res['AnswerTime'] = $this->answerTime;
        }

        if (null !== $this->bindType) {
            $res['BindType'] = $this->bindType;
        }

        if (null !== $this->bridgeDuration) {
            $res['BridgeDuration'] = $this->bridgeDuration;
        }

        if (null !== $this->bridgeStatus) {
            $res['BridgeStatus'] = $this->bridgeStatus;
        }

        if (null !== $this->bridgeStatusDetail) {
            $res['BridgeStatusDetail'] = $this->bridgeStatusDetail;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
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

        if (null !== $this->customerCity) {
            $res['CustomerCity'] = $this->customerCity;
        }

        if (null !== $this->customerNumber) {
            $res['CustomerNumber'] = $this->customerNumber;
        }

        if (null !== $this->customerNumberEncrypt) {
            $res['CustomerNumberEncrypt'] = $this->customerNumberEncrypt;
        }

        if (null !== $this->customerProvince) {
            $res['CustomerProvince'] = $this->customerProvince;
        }

        if (null !== $this->detailCallType) {
            $res['DetailCallType'] = $this->detailCallType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->hotline) {
            $res['Hotline'] = $this->hotline;
        }

        if (null !== $this->hotlineName) {
            $res['HotlineName'] = $this->hotlineName;
        }

        if (null !== $this->ibRingingDuration) {
            $res['IbRingingDuration'] = $this->ibRingingDuration;
        }

        if (null !== $this->mainUniqueId) {
            $res['MainUniqueId'] = $this->mainUniqueId;
        }

        if (null !== $this->offhookTime) {
            $res['OffhookTime'] = $this->offhookTime;
        }

        if (null !== $this->onHookSource) {
            $res['OnHookSource'] = $this->onHookSource;
        }

        if (null !== $this->qname) {
            $res['Qname'] = $this->qname;
        }

        if (null !== $this->qno) {
            $res['Qno'] = $this->qno;
        }

        if (null !== $this->recordFile) {
            $res['RecordFile'] = $this->recordFile;
        }

        if (null !== $this->remember) {
            $res['Remember'] = $this->remember;
        }

        if (null !== $this->ringTime) {
            $res['RingTime'] = $this->ringTime;
        }

        if (null !== $this->sayVoiceDuration) {
            $res['SayVoiceDuration'] = $this->sayVoiceDuration;
        }

        if (null !== $this->sipCauseDesc) {
            $res['SipCauseDesc'] = $this->sipCauseDesc;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AgentAnswerInTime'])) {
            $model->agentAnswerInTime = $map['AgentAnswerInTime'];
        }

        if (isset($map['AnswerTime'])) {
            $model->answerTime = $map['AnswerTime'];
        }

        if (isset($map['BindType'])) {
            $model->bindType = $map['BindType'];
        }

        if (isset($map['BridgeDuration'])) {
            $model->bridgeDuration = $map['BridgeDuration'];
        }

        if (isset($map['BridgeStatus'])) {
            $model->bridgeStatus = $map['BridgeStatus'];
        }

        if (isset($map['BridgeStatusDetail'])) {
            $model->bridgeStatusDetail = $map['BridgeStatusDetail'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
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

        if (isset($map['CustomerCity'])) {
            $model->customerCity = $map['CustomerCity'];
        }

        if (isset($map['CustomerNumber'])) {
            $model->customerNumber = $map['CustomerNumber'];
        }

        if (isset($map['CustomerNumberEncrypt'])) {
            $model->customerNumberEncrypt = $map['CustomerNumberEncrypt'];
        }

        if (isset($map['CustomerProvince'])) {
            $model->customerProvince = $map['CustomerProvince'];
        }

        if (isset($map['DetailCallType'])) {
            $model->detailCallType = $map['DetailCallType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Hotline'])) {
            $model->hotline = $map['Hotline'];
        }

        if (isset($map['HotlineName'])) {
            $model->hotlineName = $map['HotlineName'];
        }

        if (isset($map['IbRingingDuration'])) {
            $model->ibRingingDuration = $map['IbRingingDuration'];
        }

        if (isset($map['MainUniqueId'])) {
            $model->mainUniqueId = $map['MainUniqueId'];
        }

        if (isset($map['OffhookTime'])) {
            $model->offhookTime = $map['OffhookTime'];
        }

        if (isset($map['OnHookSource'])) {
            $model->onHookSource = $map['OnHookSource'];
        }

        if (isset($map['Qname'])) {
            $model->qname = $map['Qname'];
        }

        if (isset($map['Qno'])) {
            $model->qno = $map['Qno'];
        }

        if (isset($map['RecordFile'])) {
            $model->recordFile = $map['RecordFile'];
        }

        if (isset($map['Remember'])) {
            $model->remember = $map['Remember'];
        }

        if (isset($map['RingTime'])) {
            $model->ringTime = $map['RingTime'];
        }

        if (isset($map['SayVoiceDuration'])) {
            $model->sayVoiceDuration = $map['SayVoiceDuration'];
        }

        if (isset($map['SipCauseDesc'])) {
            $model->sipCauseDesc = $map['SipCauseDesc'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
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
