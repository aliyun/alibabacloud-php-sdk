<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class AddChatappPhoneNumberRequest extends Model
{
    /**
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * This parameter is required.
     * @example 86
     *
     * @var string
     */
    public $cc;

    /**
     * @description Adds a phone number for a WhatsApp Business account (WABA).
     *
     * This parameter is required.
     * @example 93928389****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description AddChatappPhoneNumber
     *
     * This parameter is required.
     * @example 1380000****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description cams:ChatappPhoneNumberRegister
     *
     * @example 1020****
     *
     * @deprecated
     *
     * @var string
     */
    public $preValidateId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Private
     *
     * This parameter is required.
     * @example Alibaba
     *
     * @var string
     */
    public $verifiedName;
    protected $_name = [
        'cc'                   => 'Cc',
        'custSpaceId'          => 'CustSpaceId',
        'ownerId'              => 'OwnerId',
        'phoneNumber'          => 'PhoneNumber',
        'preValidateId'        => 'PreValidateId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'verifiedName'         => 'VerifiedName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cc) {
            $res['Cc'] = $this->cc;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->preValidateId) {
            $res['PreValidateId'] = $this->preValidateId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->verifiedName) {
            $res['VerifiedName'] = $this->verifiedName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddChatappPhoneNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cc'])) {
            $model->cc = $map['Cc'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['PreValidateId'])) {
            $model->preValidateId = $map['PreValidateId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VerifiedName'])) {
            $model->verifiedName = $map['VerifiedName'];
        }

        return $model;
    }
}
