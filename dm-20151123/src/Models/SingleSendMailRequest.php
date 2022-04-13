<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class SingleSendMailRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var int
     */
    public $addressType;

    /**
     * @var string
     */
    public $clickTrace;

    /**
     * @var string
     */
    public $fromAlias;

    /**
     * @var string
     */
    public $htmlBody;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $replyAddress;

    /**
     * @var string
     */
    public $replyAddressAlias;

    /**
     * @var bool
     */
    public $replyToAddress;

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
    public $subject;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $textBody;

    /**
     * @var string
     */
    public $toAddress;
    protected $_name = [
        'accountName'          => 'AccountName',
        'addressType'          => 'AddressType',
        'clickTrace'           => 'ClickTrace',
        'fromAlias'            => 'FromAlias',
        'htmlBody'             => 'HtmlBody',
        'ownerId'              => 'OwnerId',
        'replyAddress'         => 'ReplyAddress',
        'replyAddressAlias'    => 'ReplyAddressAlias',
        'replyToAddress'       => 'ReplyToAddress',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'subject'              => 'Subject',
        'tagName'              => 'TagName',
        'textBody'             => 'TextBody',
        'toAddress'            => 'ToAddress',
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
        if (null !== $this->fromAlias) {
            $res['FromAlias'] = $this->fromAlias;
        }
        if (null !== $this->htmlBody) {
            $res['HtmlBody'] = $this->htmlBody;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->replyAddress) {
            $res['ReplyAddress'] = $this->replyAddress;
        }
        if (null !== $this->replyAddressAlias) {
            $res['ReplyAddressAlias'] = $this->replyAddressAlias;
        }
        if (null !== $this->replyToAddress) {
            $res['ReplyToAddress'] = $this->replyToAddress;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->textBody) {
            $res['TextBody'] = $this->textBody;
        }
        if (null !== $this->toAddress) {
            $res['ToAddress'] = $this->toAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SingleSendMailRequest
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
        if (isset($map['FromAlias'])) {
            $model->fromAlias = $map['FromAlias'];
        }
        if (isset($map['HtmlBody'])) {
            $model->htmlBody = $map['HtmlBody'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReplyAddress'])) {
            $model->replyAddress = $map['ReplyAddress'];
        }
        if (isset($map['ReplyAddressAlias'])) {
            $model->replyAddressAlias = $map['ReplyAddressAlias'];
        }
        if (isset($map['ReplyToAddress'])) {
            $model->replyToAddress = $map['ReplyToAddress'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TextBody'])) {
            $model->textBody = $map['TextBody'];
        }
        if (isset($map['ToAddress'])) {
            $model->toAddress = $map['ToAddress'];
        }

        return $model;
    }
}
