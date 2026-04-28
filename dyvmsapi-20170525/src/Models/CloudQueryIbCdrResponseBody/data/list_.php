<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryIbCdrResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryIbCdrResponseBody\data\list_\recordFile;

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
    public $callType;

    /**
     * @var string
     */
    public $calleeNumber;

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
    public $endReason;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $hotline;

    /**
     * @var string
     */
    public $ivrName;

    /**
     * @var int
     */
    public $leaveQueueCode;

    /**
     * @var string
     */
    public $numberTrunk;

    /**
     * @var string
     */
    public $numberTrunkAreaCode;

    /**
     * @var string
     */
    public $qno;

    /**
     * @var recordFile[]
     */
    public $recordFile;

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
    public $totalDuration;

    /**
     * @var string
     */
    public $uniqueId;

    /**
     * @var mixed[]
     */
    public $userField;
    protected $_name = [
        'agentName' => 'AgentName',
        'answerTime' => 'AnswerTime',
        'bridgeDuration' => 'BridgeDuration',
        'bridgeTime' => 'BridgeTime',
        'callType' => 'CallType',
        'calleeNumber' => 'CalleeNumber',
        'cno' => 'Cno',
        'customerAreaCode' => 'CustomerAreaCode',
        'customerCity' => 'CustomerCity',
        'customerNumber' => 'CustomerNumber',
        'customerProvince' => 'CustomerProvince',
        'endReason' => 'EndReason',
        'endTime' => 'EndTime',
        'hotline' => 'Hotline',
        'ivrName' => 'IvrName',
        'leaveQueueCode' => 'LeaveQueueCode',
        'numberTrunk' => 'NumberTrunk',
        'numberTrunkAreaCode' => 'NumberTrunkAreaCode',
        'qno' => 'Qno',
        'recordFile' => 'RecordFile',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusCode' => 'StatusCode',
        'totalDuration' => 'TotalDuration',
        'uniqueId' => 'UniqueId',
        'userField' => 'UserField',
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

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->calleeNumber) {
            $res['CalleeNumber'] = $this->calleeNumber;
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

        if (null !== $this->endReason) {
            $res['EndReason'] = $this->endReason;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->hotline) {
            $res['Hotline'] = $this->hotline;
        }

        if (null !== $this->ivrName) {
            $res['IvrName'] = $this->ivrName;
        }

        if (null !== $this->leaveQueueCode) {
            $res['LeaveQueueCode'] = $this->leaveQueueCode;
        }

        if (null !== $this->numberTrunk) {
            $res['NumberTrunk'] = $this->numberTrunk;
        }

        if (null !== $this->numberTrunkAreaCode) {
            $res['NumberTrunkAreaCode'] = $this->numberTrunkAreaCode;
        }

        if (null !== $this->qno) {
            $res['Qno'] = $this->qno;
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

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
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

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['CalleeNumber'])) {
            $model->calleeNumber = $map['CalleeNumber'];
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

        if (isset($map['EndReason'])) {
            $model->endReason = $map['EndReason'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Hotline'])) {
            $model->hotline = $map['Hotline'];
        }

        if (isset($map['IvrName'])) {
            $model->ivrName = $map['IvrName'];
        }

        if (isset($map['LeaveQueueCode'])) {
            $model->leaveQueueCode = $map['LeaveQueueCode'];
        }

        if (isset($map['NumberTrunk'])) {
            $model->numberTrunk = $map['NumberTrunk'];
        }

        if (isset($map['NumberTrunkAreaCode'])) {
            $model->numberTrunkAreaCode = $map['NumberTrunkAreaCode'];
        }

        if (isset($map['Qno'])) {
            $model->qno = $map['Qno'];
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

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
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

        return $model;
    }
}
