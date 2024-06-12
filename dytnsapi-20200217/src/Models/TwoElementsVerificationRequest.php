<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Tea\Model;

class TwoElementsVerificationRequest extends Model
{
    /**
     * @description The authorization code.
     *
     * >  On the **My Applications** page in the [Cell Phone Number Service console](https://dytns.console.aliyun.com/analysis/apply), you can obtain the authorization code (also known as authorization ID).
     *
     * This parameter is required.
     * @example QASDW@#**
     *
     * @var string
     */
    public $authCode;

    /**
     * @description The phone number to be verified.
     *
     *   If the value of Mask is NORMAL, specify a value in plaintext for this field.
     *   If the value of Mask is MD5, specify a MD5-encrypted value for this field.
     *   If the value of Mask is SHA256, specify a SHA256-encrypted value for this field.
     *
     * This parameter is required.
     * @example 1390000****
     *
     * @var string
     */
    public $inputNumber;

    /**
     * @description The encryption method. Valid values:
     *
     *   **NORMAL**: plaintext
     *   **MD5**
     *   **SHA256**
     *
     * This parameter is required.
     * @example MD5
     *
     * @var string
     */
    public $mask;

    /**
     * @description The name to be verified.
     *
     *   If the value of Mask is NORMAL, specify a value in plaintext for this field.
     *   If the value of Mask is MD5, specify a MD5-encrypted value for this field.
     *   If the value of Mask is SHA256, specify a SHA256-encrypted value for this field.
     *
     * This parameter is required.
     * @example Aliyun
     *
     * @var string
     */
    public $name;

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
    protected $_name = [
        'authCode'             => 'AuthCode',
        'inputNumber'          => 'InputNumber',
        'mask'                 => 'Mask',
        'name'                 => 'Name',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }
        if (null !== $this->inputNumber) {
            $res['InputNumber'] = $this->inputNumber;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TwoElementsVerificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }
        if (isset($map['InputNumber'])) {
            $model->inputNumber = $map['InputNumber'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        return $model;
    }
}
