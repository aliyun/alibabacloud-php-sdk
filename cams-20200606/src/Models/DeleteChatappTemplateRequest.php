<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class DeleteChatappTemplateRequest extends Model
{
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
    public $isvCode;

    /**
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
    public $templateCode;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'custWabaId' => 'CustWabaId',
        'isvCode' => 'IsvCode',
        'language' => 'Language',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }

        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
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

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }

        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
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

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
