<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ClinkListCdrObRequest extends Model
{
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
     * @var int
     */
    public $callType;

    /**
     * @var string
     */
    public $clientNumber;

    /**
     * @var string
     */
    public $cnos;

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
    public $leftClid;

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
    public $qnos;

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
     * @var string
     */
    public $scrollSearch;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $startTimeEnd;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $totalDuration;

    /**
     * @var int
     */
    public $totalDurationEnd;

    /**
     * @var string
     */
    public $xnumber;
    protected $_name = [
        'bridgeDuration' => 'BridgeDuration',
        'bridgeDurationEnd' => 'BridgeDurationEnd',
        'bridgeTime' => 'BridgeTime',
        'bridgeTimeEnd' => 'BridgeTimeEnd',
        'callType' => 'CallType',
        'clientNumber' => 'ClientNumber',
        'cnos' => 'Cnos',
        'customerNumber' => 'CustomerNumber',
        'endTime' => 'EndTime',
        'endTimeEnd' => 'EndTimeEnd',
        'enterpriseId' => 'EnterpriseId',
        'hiddenType' => 'HiddenType',
        'leftClid' => 'LeftClid',
        'limit' => 'Limit',
        'mainUniqueId' => 'MainUniqueId',
        'offset' => 'Offset',
        'ownerId' => 'OwnerId',
        'qnos' => 'Qnos',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scrollId' => 'ScrollId',
        'scrollSearch' => 'ScrollSearch',
        'startTime' => 'StartTime',
        'startTimeEnd' => 'StartTimeEnd',
        'status' => 'Status',
        'taskName' => 'TaskName',
        'totalDuration' => 'TotalDuration',
        'totalDurationEnd' => 'TotalDurationEnd',
        'xnumber' => 'Xnumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->clientNumber) {
            $res['ClientNumber'] = $this->clientNumber;
        }

        if (null !== $this->cnos) {
            $res['Cnos'] = $this->cnos;
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

        if (null !== $this->leftClid) {
            $res['LeftClid'] = $this->leftClid;
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

        if (null !== $this->qnos) {
            $res['Qnos'] = $this->qnos;
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

        if (null !== $this->scrollSearch) {
            $res['ScrollSearch'] = $this->scrollSearch;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->startTimeEnd) {
            $res['StartTimeEnd'] = $this->startTimeEnd;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }

        if (null !== $this->totalDurationEnd) {
            $res['TotalDurationEnd'] = $this->totalDurationEnd;
        }

        if (null !== $this->xnumber) {
            $res['Xnumber'] = $this->xnumber;
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

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['ClientNumber'])) {
            $model->clientNumber = $map['ClientNumber'];
        }

        if (isset($map['Cnos'])) {
            $model->cnos = $map['Cnos'];
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

        if (isset($map['LeftClid'])) {
            $model->leftClid = $map['LeftClid'];
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

        if (isset($map['Qnos'])) {
            $model->qnos = $map['Qnos'];
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

        if (isset($map['ScrollSearch'])) {
            $model->scrollSearch = $map['ScrollSearch'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StartTimeEnd'])) {
            $model->startTimeEnd = $map['StartTimeEnd'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }

        if (isset($map['TotalDurationEnd'])) {
            $model->totalDurationEnd = $map['TotalDurationEnd'];
        }

        if (isset($map['Xnumber'])) {
            $model->xnumber = $map['Xnumber'];
        }

        return $model;
    }
}
