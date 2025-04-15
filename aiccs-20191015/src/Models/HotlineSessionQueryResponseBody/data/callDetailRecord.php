<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\HotlineSessionQueryResponseBody\data;

use AlibabaCloud\Dara\Model;

class callDetailRecord extends Model
{
    /**
     * @var string
     */
    public $acid;

    /**
     * @var string
     */
    public $activeTransferId;

    /**
     * @var int
     */
    public $callContinueTime;

    /**
     * @var string
     */
    public $callResult;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $evaluationLevel;

    /**
     * @var int
     */
    public $evaluationScore;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $hangUpRole;

    /**
     * @var string
     */
    public $hangUpTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $inQueueTime;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $outQueueTime;

    /**
     * @var string
     */
    public $passiveTransferId;

    /**
     * @var string
     */
    public $passiveTransferIdType;

    /**
     * @var string
     */
    public $pickUpTime;

    /**
     * @var int
     */
    public $queueUpContinueTime;

    /**
     * @var int
     */
    public $ringContinueTime;

    /**
     * @var string
     */
    public $ringEndTime;

    /**
     * @var string
     */
    public $ringStartTime;

    /**
     * @var string
     */
    public $servicerId;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @var string
     */
    public $trunkCall;
    protected $_name = [
        'acid' => 'Acid',
        'activeTransferId' => 'ActiveTransferId',
        'callContinueTime' => 'CallContinueTime',
        'callResult' => 'CallResult',
        'callType' => 'CallType',
        'calledNumber' => 'CalledNumber',
        'callingNumber' => 'CallingNumber',
        'createTime' => 'CreateTime',
        'evaluationLevel' => 'EvaluationLevel',
        'evaluationScore' => 'EvaluationScore',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'hangUpRole' => 'HangUpRole',
        'hangUpTime' => 'HangUpTime',
        'id' => 'Id',
        'inQueueTime' => 'InQueueTime',
        'memberId' => 'MemberId',
        'memberName' => 'MemberName',
        'outQueueTime' => 'OutQueueTime',
        'passiveTransferId' => 'PassiveTransferId',
        'passiveTransferIdType' => 'PassiveTransferIdType',
        'pickUpTime' => 'PickUpTime',
        'queueUpContinueTime' => 'QueueUpContinueTime',
        'ringContinueTime' => 'RingContinueTime',
        'ringEndTime' => 'RingEndTime',
        'ringStartTime' => 'RingStartTime',
        'servicerId' => 'ServicerId',
        'servicerName' => 'ServicerName',
        'trunkCall' => 'TrunkCall',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }

        if (null !== $this->activeTransferId) {
            $res['ActiveTransferId'] = $this->activeTransferId;
        }

        if (null !== $this->callContinueTime) {
            $res['CallContinueTime'] = $this->callContinueTime;
        }

        if (null !== $this->callResult) {
            $res['CallResult'] = $this->callResult;
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->evaluationLevel) {
            $res['EvaluationLevel'] = $this->evaluationLevel;
        }

        if (null !== $this->evaluationScore) {
            $res['EvaluationScore'] = $this->evaluationScore;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->hangUpRole) {
            $res['HangUpRole'] = $this->hangUpRole;
        }

        if (null !== $this->hangUpTime) {
            $res['HangUpTime'] = $this->hangUpTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->inQueueTime) {
            $res['InQueueTime'] = $this->inQueueTime;
        }

        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }

        if (null !== $this->outQueueTime) {
            $res['OutQueueTime'] = $this->outQueueTime;
        }

        if (null !== $this->passiveTransferId) {
            $res['PassiveTransferId'] = $this->passiveTransferId;
        }

        if (null !== $this->passiveTransferIdType) {
            $res['PassiveTransferIdType'] = $this->passiveTransferIdType;
        }

        if (null !== $this->pickUpTime) {
            $res['PickUpTime'] = $this->pickUpTime;
        }

        if (null !== $this->queueUpContinueTime) {
            $res['QueueUpContinueTime'] = $this->queueUpContinueTime;
        }

        if (null !== $this->ringContinueTime) {
            $res['RingContinueTime'] = $this->ringContinueTime;
        }

        if (null !== $this->ringEndTime) {
            $res['RingEndTime'] = $this->ringEndTime;
        }

        if (null !== $this->ringStartTime) {
            $res['RingStartTime'] = $this->ringStartTime;
        }

        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }

        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }

        if (null !== $this->trunkCall) {
            $res['TrunkCall'] = $this->trunkCall;
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
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }

        if (isset($map['ActiveTransferId'])) {
            $model->activeTransferId = $map['ActiveTransferId'];
        }

        if (isset($map['CallContinueTime'])) {
            $model->callContinueTime = $map['CallContinueTime'];
        }

        if (isset($map['CallResult'])) {
            $model->callResult = $map['CallResult'];
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EvaluationLevel'])) {
            $model->evaluationLevel = $map['EvaluationLevel'];
        }

        if (isset($map['EvaluationScore'])) {
            $model->evaluationScore = $map['EvaluationScore'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['HangUpRole'])) {
            $model->hangUpRole = $map['HangUpRole'];
        }

        if (isset($map['HangUpTime'])) {
            $model->hangUpTime = $map['HangUpTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InQueueTime'])) {
            $model->inQueueTime = $map['InQueueTime'];
        }

        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        if (isset($map['OutQueueTime'])) {
            $model->outQueueTime = $map['OutQueueTime'];
        }

        if (isset($map['PassiveTransferId'])) {
            $model->passiveTransferId = $map['PassiveTransferId'];
        }

        if (isset($map['PassiveTransferIdType'])) {
            $model->passiveTransferIdType = $map['PassiveTransferIdType'];
        }

        if (isset($map['PickUpTime'])) {
            $model->pickUpTime = $map['PickUpTime'];
        }

        if (isset($map['QueueUpContinueTime'])) {
            $model->queueUpContinueTime = $map['QueueUpContinueTime'];
        }

        if (isset($map['RingContinueTime'])) {
            $model->ringContinueTime = $map['RingContinueTime'];
        }

        if (isset($map['RingEndTime'])) {
            $model->ringEndTime = $map['RingEndTime'];
        }

        if (isset($map['RingStartTime'])) {
            $model->ringStartTime = $map['RingStartTime'];
        }

        if (isset($map['ServicerId'])) {
            $model->servicerId = $map['ServicerId'];
        }

        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }

        if (isset($map['TrunkCall'])) {
            $model->trunkCall = $map['TrunkCall'];
        }

        return $model;
    }
}
