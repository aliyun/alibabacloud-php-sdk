<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest\flowAction;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest\productAction;

class SendChatappMessageRequest extends Model
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
     * @var flowAction
     */
    public $flowAction;

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
     * @var string[]
     */
    public $payload;

    /**
     * @var productAction
     */
    public $productAction;

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
     * @var string[]
     */
    public $templateParams;

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
        'flowAction' => 'FlowAction',
        'from' => 'From',
        'isvCode' => 'IsvCode',
        'label' => 'Label',
        'language' => 'Language',
        'messageType' => 'MessageType',
        'payload' => 'Payload',
        'productAction' => 'ProductAction',
        'recipientType' => 'RecipientType',
        'tag' => 'Tag',
        'taskId' => 'TaskId',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
        'templateParams' => 'TemplateParams',
        'to' => 'To',
        'trackingData' => 'TrackingData',
        'ttl' => 'Ttl',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->flowAction) {
            $this->flowAction->validate();
        }
        if (\is_array($this->payload)) {
            Model::validateArray($this->payload);
        }
        if (null !== $this->productAction) {
            $this->productAction->validate();
        }
        if (\is_array($this->templateParams)) {
            Model::validateArray($this->templateParams);
        }
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

        if (null !== $this->flowAction) {
            $res['FlowAction'] = null !== $this->flowAction ? $this->flowAction->toArray($noStream) : $this->flowAction;
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

        if (null !== $this->payload) {
            if (\is_array($this->payload)) {
                $res['Payload'] = [];
                $n1 = 0;
                foreach ($this->payload as $item1) {
                    $res['Payload'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->productAction) {
            $res['ProductAction'] = null !== $this->productAction ? $this->productAction->toArray($noStream) : $this->productAction;
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

        if (null !== $this->templateParams) {
            if (\is_array($this->templateParams)) {
                $res['TemplateParams'] = [];
                foreach ($this->templateParams as $key1 => $value1) {
                    $res['TemplateParams'][$key1] = $value1;
                }
            }
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
            $model->flowAction = flowAction::fromMap($map['FlowAction']);
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
            if (!empty($map['Payload'])) {
                $model->payload = [];
                $n1 = 0;
                foreach ($map['Payload'] as $item1) {
                    $model->payload[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProductAction'])) {
            $model->productAction = productAction::fromMap($map['ProductAction']);
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
            if (!empty($map['TemplateParams'])) {
                $model->templateParams = [];
                foreach ($map['TemplateParams'] as $key1 => $value1) {
                    $model->templateParams[$key1] = $value1;
                }
            }
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
