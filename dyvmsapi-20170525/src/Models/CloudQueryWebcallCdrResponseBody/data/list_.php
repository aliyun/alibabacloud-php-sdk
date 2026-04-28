<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryWebcallCdrResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryWebcallCdrResponseBody\data\list_\recordFile;

class list_ extends Model
{
    /**
     * @var string
     */
    public $agentName;

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
    public $calleeClid;

    /**
     * @var string
     */
    public $calleeDisplayNumber;

    /**
     * @var string
     */
    public $calleeNumber;

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
    public $detailRingingTime;

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
    public $id;

    /**
     * @var string
     */
    public $isRealAnswer;

    /**
     * @var string
     */
    public $ivrName;

    /**
     * @var string
     */
    public $numberTrunk;

    /**
     * @var string
     */
    public $qno;

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
    public $sipCause;

    /**
     * @var string
     */
    public $sipCauseStr;

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
    public $taskFileId;

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
    public $uniqueId;

    /**
     * @var string
     */
    public $waitDuration;
    protected $_name = [
        'agentName' => 'AgentName',
        'answerTime' => 'AnswerTime',
        'bridgeDuration' => 'BridgeDuration',
        'bridgeTime' => 'BridgeTime',
        'callId' => 'CallId',
        'callType' => 'CallType',
        'calleeClid' => 'CalleeClid',
        'calleeDisplayNumber' => 'CalleeDisplayNumber',
        'calleeNumber' => 'CalleeNumber',
        'calleeRingingTime' => 'CalleeRingingTime',
        'clid' => 'Clid',
        'cno' => 'Cno',
        'customerCity' => 'CustomerCity',
        'customerNumber' => 'CustomerNumber',
        'customerProvince' => 'CustomerProvince',
        'detailRingingTime' => 'DetailRingingTime',
        'displayNumber' => 'DisplayNumber',
        'downGrade' => 'DownGrade',
        'downGradeCounts' => 'DownGradeCounts',
        'endReason' => 'EndReason',
        'endTime' => 'EndTime',
        'gno' => 'Gno',
        'id' => 'Id',
        'isRealAnswer' => 'IsRealAnswer',
        'ivrName' => 'IvrName',
        'numberTrunk' => 'NumberTrunk',
        'qno' => 'Qno',
        'realAnswerTime' => 'RealAnswerTime',
        'recordFile' => 'RecordFile',
        'requestUniqueId' => 'RequestUniqueId',
        'sipCause' => 'SipCause',
        'sipCauseStr' => 'SipCauseStr',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusCode' => 'StatusCode',
        'taskFileId' => 'TaskFileId',
        'taskId' => 'TaskId',
        'totalDuration' => 'TotalDuration',
        'trunkGroupKey' => 'TrunkGroupKey',
        'uniqueId' => 'UniqueId',
        'waitDuration' => 'WaitDuration',
    ];

    public function validate()
    {
        if (\is_array($this->recordFile)) {
            Model::validateArray($this->recordFile);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
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

        if (null !== $this->calleeClid) {
            $res['CalleeClid'] = $this->calleeClid;
        }

        if (null !== $this->calleeDisplayNumber) {
            $res['CalleeDisplayNumber'] = $this->calleeDisplayNumber;
        }

        if (null !== $this->calleeNumber) {
            $res['CalleeNumber'] = $this->calleeNumber;
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

        if (null !== $this->customerCity) {
            $res['CustomerCity'] = $this->customerCity;
        }

        if (null !== $this->customerNumber) {
            $res['CustomerNumber'] = $this->customerNumber;
        }

        if (null !== $this->customerProvince) {
            $res['CustomerProvince'] = $this->customerProvince;
        }

        if (null !== $this->detailRingingTime) {
            $res['DetailRingingTime'] = $this->detailRingingTime;
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isRealAnswer) {
            $res['IsRealAnswer'] = $this->isRealAnswer;
        }

        if (null !== $this->ivrName) {
            $res['IvrName'] = $this->ivrName;
        }

        if (null !== $this->numberTrunk) {
            $res['NumberTrunk'] = $this->numberTrunk;
        }

        if (null !== $this->qno) {
            $res['Qno'] = $this->qno;
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

        if (null !== $this->sipCause) {
            $res['SipCause'] = $this->sipCause;
        }

        if (null !== $this->sipCauseStr) {
            $res['SipCauseStr'] = $this->sipCauseStr;
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

        if (null !== $this->taskFileId) {
            $res['TaskFileId'] = $this->taskFileId;
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

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }

        if (null !== $this->waitDuration) {
            $res['WaitDuration'] = $this->waitDuration;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
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

        if (isset($map['CalleeClid'])) {
            $model->calleeClid = $map['CalleeClid'];
        }

        if (isset($map['CalleeDisplayNumber'])) {
            $model->calleeDisplayNumber = $map['CalleeDisplayNumber'];
        }

        if (isset($map['CalleeNumber'])) {
            $model->calleeNumber = $map['CalleeNumber'];
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

        if (isset($map['CustomerCity'])) {
            $model->customerCity = $map['CustomerCity'];
        }

        if (isset($map['CustomerNumber'])) {
            $model->customerNumber = $map['CustomerNumber'];
        }

        if (isset($map['CustomerProvince'])) {
            $model->customerProvince = $map['CustomerProvince'];
        }

        if (isset($map['DetailRingingTime'])) {
            $model->detailRingingTime = $map['DetailRingingTime'];
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsRealAnswer'])) {
            $model->isRealAnswer = $map['IsRealAnswer'];
        }

        if (isset($map['IvrName'])) {
            $model->ivrName = $map['IvrName'];
        }

        if (isset($map['NumberTrunk'])) {
            $model->numberTrunk = $map['NumberTrunk'];
        }

        if (isset($map['Qno'])) {
            $model->qno = $map['Qno'];
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

        if (isset($map['SipCause'])) {
            $model->sipCause = $map['SipCause'];
        }

        if (isset($map['SipCauseStr'])) {
            $model->sipCauseStr = $map['SipCauseStr'];
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

        if (isset($map['TaskFileId'])) {
            $model->taskFileId = $map['TaskFileId'];
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

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        if (isset($map['WaitDuration'])) {
            $model->waitDuration = $map['WaitDuration'];
        }

        return $model;
    }
}
