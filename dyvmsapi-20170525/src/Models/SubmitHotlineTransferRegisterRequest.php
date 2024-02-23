<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SubmitHotlineTransferRegisterRequest\transferPhoneNumberInfos;
use AlibabaCloud\Tea\Model;

class SubmitHotlineTransferRegisterRequest extends Model
{
    /**
     * @description The authenticity of the commitment. Valid values:
     *
     *   **true**: The commitment is authentic.
     *   **false**: The commitment is not authentic.
     *
     * @example true
     *
     * @var string
     */
    public $agreement;

    /**
     * @description The China 400 number.
     *
     * @example 400****
     *
     * @var string
     */
    public $hotlineNumber;

    /**
     * @description The ID card number of the handler.
     *
     * @example 5****************9
     *
     * @var string
     */
    public $operatorIdentityCard;

    /**
     * @description The email address of the handler.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $operatorMail;

    /**
     * @description The verification code that is received by the mailbox of the handler.
     *
     * @example 1234
     *
     * @var string
     */
    public $operatorMailVerifyCode;

    /**
     * @description The mobile phone number of the handler.
     *
     * @example 158****7230
     *
     * @var string
     */
    public $operatorMobile;

    /**
     * @description The verification code that is received by the mobile phone of the handler.
     *
     * @example 1234
     *
     * @var string
     */
    public $operatorMobileVerifyCode;

    /**
     * @description The name of the handler.
     *
     * @example A***
     *
     * @var string
     */
    public $operatorName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The qualification ID. You can call the [GetHotlineQualificationByOrder](~~393548~~) operation to obtain the qualification ID.
     *
     * @example 10000004933****
     *
     * @var string
     */
    public $qualificationId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The registration information about the China 400 number.
     *
     * @var transferPhoneNumberInfos[]
     */
    public $transferPhoneNumberInfos;
    protected $_name = [
        'agreement'                => 'Agreement',
        'hotlineNumber'            => 'HotlineNumber',
        'operatorIdentityCard'     => 'OperatorIdentityCard',
        'operatorMail'             => 'OperatorMail',
        'operatorMailVerifyCode'   => 'OperatorMailVerifyCode',
        'operatorMobile'           => 'OperatorMobile',
        'operatorMobileVerifyCode' => 'OperatorMobileVerifyCode',
        'operatorName'             => 'OperatorName',
        'ownerId'                  => 'OwnerId',
        'qualificationId'          => 'QualificationId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'transferPhoneNumberInfos' => 'TransferPhoneNumberInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreement) {
            $res['Agreement'] = $this->agreement;
        }
        if (null !== $this->hotlineNumber) {
            $res['HotlineNumber'] = $this->hotlineNumber;
        }
        if (null !== $this->operatorIdentityCard) {
            $res['OperatorIdentityCard'] = $this->operatorIdentityCard;
        }
        if (null !== $this->operatorMail) {
            $res['OperatorMail'] = $this->operatorMail;
        }
        if (null !== $this->operatorMailVerifyCode) {
            $res['OperatorMailVerifyCode'] = $this->operatorMailVerifyCode;
        }
        if (null !== $this->operatorMobile) {
            $res['OperatorMobile'] = $this->operatorMobile;
        }
        if (null !== $this->operatorMobileVerifyCode) {
            $res['OperatorMobileVerifyCode'] = $this->operatorMobileVerifyCode;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->transferPhoneNumberInfos) {
            $res['TransferPhoneNumberInfos'] = [];
            if (null !== $this->transferPhoneNumberInfos && \is_array($this->transferPhoneNumberInfos)) {
                $n = 0;
                foreach ($this->transferPhoneNumberInfos as $item) {
                    $res['TransferPhoneNumberInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitHotlineTransferRegisterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Agreement'])) {
            $model->agreement = $map['Agreement'];
        }
        if (isset($map['HotlineNumber'])) {
            $model->hotlineNumber = $map['HotlineNumber'];
        }
        if (isset($map['OperatorIdentityCard'])) {
            $model->operatorIdentityCard = $map['OperatorIdentityCard'];
        }
        if (isset($map['OperatorMail'])) {
            $model->operatorMail = $map['OperatorMail'];
        }
        if (isset($map['OperatorMailVerifyCode'])) {
            $model->operatorMailVerifyCode = $map['OperatorMailVerifyCode'];
        }
        if (isset($map['OperatorMobile'])) {
            $model->operatorMobile = $map['OperatorMobile'];
        }
        if (isset($map['OperatorMobileVerifyCode'])) {
            $model->operatorMobileVerifyCode = $map['OperatorMobileVerifyCode'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TransferPhoneNumberInfos'])) {
            if (!empty($map['TransferPhoneNumberInfos'])) {
                $model->transferPhoneNumberInfos = [];
                $n                               = 0;
                foreach ($map['TransferPhoneNumberInfos'] as $item) {
                    $model->transferPhoneNumberInfos[$n++] = null !== $item ? transferPhoneNumberInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
