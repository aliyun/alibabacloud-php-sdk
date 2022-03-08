<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class SendMessageRequest extends Model
{
    /**
     * @var string
     */
    public $caption;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $messageType;

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
    public $templateBodyParams;

    /**
     * @var string
     */
    public $templateButtonParams;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateHeaderParams;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $to;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'caption'              => 'Caption',
        'channelType'          => 'ChannelType',
        'fileName'             => 'FileName',
        'from'                 => 'From',
        'link'                 => 'Link',
        'messageType'          => 'MessageType',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'templateBodyParams'   => 'TemplateBodyParams',
        'templateButtonParams' => 'TemplateButtonParams',
        'templateCode'         => 'TemplateCode',
        'templateHeaderParams' => 'TemplateHeaderParams',
        'text'                 => 'Text',
        'to'                   => 'To',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
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
        if (null !== $this->templateBodyParams) {
            $res['TemplateBodyParams'] = $this->templateBodyParams;
        }
        if (null !== $this->templateButtonParams) {
            $res['TemplateButtonParams'] = $this->templateButtonParams;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateHeaderParams) {
            $res['TemplateHeaderParams'] = $this->templateHeaderParams;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
     * @return SendMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
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
        if (isset($map['TemplateBodyParams'])) {
            $model->templateBodyParams = $map['TemplateBodyParams'];
        }
        if (isset($map['TemplateButtonParams'])) {
            $model->templateButtonParams = $map['TemplateButtonParams'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateHeaderParams'])) {
            $model->templateHeaderParams = $map['TemplateHeaderParams'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
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
