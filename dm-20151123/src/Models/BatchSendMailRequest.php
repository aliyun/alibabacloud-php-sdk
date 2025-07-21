<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class BatchSendMailRequest extends Model
{
    /**
     * @description The sending address configured in the management console.
     *
     * This parameter is required.
     *
     * @example test@example.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @description - 0: Random account
     * - 1: Sending address
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $addressType;

    /**
     * @description - 1: Enable data tracking function
     * - 0 (default): Disable data tracking function
     *
     * @example 0
     *
     * @var string
     */
    public $clickTrace;

    /**
     * @description Currently, the standard fields that can be added to the email header are Message-ID, List-Unsubscribe, and List-Unsubscribe-Post. Standard fields will overwrite the existing values in the email header, while non-standard fields must start with X-User- and will be appended to the email header. Currently, up to 10 headers can be passed in JSON format, and both standard and non-standard fields must comply with the syntax requirements for headers.
     *
     * @example {
     * "Message-ID": "<msg0001@example.com>",
     * "X-User-UID1": "UID-1-000001",
     * "X-User-UID2": "UID-2-000001"
     * }
     *
     * @var string
     */
    public $headers;

    /**
     * @description dedicated IP pool ID. Users who have purchased an dedicated IP can use this parameter to specify the outgoing IP for this send operation.
     *
     * @example xxx
     *
     * @var string
     */
    public $ipPoolId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the recipient list that has been created and uploaded with recipients. Note: The recipient list should not be deleted until at least 10 minutes after the task is triggered, otherwise it may cause sending failure.
     *
     * This parameter is required.
     *
     * @example test2
     *
     * @var string
     */
    public $receiversName;

    /**
     * @description Reply address
     *
     * @example test2***@example.net
     *
     * @var string
     */
    public $replyAddress;

    /**
     * @description Alias for the reply address
     *
     * @example Lucy
     *
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
     * @description Email tag name.
     *
     * @example test3
     *
     * @var string
     */
    public $tagName;

    /**
     * @description The name of the template that has been created and approved in advance.
     *
     * This parameter is required.
     *
     * @example test1
     *
     * @var string
     */
    public $templateName;

    /**
     * @description Filtering level. Refer to the [Unsubscribe Function Link Generation and Filtering Mechanism](https://help.aliyun.com/document_detail/2689048.html) document.
     * - disabled: No filtering
     * - default: Use the default strategy, bulk addresses use sender address-level filtering
     * - mailfrom: Sender address-level filtering
     * - mailfrom_domain: Sender domain-level filtering
     * - edm_id: Account-level filtering
     *
     * @example mailfrom_domain
     *
     * @var string
     */
    public $unSubscribeFilterLevel;

    /**
     * @description The type of generated unsubscribe link. Refer to the [Unsubscribe Function Link Generation and Filtering Mechanism](https://help.aliyun.com/document_detail/2689048.html) document.
     * - disabled: Do not generate
     * - default: Use the default strategy: Generate an unsubscribe link when a bulk-type sending address sends to specific domains, such as those containing keywords like "gmail", "yahoo",
     * "google", "aol.com", "hotmail",
     * "outlook", "ymail.com", etc.
     * - zh-cn: Generate, for future content preparation
     * - en-us: Generate, for future content preparation
     *
     * @example default
     *
     * @var string
     */
    public $unSubscribeLinkType;
    protected $_name = [
        'accountName' => 'AccountName',
        'addressType' => 'AddressType',
        'clickTrace' => 'ClickTrace',
        'headers' => 'Headers',
        'ipPoolId' => 'IpPoolId',
        'ownerId' => 'OwnerId',
        'receiversName' => 'ReceiversName',
        'replyAddress' => 'ReplyAddress',
        'replyAddressAlias' => 'ReplyAddressAlias',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tagName' => 'TagName',
        'templateName' => 'TemplateName',
        'unSubscribeFilterLevel' => 'UnSubscribeFilterLevel',
        'unSubscribeLinkType' => 'UnSubscribeLinkType',
    ];

    public function validate() {}

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
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }
        if (null !== $this->ipPoolId) {
            $res['IpPoolId'] = $this->ipPoolId;
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
        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }
        if (isset($map['IpPoolId'])) {
            $model->ipPoolId = $map['IpPoolId'];
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
