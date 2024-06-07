<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class AddAxnTrackNoRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The private number in the AXN binding, that is, phone number X.
     *
     * This parameter is required.
     * @example 1700000****
     *
     * @var string
     */
    public $phoneNoX;

    /**
     * @description The key of the phone number pool. Log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) and view the key of the phone number pool on the **Number Pool Management** page.
     *
     * This parameter is required.
     * @example FC2235****
     *
     * @var string
     */
    public $poolKey;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The binding ID.
     *
     * This parameter is required.
     * @example 15678890****
     *
     * @var string
     */
    public $subsId;

    /**
     * @description The tracking number.
     *
     * This parameter is required.
     * @example abcde*****
     *
     * @var string
     */
    public $trackNo;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'phoneNoX'             => 'PhoneNoX',
        'poolKey'              => 'PoolKey',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'subsId'               => 'SubsId',
        'trackNo'              => 'trackNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNoX) {
            $res['PhoneNoX'] = $this->phoneNoX;
        }
        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->subsId) {
            $res['SubsId'] = $this->subsId;
        }
        if (null !== $this->trackNo) {
            $res['trackNo'] = $this->trackNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAxnTrackNoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNoX'])) {
            $model->phoneNoX = $map['PhoneNoX'];
        }
        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SubsId'])) {
            $model->subsId = $map['SubsId'];
        }
        if (isset($map['trackNo'])) {
            $model->trackNo = $map['trackNo'];
        }

        return $model;
    }
}
