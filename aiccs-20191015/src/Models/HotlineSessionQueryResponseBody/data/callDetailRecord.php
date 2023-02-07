<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\HotlineSessionQueryResponseBody\data;

use AlibabaCloud\Tea\Model;

class callDetailRecord extends Model
{
    /**
     * @example 7719786
     *
     * @var string
     */
    public $acid;

    /**
     * @example 12
     *
     * @var string
     */
    public $activeTransferId;

    /**
     * @example 37
     *
     * @var int
     */
    public $callContinueTime;

    /**
     * @example normal
     *
     * @var string
     */
    public $callResult;

    /**
     * @example 1
     *
     * @var int
     */
    public $callType;

    /**
     * @example 135615*****
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example 0571773
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @example 2020-10-02 22:32:55
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 4
     *
     * @var int
     */
    public $evaluationLevel;

    /**
     * @example 4
     *
     * @var int
     */
    public $evaluationScore;

    /**
     * @example 123456
     *
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @example 2
     *
     * @var string
     */
    public $hangUpRole;

    /**
     * @example 2020-10-02 22:33:46
     *
     * @var string
     */
    public $hangUpTime;

    /**
     * @example acc1c58dab4a4dd280e3813c66
     *
     * @var string
     */
    public $id;

    /**
     * @example 2020-10-02 22:32:55
     *
     * @var string
     */
    public $inQueueTime;

    /**
     * @example 7856876
     *
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @example 2020-10-02 22:32:59
     *
     * @var string
     */
    public $outQueueTime;

    /**
     * @example 12
     *
     * @var string
     */
    public $passiveTransferId;

    /**
     * @example 1
     *
     * @var string
     */
    public $passiveTransferIdType;

    /**
     * @example 2020-10-02 22:33:09
     *
     * @var string
     */
    public $pickUpTime;

    /**
     * @example 4
     *
     * @var int
     */
    public $queueUpContinueTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $ringContinueTime;

    /**
     * @example 2020-10-02 22:33:09
     *
     * @var string
     */
    public $ringEndTime;

    /**
     * @example 2020-10-02 22:32:59
     *
     * @var string
     */
    public $ringStartTime;

    /**
     * @example 555555
     *
     * @var string
     */
    public $servicerId;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @example 1861111****
     *
     * @var string
     */
    public $trunkCall;
    protected $_name = [
        'acid'                  => 'Acid',
        'activeTransferId'      => 'ActiveTransferId',
        'callContinueTime'      => 'CallContinueTime',
        'callResult'            => 'CallResult',
        'callType'              => 'CallType',
        'calledNumber'          => 'CalledNumber',
        'callingNumber'         => 'CallingNumber',
        'createTime'            => 'CreateTime',
        'evaluationLevel'       => 'EvaluationLevel',
        'evaluationScore'       => 'EvaluationScore',
        'groupId'               => 'GroupId',
        'groupName'             => 'GroupName',
        'hangUpRole'            => 'HangUpRole',
        'hangUpTime'            => 'HangUpTime',
        'id'                    => 'Id',
        'inQueueTime'           => 'InQueueTime',
        'memberId'              => 'MemberId',
        'memberName'            => 'MemberName',
        'outQueueTime'          => 'OutQueueTime',
        'passiveTransferId'     => 'PassiveTransferId',
        'passiveTransferIdType' => 'PassiveTransferIdType',
        'pickUpTime'            => 'PickUpTime',
        'queueUpContinueTime'   => 'QueueUpContinueTime',
        'ringContinueTime'      => 'RingContinueTime',
        'ringEndTime'           => 'RingEndTime',
        'ringStartTime'         => 'RingStartTime',
        'servicerId'            => 'ServicerId',
        'servicerName'          => 'ServicerName',
        'trunkCall'             => 'TrunkCall',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return callDetailRecord
     */
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
