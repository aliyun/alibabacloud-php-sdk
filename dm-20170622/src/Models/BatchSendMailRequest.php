<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20170622\Models;

use AlibabaCloud\Tea\Model;

class BatchSendMailRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $accountName;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $addressType;

    /**
     * @var string
     */
    public $clickTrace;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $receiversName;

    /**
     * @var string
     */
    public $replyAddress;

    /**
     * @var string
     */
    public $replyAddressAlias;

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
    public $tagName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $unSubscribeFilterLevel;

    /**
     * @var string
     */
    public $unSubscribeLinkType;
    protected $_name = [
        'accountName'            => 'AccountName',
        'addressType'            => 'AddressType',
        'clickTrace'             => 'ClickTrace',
        'ownerId'                => 'OwnerId',
        'receiversName'          => 'ReceiversName',
        'replyAddress'           => 'ReplyAddress',
        'replyAddressAlias'      => 'ReplyAddressAlias',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'tagName'                => 'TagName',
        'templateName'           => 'TemplateName',
        'unSubscribeFilterLevel' => 'UnSubscribeFilterLevel',
        'unSubscribeLinkType'    => 'UnSubscribeLinkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->clickTrace) {
            $res['ClickTrace'] = $this->clickTrace;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->receiversName) {
            $res['ReceiversName'] = $this->receiversName;
        }
        if (null !== $this->replyAddress) {
            $res['ReplyAddress'] = $this->replyAddress;
        }
        if (null !== $this->replyAddressAlias) {
            $res['ReplyAddressAlias'] = $this->replyAddressAlias;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->unSubscribeFilterLevel) {
            $res['UnSubscribeFilterLevel'] = $this->unSubscribeFilterLevel;
        }
        if (null !== $this->unSubscribeLinkType) {
            $res['UnSubscribeLinkType'] = $this->unSubscribeLinkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSendMailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['ClickTrace'])) {
            $model->clickTrace = $map['ClickTrace'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReceiversName'])) {
            $model->receiversName = $map['ReceiversName'];
        }
        if (isset($map['ReplyAddress'])) {
            $model->replyAddress = $map['ReplyAddress'];
        }
        if (isset($map['ReplyAddressAlias'])) {
            $model->replyAddressAlias = $map['ReplyAddressAlias'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['UnSubscribeFilterLevel'])) {
            $model->unSubscribeFilterLevel = $map['UnSubscribeFilterLevel'];
        }
        if (isset($map['UnSubscribeLinkType'])) {
            $model->unSubscribeLinkType = $map['UnSubscribeLinkType'];
        }

        return $model;
    }
}
