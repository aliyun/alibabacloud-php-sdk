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
     * @var int
     */
    public $ownerId;

    /**
     * @description 当发送模板消息时，模板中包含按钮类型是QUICK_REPLY时有效，在快速回复的时候会再上行
     *
     * @var string
     */
    public $payload;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description 模板编码
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 模板参数
     *
     * @var string
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
        'channelType'          => 'ChannelType',
        'content'              => 'Content',
        'from'                 => 'From',
        'language'             => 'Language',
        'messageType'          => 'MessageType',
        'ownerId'              => 'OwnerId',
        'payload'              => 'Payload',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'templateCode'         => 'TemplateCode',
        'templateParams'       => 'TemplateParams',
        'to'                   => 'To',
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
        if (null !== $this->from) {
            $res['From'] = $this->from;
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
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
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
            $model->payload = $map['Payload'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
