<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ClinkListCdrIbRequest extends Model
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
     * @var string
     */
    public $firstCallCno;

    /**
     * @var string
     */
    public $firstCallNumber;

    /**
     * @var string
     */
    public $firstCallQno;

    /**
     * @var int
     */
    public $hiddenType;

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
    public $statuses;

    /**
     * @var int
     */
    public $totalDuration;

    /**
     * @var int
     */
    public $totalDurationEnd;
    protected $_name = [
        'bridgeDuration' => 'BridgeDuration',
        'bridgeDurationEnd' => 'BridgeDurationEnd',
        'bridgeTime' => 'BridgeTime',
        'bridgeTimeEnd' => 'BridgeTimeEnd',
        'clientNumber' => 'ClientNumber',
        'cnos' => 'Cnos',
        'customerNumber' => 'CustomerNumber',
        'endTime' => 'EndTime',
        'endTimeEnd' => 'EndTimeEnd',
        'enterpriseId' => 'EnterpriseId',
        'firstCallCno' => 'FirstCallCno',
        'firstCallNumber' => 'FirstCallNumber',
        'firstCallQno' => 'FirstCallQno',
        'hiddenType' => 'HiddenType',
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
        'statuses' => 'Statuses',
        'totalDuration' => 'TotalDuration',
        'totalDurationEnd' => 'TotalDurationEnd',
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

        if (null !== $this->firstCallCno) {
            $res['FirstCallCno'] = $this->firstCallCno;
        }

        if (null !== $this->firstCallNumber) {
            $res['FirstCallNumber'] = $this->firstCallNumber;
        }

        if (null !== $this->firstCallQno) {
            $res['FirstCallQno'] = $this->firstCallQno;
        }

        if (null !== $this->hiddenType) {
            $res['HiddenType'] = $this->hiddenType;
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

        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }

        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }

        if (null !== $this->totalDurationEnd) {
            $res['TotalDurationEnd'] = $this->totalDurationEnd;
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

        if (isset($map['FirstCallCno'])) {
            $model->firstCallCno = $map['FirstCallCno'];
        }

        if (isset($map['FirstCallNumber'])) {
            $model->firstCallNumber = $map['FirstCallNumber'];
        }

        if (isset($map['FirstCallQno'])) {
            $model->firstCallQno = $map['FirstCallQno'];
        }

        if (isset($map['HiddenType'])) {
            $model->hiddenType = $map['HiddenType'];
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

        if (isset($map['Statuses'])) {
            $model->statuses = $map['Statuses'];
        }

        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }

        if (isset($map['TotalDurationEnd'])) {
            $model->totalDurationEnd = $map['TotalDurationEnd'];
        }

        return $model;
    }
}
