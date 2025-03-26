<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class SendSmsRequest extends Model
{
    /**
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $phoneNumbers;

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
    public $signName;

    /**
     * @var string
     */
    public $smsUpExtendCode;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateParam;
    protected $_name = [
        'outId' => 'OutId',
        'ownerId' => 'OwnerId',
        'phoneNumbers' => 'PhoneNumbers',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'signName' => 'SignName',
        'smsUpExtendCode' => 'SmsUpExtendCode',
        'templateCode' => 'TemplateCode',
        'templateParam' => 'TemplateParam',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->smsUpExtendCode) {
            $res['SmsUpExtendCode'] = $this->smsUpExtendCode;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->templateParam) {
            $res['TemplateParam'] = $this->templateParam;
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
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = $map['PhoneNumbers'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['SmsUpExtendCode'])) {
            $model->smsUpExtendCode = $map['SmsUpExtendCode'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TemplateParam'])) {
            $model->templateParam = $map['TemplateParam'];
        }

        return $model;
    }
}
