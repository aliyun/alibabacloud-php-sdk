<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Tea\Model;

class DescribePhoneNumberOperatorAttributeRequest extends Model
{
    /**
     * @description The authorization code.
     *
     * >  On the **My Applications** page in the [Cell Phone Number Service console](https://dytns.console.aliyun.com/analysis/apply), you can obtain the authorization code (also known as authorization ID).
     *
     * This parameter is required.
     * @example Dd1r***4id
     *
     * @var string
     */
    public $authCode;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $flowName;

    /**
     * @description The phone number to be queried.
     *
     *   If the value of Mask is NORMAL, specify an 11-digit phone number in plaintext.
     *   If the value of Mask is MD5, specify a 32-bit string that is encrypted by using MD5.
     *   If the value of Mask is SHA256, specify a 64-bit string that is encrypted by using SHA256.
     *
     * This parameter is required.
     * @example 139****1234
     *
     * @var string
     */
    public $inputNumber;

    /**
     * @description The encryption method of the phone number. Valid values:
     *
     *   **NORMAL**: The phone number is not encrypted.
     *   **MD5**: The phone number is MD5-encrypted.
     *   **SHA256**: The phone number is SHA256-encrypted.
     *
     * This parameter is required.
     * @example MD5
     *
     * @var string
     */
    public $mask;

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
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $resultCount;
    protected $_name = [
        'authCode'             => 'AuthCode',
        'flowName'             => 'FlowName',
        'inputNumber'          => 'InputNumber',
        'mask'                 => 'Mask',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resultCount'          => 'ResultCount',
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
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->inputNumber) {
            $res['InputNumber'] = $this->inputNumber;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
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
        if (null !== $this->resultCount) {
            $res['ResultCount'] = $this->resultCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhoneNumberOperatorAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['InputNumber'])) {
            $model->inputNumber = $map['InputNumber'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
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
        if (isset($map['ResultCount'])) {
            $model->resultCount = $map['ResultCount'];
        }

        return $model;
    }
}
