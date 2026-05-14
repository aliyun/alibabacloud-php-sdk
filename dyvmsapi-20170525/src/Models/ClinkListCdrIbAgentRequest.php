<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ClinkListCdrIbAgentRequest extends Model
{
    /**
     * @var int
     */
    public $agentAnswerInTime;

    /**
     * @var int
     */
    public $bridgeDuration;

    /**
     * @var int
     */
    public $bridgeDurationEnd;

    /**
     * @var int
     */
    public $bridgeTime;

    /**
     * @var int
     */
    public $bridgeTimeEnd;

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
    public $customerNumber;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $endTimeEnd;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $hiddenType;

    /**
     * @var string
     */
    public $hotlineName;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $mainUniqueId;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $qno;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $scrollId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $startTimeEnd;
    protected $_name = [
        'agentAnswerInTime' => 'AgentAnswerInTime',
        'bridgeDuration' => 'BridgeDuration',
        'bridgeDurationEnd' => 'BridgeDurationEnd',
        'bridgeTime' => 'BridgeTime',
        'bridgeTimeEnd' => 'BridgeTimeEnd',
        'clientNumber' => 'ClientNumber',
        'cno' => 'Cno',
        'customerNumber' => 'CustomerNumber',
        'endTime' => 'EndTime',
        'endTimeEnd' => 'EndTimeEnd',
        'enterpriseId' => 'EnterpriseId',
        'hiddenType' => 'HiddenType',
        'hotlineName' => 'HotlineName',
        'limit' => 'Limit',
        'mainUniqueId' => 'MainUniqueId',
        'offset' => 'Offset',
        'ownerId' => 'OwnerId',
        'qno' => 'Qno',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scrollId' => 'ScrollId',
        'startTime' => 'StartTime',
        'startTimeEnd' => 'StartTimeEnd',
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

        if (null !== $this->bridgeDuration) {
            $res['BridgeDuration'] = $this->bridgeDuration;
        }

        if (null !== $this->bridgeDurationEnd) {
            $res['BridgeDurationEnd'] = $this->bridgeDurationEnd;
        }

        if (null !== $this->bridgeTime) {
            $res['BridgeTime'] = $this->bridgeTime;
        }

        if (null !== $this->bridgeTimeEnd) {
            $res['BridgeTimeEnd'] = $this->bridgeTimeEnd;
        }

        if (null !== $this->clientNumber) {
            $res['ClientNumber'] = $this->clientNumber;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->customerNumber) {
            $res['CustomerNumber'] = $this->customerNumber;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->endTimeEnd) {
            $res['EndTimeEnd'] = $this->endTimeEnd;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->hiddenType) {
            $res['HiddenType'] = $this->hiddenType;
        }

        if (null !== $this->hotlineName) {
            $res['HotlineName'] = $this->hotlineName;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->mainUniqueId) {
            $res['MainUniqueId'] = $this->mainUniqueId;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->qno) {
            $res['Qno'] = $this->qno;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->scrollId) {
            $res['ScrollId'] = $this->scrollId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->startTimeEnd) {
            $res['StartTimeEnd'] = $this->startTimeEnd;
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

        if (isset($map['BridgeDuration'])) {
            $model->bridgeDuration = $map['BridgeDuration'];
        }

        if (isset($map['BridgeDurationEnd'])) {
            $model->bridgeDurationEnd = $map['BridgeDurationEnd'];
        }

        if (isset($map['BridgeTime'])) {
            $model->bridgeTime = $map['BridgeTime'];
        }

        if (isset($map['BridgeTimeEnd'])) {
            $model->bridgeTimeEnd = $map['BridgeTimeEnd'];
        }

        if (isset($map['ClientNumber'])) {
            $model->clientNumber = $map['ClientNumber'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CustomerNumber'])) {
            $model->customerNumber = $map['CustomerNumber'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EndTimeEnd'])) {
            $model->endTimeEnd = $map['EndTimeEnd'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['HiddenType'])) {
            $model->hiddenType = $map['HiddenType'];
        }

        if (isset($map['HotlineName'])) {
            $model->hotlineName = $map['HotlineName'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['MainUniqueId'])) {
            $model->mainUniqueId = $map['MainUniqueId'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Qno'])) {
            $model->qno = $map['Qno'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ScrollId'])) {
            $model->scrollId = $map['ScrollId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StartTimeEnd'])) {
            $model->startTimeEnd = $map['StartTimeEnd'];
        }

        return $model;
    }
}
