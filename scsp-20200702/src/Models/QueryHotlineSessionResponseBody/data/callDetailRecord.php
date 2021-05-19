<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\QueryHotlineSessionResponseBody\data;

use AlibabaCloud\Tea\Model;

class callDetailRecord extends Model
{
    /**
     * @var string
     */
    public $callResult;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @var string
     */
    public $outQueueTime;

    /**
     * @var int
     */
    public $callContinueTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $pickUpTime;

    /**
     * @var int
     */
    public $ringContinueTime;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $servicerId;

    /**
     * @var string
     */
    public $hangUpTime;

    /**
     * @var int
     */
    public $evaluationLevel;

    /**
     * @var string
     */
    public $hangUpRole;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var int
     */
    public $evaluationScore;

    /**
     * @var string
     */
    public $acid;

    /**
     * @var string
     */
    public $ringStartTime;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $ringEndTime;

    /**
     * @var string
     */
    public $inQueueTime;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var int
     */
    public $queueUpContinueTime;
    protected $_name = [
        'callResult'          => 'CallResult',
        'servicerName'        => 'ServicerName',
        'outQueueTime'        => 'OutQueueTime',
        'callContinueTime'    => 'CallContinueTime',
        'createTime'          => 'CreateTime',
        'pickUpTime'          => 'PickUpTime',
        'ringContinueTime'    => 'RingContinueTime',
        'calledNumber'        => 'CalledNumber',
        'servicerId'          => 'ServicerId',
        'hangUpTime'          => 'HangUpTime',
        'evaluationLevel'     => 'EvaluationLevel',
        'hangUpRole'          => 'HangUpRole',
        'memberName'          => 'MemberName',
        'evaluationScore'     => 'EvaluationScore',
        'acid'                => 'Acid',
        'ringStartTime'       => 'RingStartTime',
        'callType'            => 'CallType',
        'groupName'           => 'GroupName',
        'groupId'             => 'GroupId',
        'ringEndTime'         => 'RingEndTime',
        'inQueueTime'         => 'InQueueTime',
        'callingNumber'       => 'CallingNumber',
        'memberId'            => 'MemberId',
        'queueUpContinueTime' => 'QueueUpContinueTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callResult) {
            $res['CallResult'] = $this->callResult;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->outQueueTime) {
            $res['OutQueueTime'] = $this->outQueueTime;
        }
        if (null !== $this->callContinueTime) {
            $res['CallContinueTime'] = $this->callContinueTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->pickUpTime) {
            $res['PickUpTime'] = $this->pickUpTime;
        }
        if (null !== $this->ringContinueTime) {
            $res['RingContinueTime'] = $this->ringContinueTime;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }
        if (null !== $this->hangUpTime) {
            $res['HangUpTime'] = $this->hangUpTime;
        }
        if (null !== $this->evaluationLevel) {
            $res['EvaluationLevel'] = $this->evaluationLevel;
        }
        if (null !== $this->hangUpRole) {
            $res['HangUpRole'] = $this->hangUpRole;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->evaluationScore) {
            $res['EvaluationScore'] = $this->evaluationScore;
        }
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }
        if (null !== $this->ringStartTime) {
            $res['RingStartTime'] = $this->ringStartTime;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->ringEndTime) {
            $res['RingEndTime'] = $this->ringEndTime;
        }
        if (null !== $this->inQueueTime) {
            $res['InQueueTime'] = $this->inQueueTime;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->queueUpContinueTime) {
            $res['QueueUpContinueTime'] = $this->queueUpContinueTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callDetailRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallResult'])) {
            $model->callResult = $map['CallResult'];
        }
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['OutQueueTime'])) {
            $model->outQueueTime = $map['OutQueueTime'];
        }
        if (isset($map['CallContinueTime'])) {
            $model->callContinueTime = $map['CallContinueTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PickUpTime'])) {
            $model->pickUpTime = $map['PickUpTime'];
        }
        if (isset($map['RingContinueTime'])) {
            $model->ringContinueTime = $map['RingContinueTime'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['ServicerId'])) {
            $model->servicerId = $map['ServicerId'];
        }
        if (isset($map['HangUpTime'])) {
            $model->hangUpTime = $map['HangUpTime'];
        }
        if (isset($map['EvaluationLevel'])) {
            $model->evaluationLevel = $map['EvaluationLevel'];
        }
        if (isset($map['HangUpRole'])) {
            $model->hangUpRole = $map['HangUpRole'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['EvaluationScore'])) {
            $model->evaluationScore = $map['EvaluationScore'];
        }
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }
        if (isset($map['RingStartTime'])) {
            $model->ringStartTime = $map['RingStartTime'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RingEndTime'])) {
            $model->ringEndTime = $map['RingEndTime'];
        }
        if (isset($map['InQueueTime'])) {
            $model->inQueueTime = $map['InQueueTime'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['QueueUpContinueTime'])) {
            $model->queueUpContinueTime = $map['QueueUpContinueTime'];
        }

        return $model;
    }
}
