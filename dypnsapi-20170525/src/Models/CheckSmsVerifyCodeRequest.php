<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CheckSmsVerifyCodeRequest extends Model
{
    /**
     * @description The verification policy for uppercase and lowercase letters of the verification code. Valid values:
     *
     *   1: The verification policy does not distinguish uppercase and lowercase letters.
     *   2: The verification policy distinguishes uppercase and lowercase letters.
     *
     * @example 1
     *
     * @var int
     */
    public $caseAuthPolicy;

    /**
     * @description The country code of the phone number. Default value: 86.
     *
     * @example 86
     *
     * @var string
     */
    public $countryCode;

    /**
     * @description The external ID.
     *
     * @example 12123231
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The phone number.
     *
     * @example 18653529399
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The verification service name. If this parameter is not specified, the default service is used. The name can be up to 20 characters in length.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $schemeName;

    /**
     * @description The verification code.
     *
     * @example 1231
     *
     * @var string
     */
    public $verifyCode;
    protected $_name = [
        'caseAuthPolicy'       => 'CaseAuthPolicy',
        'countryCode'          => 'CountryCode',
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'phoneNumber'          => 'PhoneNumber',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'schemeName'           => 'SchemeName',
        'verifyCode'           => 'VerifyCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseAuthPolicy) {
            $res['CaseAuthPolicy'] = $this->caseAuthPolicy;
        }
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->schemeName) {
            $res['SchemeName'] = $this->schemeName;
        }
        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckSmsVerifyCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaseAuthPolicy'])) {
            $model->caseAuthPolicy = $map['CaseAuthPolicy'];
        }
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SchemeName'])) {
            $model->schemeName = $map['SchemeName'];
        }
        if (isset($map['VerifyCode'])) {
            $model->verifyCode = $map['VerifyCode'];
        }

        return $model;
    }
}
