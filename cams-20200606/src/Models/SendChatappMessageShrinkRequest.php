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
     *   viber (under development)
     *   line (under development)
     *
     * @example whstsapp
     *
     * @var string
     */
    public $channelType;

    /**
     * @description The content of the message.
     *
     **
     *
     **Note** The **Content** parameter is required if you set the **Type** parameter to **message**.
     *
     * @example {\"text\": \"hello whatsapp\", \"link\": \"\", \"caption\": \"\", \"fileName\": \"\" }
     *
     * @var string
     */
    public $content;

    /**
     * @example 202211039393839393
     *
     * @var string
     */
    public $contextMessageId;

    /**
     * @example 293483938849493
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
     * @description Fallback message content.
     *
     * @example This is a fallback message.
     *
     * @var string
     */
    public $fallBackContent;

    /**
     * @description Fallback strategy id. Fallback Strategy can be created on the ChatApp console.
     *
     * @example S_000001
     *
     * @var string
     */
    public $fallBackId;

    /**
     * @description The mobile phone number of the message sender.
     *
     * <notice>You can specify a mobile phone number that is registered for a WhatsApp account and is approved in the ChatApp console.</notice>
     * @example 861890125****
     *
     * @var string
     */
    public $from;

    /**
     * @description Assigned by ISV for RAM user authentication and authorization.
     *
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;

    /**
     * @example promotion
     *
     * @var string
     */
    public $label;

    /**
     * @description The language that is used in the message template.
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description The type of the message. This parameter is required if you set the Type parameter to **message**. Valid values:
     *
     *   **text**: a text message. The **Text** parameter is required if you set the MessageType parameter to text.
     *   **image**: an image message. The **Link** parameter is required and the **Caption** parameter is optional if you set the MessageType parameter to image.
     *   **video**: a video message. The **Link** parameter is required and the **Caption** parameter is optional if you set the MessageType parameter to video.
     *   **audio**: an audio message. The **Link** parameter is required and the **Caption** parameter is invalid if you set the MessageType parameter to audio.
     *   **document**: a document message. The **Link** and **FileName** parameters are required and the **Caption** parameter is invalid if you set the MessageType parameter to document.
     *
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
     * @example tag
     *
     * @var string
     */
    public $tag;

    /**
     * @description The code of the message template. This parameter is required if you set the Type parameter to **template**.
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
     * @description The mobile phone number of the message recipient.
     *
     * @example 861398745****
     *
     * @var string
     */
    public $to;

    /**
     * @example tracking_id:123456
     *
     * @var string
     */
    public $trackingData;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @description The type of the message. Valid values:
     *
     *   **template**: a template message. A template message is sent based on a template that is created in the ChatApp console and is approved. You can send template messages based on your business requirements.
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
