<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SendBatchSmsRequest extends Model
{
    /**
     * @description The extension field of the external record. The value is a string that contains no more than 256 characters.
     *
     * > The parameter is optional.
     * @example abcdefg
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The mobile number of the recipient. Format:
     *
     *   Message delivery to the Chinese mainland: +/+86/0086/86 or an 11-digit mobile number without a prefix. Example: 1590000\\*\\*\\*\\*.
     *   Message delivery to countries or regions outside the Chinese mainland: Dialing code + Mobile number. Example: 852000012\\*\\*\\*\\*.
     *
     * This parameter is required.
     * @example ["1590000****","1350000****"]
     *
     * @var string
     */
    public $phoneNumberJson;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The signature.
     *
     * Log on to the Alibaba Cloud SMS console. In the left-side navigation pane, click **Go Globe** or **Go China**. You can view the signature in the **Signature** column on the **Signatures** tab.
     *
     * This parameter is required.
     * @example ["Aliyun","Alibaba"]
     *
     * @var string
     */
    public $signNameJson;

    /**
     * @description The extension code of the MO message. Format: JSON array.
     *
     * > The parameter is optional.
     * @example ["90999","90998"]
     *
     * @var string
     */
    public $smsUpExtendCodeJson;

    /**
     * @description The code of the message template.
     *
     * Log on to the Alibaba Cloud SMS console. In the left-side navigation pane, click **Go Globe** or **Go China**. You can view the message template in the **Template Code** column on the **Message Templates** tab.
     *
     * This parameter is required.
     * @example SMS_15255****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The value of the variable in the message template.
     *
     * > If you need to add line breaks to the JSON template, make sure that the format is valid. In addition, the sequence of variable values must be the same as that of the mobile numbers and signatures.
     * @example [{"name":"TemplateParamJson"},{"name":"TemplateParamJson"}]
     *
     * @var string
     */
    public $templateParamJson;
    protected $_name = [
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'phoneNumberJson'      => 'PhoneNumberJson',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'signNameJson'         => 'SignNameJson',
        'smsUpExtendCodeJson'  => 'SmsUpExtendCodeJson',
        'templateCode'         => 'TemplateCode',
        'templateParamJson'    => 'TemplateParamJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNumberJson) {
            $res['PhoneNumberJson'] = $this->phoneNumberJson;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->signNameJson) {
            $res['SignNameJson'] = $this->signNameJson;
        }
        if (null !== $this->smsUpExtendCodeJson) {
            $res['SmsUpExtendCodeJson'] = $this->smsUpExtendCodeJson;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateParamJson) {
            $res['TemplateParamJson'] = $this->templateParamJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendBatchSmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNumberJson'])) {
            $model->phoneNumberJson = $map['PhoneNumberJson'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SignNameJson'])) {
            $model->signNameJson = $map['SignNameJson'];
        }
        if (isset($map['SmsUpExtendCodeJson'])) {
            $model->smsUpExtendCodeJson = $map['SmsUpExtendCodeJson'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateParamJson'])) {
            $model->templateParamJson = $map['TemplateParamJson'];
        }

        return $model;
    }
}
