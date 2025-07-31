<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class SendChatappMessageShrinkRequest extends Model
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
     * @description The message content.
     *
     **Notes on WhatsApp messages:**
     *
     *   If you set **messageType** to **text**, you must specify **text** and must not specify **Caption**.
     *   If you set **messageType** to **image**, you must specify **Link**.
     *   If you set **messageType** to **video**, you must specify **Link**.
     *   If you set **messageType** to **audio**, **Link** is required and **Caption** is invalid.
     *   If you set **messageType** to **document**, **Link** and **FileName** are required and **Caption** is invalid.
     *   If you set **messageType** to **interactive**, you must specify **type** and **action**.
     *   If you set **messageType** to **contacts**, you must specify **name**.
     *   If you set **messageType** to **location**, you must specify **longitude** and **latitude**.
     *   If you set **messageType** to **sticker**, you must specify **Link**, and **Caption** and **FileName** are invalid.
     *   If you set **messageType** to **reaction**, you must specify **messageId** and **emoji**.
     *
     **Notes on Viber messages:**
     *
     *   If you set **messageType** to **text**, you must specify **text**.
     *   If you set **messageType** to **image**, you must specify **link**.
     *   If you set **messageType** to **video**, you must specify **link**, **thumbnail**, **fileSize**, and **duration**.
     *   If you set **messageType** to **document**, you must specify **link**, **fileName**, and **fileType**.
     *   If you set **messageType** to **text_button**, you must specify **text**, **caption**, and **action**.
     *   If you set **messageType** to **text_image_button**, you must specify **text**, **link**, **caption**, and **action**.
     *   If you set **messageType** to **text_video**, you must specify **text**, **link**, **thumbnail**, **fileSize**, and **duration**.
     *   If you set **messageType** to **text_video_button**, you must specify **text**, **link**, **thumbnail**, **fileSize**, **duration**, and **caption**. In addition, you must not specify **action**.
     *
     * @example {\\"text\\": \\"hello whatsapp\\", \\"link\\": \\"\\", \\"caption\\": \\"\\", \\"fileName\\": \\"\\" }
     *
     * @var string
     */
    public $content;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $contextMessageId;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @example 示例值
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
     * @example 示例值示例值
     *
     * @var string
     */
    public $fallBackRule;

    /**
     * @var string
     */
    public $flowActionShrink;

    /**
     * @description This parameter is required.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $from;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $isvCode;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $label;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $language;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $messageType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The payload of the button.
     *
     * @example payloadtext1,payloadtext2,payloadtext3
     *
     * @var string
     */
    public $payloadShrink;

    /**
     * @var string
     */
    public $productActionShrink;

    /**
     * @example individual
     *
     * @var string
     */
    public $recipientType;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

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
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $templateCode;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateParamsShrink;

    /**
     * @description This parameter is required.
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $to;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $trackingData;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @description This parameter is required.
     *
     * @example 示例值
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'channelType' => 'ChannelType',
        'content' => 'Content',
        'contextMessageId' => 'ContextMessageId',
        'custSpaceId' => 'CustSpaceId',
        'custWabaId' => 'CustWabaId',
        'fallBackContent' => 'FallBackContent',
        'fallBackDuration' => 'FallBackDuration',
        'fallBackId' => 'FallBackId',
        'fallBackRule' => 'FallBackRule',
        'flowActionShrink' => 'FlowAction',
        'from' => 'From',
        'isvCode' => 'IsvCode',
        'label' => 'Label',
        'language' => 'Language',
        'messageType' => 'MessageType',
        'ownerId' => 'OwnerId',
        'payloadShrink' => 'Payload',
        'productActionShrink' => 'ProductAction',
        'recipientType' => 'RecipientType',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tag' => 'Tag',
        'taskId' => 'TaskId',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
        'templateParamsShrink' => 'TemplateParams',
        'to' => 'To',
        'trackingData' => 'TrackingData',
        'ttl' => 'Ttl',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contextMessageId) {
            $res['ContextMessageId'] = $this->contextMessageId;
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
        if (null !== $this->flowActionShrink) {
            $res['FlowAction'] = $this->flowActionShrink;
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
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payloadShrink) {
            $res['Payload'] = $this->payloadShrink;
        }
        if (null !== $this->productActionShrink) {
            $res['ProductAction'] = $this->productActionShrink;
        }
        if (null !== $this->recipientType) {
            $res['RecipientType'] = $this->recipientType;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (null !== $this->templateParamsShrink) {
            $res['TemplateParams'] = $this->templateParamsShrink;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->trackingData) {
            $res['TrackingData'] = $this->trackingData;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendChatappMessageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContextMessageId'])) {
            $model->contextMessageId = $map['ContextMessageId'];
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
        if (isset($map['FlowAction'])) {
            $model->flowActionShrink = $map['FlowAction'];
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
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Payload'])) {
            $model->payloadShrink = $map['Payload'];
        }
        if (isset($map['ProductAction'])) {
            $model->productActionShrink = $map['ProductAction'];
        }
        if (isset($map['RecipientType'])) {
            $model->recipientType = $map['RecipientType'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
        if (isset($map['TemplateParams'])) {
            $model->templateParamsShrink = $map['TemplateParams'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['TrackingData'])) {
            $model->trackingData = $map['TrackingData'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
