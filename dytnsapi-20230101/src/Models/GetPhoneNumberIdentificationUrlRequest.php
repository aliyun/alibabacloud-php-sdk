<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20230101\Models;

use AlibabaCloud\Tea\Model;

class GetPhoneNumberIdentificationUrlRequest extends Model
{
    /**
     * @example K***9i7CIe
     *
     * @var string
     */
    public $authCode;

    /**
     * @example 114.124.***.13
     *
     * @var string
     */
    public $ip;

    /**
     * @example 149b03d2-a749-4e6e-8f5b-34******5815
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 628211****113
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example true
     *
     * @var bool
     */
    public $rememberPhoneNumber;

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
        'ip'                   => 'Ip',
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'phoneNumber'          => 'PhoneNumber',
        'rememberPhoneNumber'  => 'RememberPhoneNumber',
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
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (null !== $this->rememberPhoneNumber) {
            $res['RememberPhoneNumber'] = $this->rememberPhoneNumber;
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
     * @return GetPhoneNumberIdentificationUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
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
        if (isset($map['RememberPhoneNumber'])) {
            $model->rememberPhoneNumber = $map['RememberPhoneNumber'];
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
