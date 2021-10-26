<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SubmitHotlineTransferRegisterRequest\transferPhoneNumberInfos;
use AlibabaCloud\Tea\Model;

class SubmitHotlineTransferRegisterRequest extends Model
{
    /**
     * @var string
     */
    public $agreement;

    /**
     * @var string
     */
    public $hotlineNumber;

    /**
     * @var string
     */
    public $operatorIdentityCard;

    /**
     * @var string
     */
    public $operatorMail;

    /**
     * @var string
     */
    public $operatorMailVerifyCode;

    /**
     * @var string
     */
    public $operatorMobile;

    /**
     * @var string
     */
    public $operatorMobileVerifyCode;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var int
     */
    public $ownerId;

    /**
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
