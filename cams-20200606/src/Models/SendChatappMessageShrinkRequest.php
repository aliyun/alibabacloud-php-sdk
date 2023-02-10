<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class SendChatappMessageShrinkRequest extends Model
{
    /**
     * @description The type of the message channel. Valid values:
     *
     *   **whatsapp**
     *   viber, which is under development
     *   line, which is under development
     *
     * @example whatsapp
     *
     * @var string
     */
    public $channelType;

    /**
     * @description The content of the message.
     *
     *   When you set the **MessageType** parameter to **text**, the **text** parameter is required and the **caption** parameter cannot be specified.
     *   When you set the **MessageType** parameter to **image**, the **link** parameter is required.
     *   When you set the **MessageType** parameter to **video**, the **link** parameter is required.
     *   When you set the **MessageType** parameter to **audio**, the **link** parameter is required and **caption** parameter is invalid.
     *   When you set the **MessageType** parameter to **document**, the **link** and **fileName** parameters are required and **caption** parameter is invalid.
     *   When you set the **MessageType** parameter to **interactive**, the **type** and **action** parameters are required.
     *   When you set the **MessageType** parameter to **contacts**, the **name** parameter is required.
     *   When you set the **MessageType** parameter to **location**, the **longitude** and **latitude** parameters are required.
     *   When you set the **MessageType** parameter to **sticker**, the **link** parameter is required, and the **caption** and **fileName** parameters are invalid.
     *   When you set the **MessageType** parameter to **reaction**, the **messageId** and **emoji** parameters are required.
     *
     * @example {\"text\": \"hello whatsapp\", \"link\": \"\", \"caption\": \"\", \"fileName\": \"\" }
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the reply message.
     *
     * @example 61851ccb2f1365b16aee****
     *
     * @var string
     */
    public $contextMessageId;

    /**
     * @description The space ID of the user.
     *
     * @example 28251486512358****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The unique identifier of the WhatsApp account that you register.
     *
     * @example 65921621816****
     *
     * @deprecated
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description The content of the fallback message.
     *
     * @example This is a fallback message.
     *
     * @var string
     */
    public $fallBackContent;

    /**
     * @description The ID of the fallback policy. You can create a fallback policy and view information about the policy in the console.
     *
     * @example S_000001
     *
     * @var string
     */
    public $fallBackId;

    /**
     * @description The phone number of the message sender.
     *
     * >  You can specify a mobile phone number that is registered for a WhatsApp account and is approved in the ChatApp console.
     * @example 1360000****
     *
     * @var string
     */
    public $from;

    /**
     * @description The ISV verification code, which is used to verify whether the user is authorized by the ISV account.
     *
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;

    /**
     * @description The message type when the ChannelType parameter is set to viber. Valid values: pormotion and transition.
     *
     * @example promotion
     *
     * @var string
     */
    public $label;

    /**
     * @description The language that is used in the message template. This parameter is required only if you set the Type parameter to **template**. For more information about language codes, see [Language codes](~~463420~~).
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description The type of the message. This parameter is required only if you set the Type parameter to **message**. Valid values:
     *
     *   **text**: the text message.
     *   **image**: the image message.
     *   **video**: the video message.
     *   **audio**: the audio message.
     *   **document**: the document message.
     *   **interactive**: the interactive message.
     *   **contacts**: the contact message.
     *   **location**: the location message.
     *   **sticker**: the sticker message.
     *   **reaction**: the reaction message.
     *
     * >  For more information about parameters of location, contacts, interactive, and media, see [Parameters of a message template](~~454530~~).
     * @example text
     *
     * @var string
     */
    public $messageType;

    /**
     * @description The payload of the button.
     *
     * @example payloadtext1,payloadtext2,payloadtext3
     *
     * @var string
     */
    public $payloadShrink;

    /**
     * @description The tag information when the ChannelType parameter is set to viber.
     *
     * @example tag
     *
     * @var string
     */
    public $tag;

    /**
     * @description The code of the message template. This parameter is required only if you set the Type parameter to **template**.
     *
     * @example 744c4b5c79c9432497a075bdfca3****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The variables of the message template.
     *
     * @var string
     */
    public $templateParamsShrink;

    /**
     * @description The phone number of the message receiver.
     *
     * @example 1390000****
     *
     * @var string
     */
    public $to;

    /**
     * @description The tracking data when the ChannelType parameter is set to viber.
     *
     * @example tracking_id:123456
     *
     * @var string
     */
    public $trackingData;

    /**
     * @description The timeout period for sending messages when the ChannelType parameter is set to viber. Valid values: 30 to 1209600, in seconds.
     *
     * @example 50
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The type of the message. Valid values:
     *
     *   **template**: a template message. A template message is sent based on a template that is created in the ChatApp console and is approved. You can send template messages at any time based on your business requirements.
     *   **message**: a custom message. You can send a custom message to a user only within 24 hours after you receive the last message from the user.
     *
     * @example template
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'channelType'          => 'ChannelType',
        'content'              => 'Content',
        'contextMessageId'     => 'ContextMessageId',
        'custSpaceId'          => 'CustSpaceId',
        'custWabaId'           => 'CustWabaId',
        'fallBackContent'      => 'FallBackContent',
        'fallBackId'           => 'FallBackId',
        'from'                 => 'From',
        'isvCode'              => 'IsvCode',
        'label'                => 'Label',
        'language'             => 'Language',
        'messageType'          => 'MessageType',
        'payloadShrink'        => 'Payload',
        'tag'                  => 'Tag',
        'templateCode'         => 'TemplateCode',
        'templateParamsShrink' => 'TemplateParams',
        'to'                   => 'To',
        'trackingData'         => 'TrackingData',
        'ttl'                  => 'Ttl',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->fallBackId) {
            $res['FallBackId'] = $this->fallBackId;
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
        if (null !== $this->payloadShrink) {
            $res['Payload'] = $this->payloadShrink;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
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
        if (isset($map['FallBackId'])) {
            $model->fallBackId = $map['FallBackId'];
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
        if (isset($map['Payload'])) {
            $model->payloadShrink = $map['Payload'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
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
