<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class SendChatappMessageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contextMessageId;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $custWabaId;

    /**
     * @var string
     */
    public $fallBackContent;

    /**
     * @var int
     */
    public $fallBackDuration;

    /**
     * @var string
     */
    public $fallBackId;

    /**
     * @var string
     */
    public $fallBackRule;

    /**
     * @var string
     */
    public $flowActionShrink;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $isvCode;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var string
     */
    public $payloadShrink;

    /**
     * @var string
     */
    public $productActionShrink;

    /**
     * @var string
     */
    public $recipientType;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateParamsShrink;

    /**
     * @var string
     */
    public $to;

    /**
     * @var string
     */
    public $trackingData;

    /**
     * @var int
     */
    public $ttl;

    /**
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
        'payloadShrink' => 'Payload',
        'productActionShrink' => 'ProductAction',
        'recipientType' => 'RecipientType',
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->payloadShrink) {
            $res['Payload'] = $this->payloadShrink;
        }

        if (null !== $this->productActionShrink) {
            $res['ProductAction'] = $this->productActionShrink;
        }

        if (null !== $this->recipientType) {
            $res['RecipientType'] = $this->recipientType;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Payload'])) {
            $model->payloadShrink = $map['Payload'];
        }

        if (isset($map['ProductAction'])) {
            $model->productActionShrink = $map['ProductAction'];
        }

        if (isset($map['RecipientType'])) {
            $model->recipientType = $map['RecipientType'];
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
