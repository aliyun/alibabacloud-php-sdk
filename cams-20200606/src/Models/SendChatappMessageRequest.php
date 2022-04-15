<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class SendChatappMessageRequest extends Model
{
    /**
     * @description 通道类型 whatsapp/viber/line
     *
     * @var string
     */
    public $channelType;

    /**
     * @description 消息内容
     *
     * @var string
     */
    public $content;

    /**
     * @description ISV客户wabaId
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description 发送方
     *
     * @var string
     */
    public $from;

    /**
     * @description 语言
     *
     * @var string
     */
    public $language;

    /**
     * @description 消息类型
     *
     * @var string
     */
    public $messageType;

    /**
     * @var string[]
     */
    public $payload;

    /**
     * @description 模板编码
     *
     * @var string
     */
    public $templateCode;

    /**
     * @var string[]
     */
    public $templateParams;

    /**
     * @description 接收号码
     *
     * @var string
     */
    public $to;

    /**
     * @description 消息大类
     * message--非模板
     * @var string
     */
    public $type;
    protected $_name = [
        'channelType'    => 'ChannelType',
        'content'        => 'Content',
        'custWabaId'     => 'CustWabaId',
        'from'           => 'From',
        'language'       => 'Language',
        'messageType'    => 'MessageType',
        'payload'        => 'Payload',
        'templateCode'   => 'TemplateCode',
        'templateParams' => 'TemplateParams',
        'to'             => 'To',
        'type'           => 'Type',
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
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateParams) {
            $res['TemplateParams'] = $this->templateParams;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendChatappMessageRequest
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
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['Payload'])) {
            if (!empty($map['Payload'])) {
                $model->payload = $map['Payload'];
            }
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateParams'])) {
            $model->templateParams = $map['TemplateParams'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
