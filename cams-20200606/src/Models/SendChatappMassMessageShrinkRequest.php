<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class SendChatappMassMessageShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $channelType;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $fallBackContent;

    /**
     * @var int
     */
    public $fallBackDuration;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $fallBackId;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $fallBackRule;

    /**
     * @description This parameter is required.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $from;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $isvCode;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $label;

    /**
     * @description This parameter is required.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $language;

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
    public $senderListShrink;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $tag;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $templateCode;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $templateName;

    /**
     * @example 46
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'channelType' => 'ChannelType',
        'custSpaceId' => 'CustSpaceId',
        'custWabaId' => 'CustWabaId',
        'fallBackContent' => 'FallBackContent',
        'fallBackDuration' => 'FallBackDuration',
        'fallBackId' => 'FallBackId',
        'fallBackRule' => 'FallBackRule',
        'from' => 'From',
        'isvCode' => 'IsvCode',
        'label' => 'Label',
        'language' => 'Language',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'senderListShrink' => 'SenderList',
        'tag' => 'Tag',
        'taskId' => 'TaskId',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
        'ttl' => 'Ttl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->fallBackContent) {
            $res['FallBackContent'] = $this->fallBackContent;
        }
        if (null !== $this->fallBackDuration) {
            $res['FallBackDuration'] = $this->fallBackDuration;
        }
        if (null !== $this->fallBackId) {
            $res['FallBackId'] = $this->fallBackId;
        }
        if (null !== $this->fallBackRule) {
            $res['FallBackRule'] = $this->fallBackRule;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->senderListShrink) {
            $res['SenderList'] = $this->senderListShrink;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendChatappMassMessageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['FallBackContent'])) {
            $model->fallBackContent = $map['FallBackContent'];
        }
        if (isset($map['FallBackDuration'])) {
            $model->fallBackDuration = $map['FallBackDuration'];
        }
        if (isset($map['FallBackId'])) {
            $model->fallBackId = $map['FallBackId'];
        }
        if (isset($map['FallBackRule'])) {
            $model->fallBackRule = $map['FallBackRule'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SenderList'])) {
            $model->senderListShrink = $map['SenderList'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
