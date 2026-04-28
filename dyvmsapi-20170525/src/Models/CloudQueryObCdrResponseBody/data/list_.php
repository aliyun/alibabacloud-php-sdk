<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryObCdrResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryObCdrResponseBody\data\list_\recordFile;

class list_ extends Model
{
    /**
     * @var string
     */
    public $agentClid;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $agentNumber;

    /**
     * @var string
     */
    public $answerTime;

    /**
     * @var string
     */
    public $bridgeDuration;

    /**
     * @var string
     */
    public $bridgeTime;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $calleeRingingTime;

    /**
     * @var string
     */
    public $clid;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $customerAreaCode;

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
    public $customerProvince;

    /**
     * @var string
     */
    public $displayNumber;

    /**
     * @var string
     */
    public $downGrade;

    /**
     * @var string
     */
    public $downGradeCounts;

    /**
     * @var string
     */
    public $endReason;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $gno;

    /**
     * @var string
     */
    public $hangupReason;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $isRealAnswer;

    /**
     * @var string
     */
    public $leftDisplayNumber;

    /**
     * @var string
     */
    public $mainRingingTime;

    /**
     * @var string
     */
    public $realAnswerTime;

    /**
     * @var recordFile[]
     */
    public $recordFile;

    /**
     * @var string
     */
    public $requestUniqueId;

    /**
     * @var string
     */
    public $rtcTotalDuration;

    /**
     * @var string
     */
    public $sipCause;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $totalDuration;

    /**
     * @var string
     */
    public $trunkGroupKey;

    /**
     * @var string
     */
    public $tsiFile;

    /**
     * @var string
     */
    public $tsiFileFormat;

    /**
     * @var string
     */
    public $uniqueId;

    /**
     * @var mixed[]
     */
    public $userField;

    /**
     * @var string
     */
    public $vadIn;

    /**
     * @var string
     */
    public $vadOut;

    /**
     * @var string
     */
    public $waitDuration;

    /**
     * @var string
     */
    public $XNumber;
    protected $_name = [
        'agentClid' => 'AgentClid',
        'agentName' => 'AgentName',
        'agentNumber' => 'AgentNumber',
        'answerTime' => 'AnswerTime',
        'bridgeDuration' => 'BridgeDuration',
        'bridgeTime' => 'BridgeTime',
        'callId' => 'CallId',
        'callType' => 'CallType',
        'calleeRingingTime' => 'CalleeRingingTime',
        'clid' => 'Clid',
        'cno' => 'Cno',
        'customerAreaCode' => 'CustomerAreaCode',
        'customerCity' => 'CustomerCity',
        'customerNumber' => 'CustomerNumber',
        'customerProvince' => 'CustomerProvince',
        'displayNumber' => 'DisplayNumber',
        'downGrade' => 'DownGrade',
        'downGradeCounts' => 'DownGradeCounts',
        'endReason' => 'EndReason',
        'endTime' => 'EndTime',
        'gno' => 'Gno',
        'hangupReason' => 'HangupReason',
        'id' => 'Id',
        'isRealAnswer' => 'IsRealAnswer',
        'leftDisplayNumber' => 'LeftDisplayNumber',
        'mainRingingTime' => 'MainRingingTime',
        'realAnswerTime' => 'RealAnswerTime',
        'recordFile' => 'RecordFile',
        'requestUniqueId' => 'RequestUniqueId',
        'rtcTotalDuration' => 'RtcTotalDuration',
        'sipCause' => 'SipCause',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusCode' => 'StatusCode',
        'statusReason' => 'StatusReason',
        'taskId' => 'TaskId',
        'totalDuration' => 'TotalDuration',
        'trunkGroupKey' => 'TrunkGroupKey',
        'tsiFile' => 'TsiFile',
        'tsiFileFormat' => 'TsiFileFormat',
        'uniqueId' => 'UniqueId',
        'userField' => 'UserField',
        'vadIn' => 'VadIn',
        'vadOut' => 'VadOut',
        'waitDuration' => 'WaitDuration',
        'XNumber' => 'XNumber',
    ];

