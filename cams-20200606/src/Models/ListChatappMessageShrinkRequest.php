<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class ListChatappMessageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $businessNumber;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $clientAcceptStatus;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $endTimeStr;

    /**
     * @var string
     */
    public $eventAction;

    /**
     * @var string
     */
    public $groupMessageId;

    /**
     * @var string
     */
    public $messageStatus;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pageShrink;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $startTimeStr;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $userNumber;
    protected $_name = [
        'businessNumber' => 'BusinessNumber',
        'channelType' => 'ChannelType',
        'clientAcceptStatus' => 'ClientAcceptStatus',
        'custSpaceId' => 'CustSpaceId',
        'endTime' => 'EndTime',
        'endTimeStr' => 'EndTimeStr',
        'eventAction' => 'EventAction',
        'groupMessageId' => 'GroupMessageId',
        'messageStatus' => 'MessageStatus',
        'ownerId' => 'OwnerId',
        'pageShrink' => 'Page',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startTime' => 'StartTime',
        'startTimeStr' => 'StartTimeStr',
        'templateCode' => 'TemplateCode',
        'userNumber' => 'UserNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessNumber) {
            $res['BusinessNumber'] = $this->businessNumber;
        }

        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->clientAcceptStatus) {
            $res['ClientAcceptStatus'] = $this->clientAcceptStatus;
        }

        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->endTimeStr) {
            $res['EndTimeStr'] = $this->endTimeStr;
        }

        if (null !== $this->eventAction) {
            $res['EventAction'] = $this->eventAction;
        }

        if (null !== $this->groupMessageId) {
            $res['GroupMessageId'] = $this->groupMessageId;
        }

        if (null !== $this->messageStatus) {
            $res['MessageStatus'] = $this->messageStatus;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pageShrink) {
            $res['Page'] = $this->pageShrink;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->startTimeStr) {
            $res['StartTimeStr'] = $this->startTimeStr;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->userNumber) {
            $res['UserNumber'] = $this->userNumber;
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
        if (isset($map['BusinessNumber'])) {
            $model->businessNumber = $map['BusinessNumber'];
        }

        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['ClientAcceptStatus'])) {
            $model->clientAcceptStatus = $map['ClientAcceptStatus'];
        }

        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EndTimeStr'])) {
            $model->endTimeStr = $map['EndTimeStr'];
        }

        if (isset($map['EventAction'])) {
            $model->eventAction = $map['EventAction'];
        }

        if (isset($map['GroupMessageId'])) {
            $model->groupMessageId = $map['GroupMessageId'];
        }

        if (isset($map['MessageStatus'])) {
            $model->messageStatus = $map['MessageStatus'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Page'])) {
            $model->pageShrink = $map['Page'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StartTimeStr'])) {
            $model->startTimeStr = $map['StartTimeStr'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['UserNumber'])) {
            $model->userNumber = $map['UserNumber'];
        }

        return $model;
    }
}
