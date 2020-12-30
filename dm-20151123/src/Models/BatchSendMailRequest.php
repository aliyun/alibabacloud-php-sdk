<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class BatchSendMailRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

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
    public $templateName;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $receiversName;

    /**
     * @var int
     */
    public $addressType;

    /**
     * @var string
     */
    public $tagName;

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
    public $clickTrace;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'templateName'         => 'TemplateName',
        'accountName'          => 'AccountName',
        'receiversName'        => 'ReceiversName',
        'addressType'          => 'AddressType',
        'tagName'              => 'TagName',
        'replyAddress'         => 'ReplyAddress',
        'replyAddressAlias'    => 'ReplyAddressAlias',
        'clickTrace'           => 'ClickTrace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->receiversName) {
            $res['ReceiversName'] = $this->receiversName;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->replyAddress) {
            $res['ReplyAddress'] = $this->replyAddress;
        }
        if (null !== $this->replyAddressAlias) {
            $res['ReplyAddressAlias'] = $this->replyAddressAlias;
        }
        if (null !== $this->clickTrace) {
            $res['ClickTrace'] = $this->clickTrace;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['ReceiversName'])) {
            $model->receiversName = $map['ReceiversName'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['ReplyAddress'])) {
            $model->replyAddress = $map['ReplyAddress'];
        }
        if (isset($map['ReplyAddressAlias'])) {
            $model->replyAddressAlias = $map['ReplyAddressAlias'];
        }
        if (isset($map['ClickTrace'])) {
            $model->clickTrace = $map['ClickTrace'];
        }

        return $model;
    }
}