    public function validate()
    {
        if (\is_array($this->recordFile)) {
            Model::validateArray($this->recordFile);
        }
        if (\is_array($this->userField)) {
            Model::validateArray($this->userField);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentClid) {
            $res['AgentClid'] = $this->agentClid;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->agentNumber) {
            $res['AgentNumber'] = $this->agentNumber;
        }

        if (null !== $this->answerTime) {
            $res['AnswerTime'] = $this->answerTime;
        }

        if (null !== $this->bridgeDuration) {
            $res['BridgeDuration'] = $this->bridgeDuration;
        }

        if (null !== $this->bridgeTime) {
            $res['BridgeTime'] = $this->bridgeTime;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->calleeRingingTime) {
            $res['CalleeRingingTime'] = $this->calleeRingingTime;
        }

        if (null !== $this->clid) {
            $res['Clid'] = $this->clid;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->customerAreaCode) {
            $res['CustomerAreaCode'] = $this->customerAreaCode;
        }

        if (null !== $this->customerCity) {
            $res['CustomerCity'] = $this->customerCity;
        }

        if (null !== $this->customerNumber) {
            $res['CustomerNumber'] = $this->customerNumber;
        }

        if (null !== $this->customerProvince) {
            $res['CustomerProvince'] = $this->customerProvince;
        }

        if (null !== $this->displayNumber) {
            $res['DisplayNumber'] = $this->displayNumber;
        }

        if (null !== $this->downGrade) {
            $res['DownGrade'] = $this->downGrade;
        }

        if (null !== $this->downGradeCounts) {
            $res['DownGradeCounts'] = $this->downGradeCounts;
        }

        if (null !== $this->endReason) {
            $res['EndReason'] = $this->endReason;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->gno) {
            $res['Gno'] = $this->gno;
        }

        if (null !== $this->hangupReason) {
            $res['HangupReason'] = $this->hangupReason;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isRealAnswer) {
            $res['IsRealAnswer'] = $this->isRealAnswer;
        }

        if (null !== $this->leftDisplayNumber) {
            $res['LeftDisplayNumber'] = $this->leftDisplayNumber;
        }

        if (null !== $this->mainRingingTime) {
            $res['MainRingingTime'] = $this->mainRingingTime;
        }

        if (null !== $this->realAnswerTime) {
            $res['RealAnswerTime'] = $this->realAnswerTime;
        }

        if (null !== $this->recordFile) {
            if (\is_array($this->recordFile)) {
                $res['RecordFile'] = [];
                $n1 = 0;
                foreach ($this->recordFile as $item1) {
                    $res['RecordFile'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestUniqueId) {
            $res['RequestUniqueId'] = $this->requestUniqueId;
        }

        if (null !== $this->rtcTotalDuration) {
            $res['RtcTotalDuration'] = $this->rtcTotalDuration;
        }

        if (null !== $this->sipCause) {
            $res['SipCause'] = $this->sipCause;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }

        if (null !== $this->trunkGroupKey) {
            $res['TrunkGroupKey'] = $this->trunkGroupKey;
        }

        if (null !== $this->tsiFile) {
            $res['TsiFile'] = $this->tsiFile;
        }

        if (null !== $this->tsiFileFormat) {
            $res['TsiFileFormat'] = $this->tsiFileFormat;
        }

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }

        if (null !== $this->userField) {
            if (\is_array($this->userField)) {
                $res['UserField'] = [];
                foreach ($this->userField as $key1 => $value1) {
                    $res['UserField'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->vadIn) {
            $res['VadIn'] = $this->vadIn;
        }

        if (null !== $this->vadOut) {
            $res['VadOut'] = $this->vadOut;
        }

        if (null !== $this->waitDuration) {
            $res['WaitDuration'] = $this->waitDuration;
        }

        if (null !== $this->XNumber) {
            $res['XNumber'] = $this->XNumber;
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
        if (isset($map['AgentClid'])) {
            $model->agentClid = $map['AgentClid'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['AgentNumber'])) {
            $model->agentNumber = $map['AgentNumber'];
        }

        if (isset($map['AnswerTime'])) {
            $model->answerTime = $map['AnswerTime'];
        }

        if (isset($map['BridgeDuration'])) {
            $model->bridgeDuration = $map['BridgeDuration'];
        }

        if (isset($map['BridgeTime'])) {
            $model->bridgeTime = $map['BridgeTime'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['CalleeRingingTime'])) {
            $model->calleeRingingTime = $map['CalleeRingingTime'];
        }

        if (isset($map['Clid'])) {
            $model->clid = $map['Clid'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CustomerAreaCode'])) {
            $model->customerAreaCode = $map['CustomerAreaCode'];
        }

        if (isset($map['CustomerCity'])) {
            $model->customerCity = $map['CustomerCity'];
        }

        if (isset($map['CustomerNumber'])) {
            $model->customerNumber = $map['CustomerNumber'];
        }

        if (isset($map['CustomerProvince'])) {
            $model->customerProvince = $map['CustomerProvince'];
        }

        if (isset($map['DisplayNumber'])) {
            $model->displayNumber = $map['DisplayNumber'];
        }

        if (isset($map['DownGrade'])) {
            $model->downGrade = $map['DownGrade'];
        }

        if (isset($map['DownGradeCounts'])) {
            $model->downGradeCounts = $map['DownGradeCounts'];
        }

        if (isset($map['EndReason'])) {
            $model->endReason = $map['EndReason'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Gno'])) {
            $model->gno = $map['Gno'];
        }

        if (isset($map['HangupReason'])) {
            $model->hangupReason = $map['HangupReason'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsRealAnswer'])) {
            $model->isRealAnswer = $map['IsRealAnswer'];
        }

        if (isset($map['LeftDisplayNumber'])) {
            $model->leftDisplayNumber = $map['LeftDisplayNumber'];
        }

        if (isset($map['MainRingingTime'])) {
            $model->mainRingingTime = $map['MainRingingTime'];
        }

        if (isset($map['RealAnswerTime'])) {
            $model->realAnswerTime = $map['RealAnswerTime'];
        }

        if (isset($map['RecordFile'])) {
            if (!empty($map['RecordFile'])) {
                $model->recordFile = [];
                $n1 = 0;
                foreach ($map['RecordFile'] as $item1) {
                    $model->recordFile[$n1] = recordFile::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestUniqueId'])) {
            $model->requestUniqueId = $map['RequestUniqueId'];
        }

        if (isset($map['RtcTotalDuration'])) {
            $model->rtcTotalDuration = $map['RtcTotalDuration'];
        }

        if (isset($map['SipCause'])) {
            $model->sipCause = $map['SipCause'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }

        if (isset($map['TrunkGroupKey'])) {
            $model->trunkGroupKey = $map['TrunkGroupKey'];
        }

        if (isset($map['TsiFile'])) {
            $model->tsiFile = $map['TsiFile'];
        }

        if (isset($map['TsiFileFormat'])) {
            $model->tsiFileFormat = $map['TsiFileFormat'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        if (isset($map['UserField'])) {
            if (!empty($map['UserField'])) {
                $model->userField = [];
                foreach ($map['UserField'] as $key1 => $value1) {
                    $model->userField[$key1] = $value1;
                }
            }
        }

        if (isset($map['VadIn'])) {
            $model->vadIn = $map['VadIn'];
        }

        if (isset($map['VadOut'])) {
            $model->vadOut = $map['VadOut'];
        }

        if (isset($map['WaitDuration'])) {
            $model->waitDuration = $map['WaitDuration'];
        }

        if (isset($map['XNumber'])) {
            $model->XNumber = $map['XNumber'];
        }

        return $model;
    }
}
