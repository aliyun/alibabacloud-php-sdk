<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappMessageRequest\page;
use AlibabaCloud\Tea\Model;

class ListChatappMessageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 8613800****
     *
     * @var string
     */
    public $businessNumber;

    /**
     * @description This parameter is required.
     *
     * @example WHATSAPP
     *
     * @var string
     */
    public $channelType;

    /**
     * @example success
     *
     * @var string
     */
    public $clientAcceptStatus;

    /**
     * @description This parameter is required.
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example 1727057232686
     *
     * @var int
     */
    public $endTime;

    /**
     * @example UP
     *
     * @var string
     */
    public $eventAction;

    /**
     * @example 9292****
     *
     * @var string
     */
    public $groupMessageId;

    /**
     * @example success
     *
     * @var string
     */
    public $messageStatus;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @var page
     */
    public $page;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example 1727057232686
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 9938***
     *
     * @var string
     */
    public $templateCode;

    /**
     * @example 86138***
     *
     * @var string
     */
    public $userNumber;
    protected $_name = [
        'businessNumber' => 'BusinessNumber',
        'channelType' => 'ChannelType',
        'clientAcceptStatus' => 'ClientAcceptStatus',
        'custSpaceId' => 'CustSpaceId',
        'endTime' => 'EndTime',
        'eventAction' => 'EventAction',
        'groupMessageId' => 'GroupMessageId',
        'messageStatus' => 'MessageStatus',
        'ownerId' => 'OwnerId',
        'page' => 'Page',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startTime' => 'StartTime',
        'templateCode' => 'TemplateCode',
        'userNumber' => 'UserNumber',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
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
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->userNumber) {
            $res['UserNumber'] = $this->userNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChatappMessageRequest
     */
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
            $model->page = page::fromMap($map['Page']);
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
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['UserNumber'])) {
            $model->userNumber = $map['UserNumber'];
        }

        return $model;
    }
}
