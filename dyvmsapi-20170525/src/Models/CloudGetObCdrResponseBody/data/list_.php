<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetObCdrResponseBody\data;

use AlibabaCloud\Dara\Model;

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
    public $callId;

    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $callTypeCode;

    /**
     * @var string
     */
    public $calleeAreaCode;

    /**
     * @var string
     */
    public $calleeNumber;

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
    public $displayNumber;

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
    public $joinQueueTime;

    /**
     * @var string
     */
    public $mainCallType;

    /**
     * @var string
     */
    public $mainUniqueId;

    /**
     * @var string
     */
    public $qno;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string[]
     */
    public $recordFile;

    /**
     * @var string
     */
    public $ringingTime;

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
    public $taskName;

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
    public $uniqueId;

    /**
     * @var string
     */
    public $XNumber;
    protected $_name = [
        'agentName' => 'AgentName',
        'answerTime' => 'AnswerTime',
        'callId' => 'CallId',
        'callType' => 'CallType',
        'callTypeCode' => 'CallTypeCode',
        'calleeAreaCode' => 'CalleeAreaCode',
        'calleeNumber' => 'CalleeNumber',
        'clid' => 'Clid',
        'cno' => 'Cno',
        'displayNumber' => 'DisplayNumber',
        'endReason' => 'EndReason',
        'endTime' => 'EndTime',
        'gno' => 'Gno',
        'id' => 'Id',
        'joinQueueTime' => 'JoinQueueTime',
        'mainCallType' => 'MainCallType',
        'mainUniqueId' => 'MainUniqueId',
        'qno' => 'Qno',
        'queueName' => 'QueueName',
        'recordFile' => 'RecordFile',
        'ringingTime' => 'RingingTime',
        'sipCause' => 'SipCause',
        'sipCauseStr' => 'SipCauseStr',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusCode' => 'StatusCode',
        'taskName' => 'TaskName',
        'totalDuration' => 'TotalDuration',
        'trunkGroupKey' => 'TrunkGroupKey',
        'tsiFile' => 'TsiFile',
        'uniqueId' => 'UniqueId',
        'XNumber' => 'XNumber',
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

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->callTypeCode) {
            $res['CallTypeCode'] = $this->callTypeCode;
        }

        if (null !== $this->calleeAreaCode) {
            $res['CalleeAreaCode'] = $this->calleeAreaCode;
        }

        if (null !== $this->calleeNumber) {
            $res['CalleeNumber'] = $this->calleeNumber;
        }

        if (null !== $this->clid) {
            $res['Clid'] = $this->clid;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->displayNumber) {
            $res['DisplayNumber'] = $this->displayNumber;
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

        if (null !== $this->joinQueueTime) {
            $res['JoinQueueTime'] = $this->joinQueueTime;
        }

        if (null !== $this->mainCallType) {
            $res['MainCallType'] = $this->mainCallType;
        }

        if (null !== $this->mainUniqueId) {
            $res['MainUniqueId'] = $this->mainUniqueId;
        }

        if (null !== $this->qno) {
            $res['Qno'] = $this->qno;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->recordFile) {
            if (\is_array($this->recordFile)) {
                $res['RecordFile'] = [];
                $n1 = 0;
                foreach ($this->recordFile as $item1) {
                    $res['RecordFile'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ringingTime) {
            $res['RingingTime'] = $this->ringingTime;
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

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['AnswerTime'])) {
            $model->answerTime = $map['AnswerTime'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['CallTypeCode'])) {
            $model->callTypeCode = $map['CallTypeCode'];
        }

        if (isset($map['CalleeAreaCode'])) {
            $model->calleeAreaCode = $map['CalleeAreaCode'];
        }

        if (isset($map['CalleeNumber'])) {
            $model->calleeNumber = $map['CalleeNumber'];
        }

        if (isset($map['Clid'])) {
            $model->clid = $map['Clid'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['DisplayNumber'])) {
            $model->displayNumber = $map['DisplayNumber'];
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

        if (isset($map['JoinQueueTime'])) {
            $model->joinQueueTime = $map['JoinQueueTime'];
        }

        if (isset($map['MainCallType'])) {
            $model->mainCallType = $map['MainCallType'];
        }

        if (isset($map['MainUniqueId'])) {
            $model->mainUniqueId = $map['MainUniqueId'];
        }

        if (isset($map['Qno'])) {
            $model->qno = $map['Qno'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['RecordFile'])) {
            if (!empty($map['RecordFile'])) {
                $model->recordFile = [];
                $n1 = 0;
                foreach ($map['RecordFile'] as $item1) {
                    $model->recordFile[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RingingTime'])) {
            $model->ringingTime = $map['RingingTime'];
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

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
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

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        if (isset($map['XNumber'])) {
            $model->XNumber = $map['XNumber'];
        }

        return $model;
    }
}
