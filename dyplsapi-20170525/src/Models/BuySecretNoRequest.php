<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class BuySecretNoRequest extends Model
{
    /**
     * @description Specifies the home location of the phone number.
     *
     * >
     *
     *   The home location can be set only to a location in the Chinese mainland.
     *
     *   A phone number that starts with 95 does not have a home location. If you purchase a phone number that starts with 95, set this parameter to **Nationwide**.
     *
     * This parameter is required.
     * @example hangzhou
     *
     * @var string
     */
    public $city;

    /**
     * @description Specifies whether to add the phone number to the pool of numbers that will be displayed during calls.
     *
     * >  This parameter takes effect only for customers who have enabled the number display feature.
     * @example true
     *
     * @var bool
     */
    public $displayPool;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The key of the phone number pool. Log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) and view the key of the phone number pool on the **Number Pool Management** page.
     *
     * This parameter is required.
     * @example FC123456
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
     * @description The prefix of the phone number. If you specify the value of **SecretNo** when you purchase a phone number, a phone number starting with the specified prefix is selected.
     *
     * >  You can specify up to 18 digits of the phone number prefix.
     * @example 130
     *
     * @var string
     */
    public $secretNo;

    /**
     * @description The type of the phone number. Valid values:
     *
     *   **1**: a phone number assigned by a virtual network operator, that is, a phone number that belongs to the 170 or 171 number segment.
     *   **2**: a phone number provided by a carrier.
     *   **3**: a phone number that starts with 95.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $specId;
    protected $_name = [
        'city'                 => 'City',
        'displayPool'          => 'DisplayPool',
        'ownerId'              => 'OwnerId',
        'poolKey'              => 'PoolKey',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'secretNo'             => 'SecretNo',
        'specId'               => 'SpecId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->displayPool) {
            $res['DisplayPool'] = $this->displayPool;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->secretNo) {
            $res['SecretNo'] = $this->secretNo;
        }
        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BuySecretNoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['DisplayPool'])) {
            $model->displayPool = $map['DisplayPool'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['SecretNo'])) {
            $model->secretNo = $map['SecretNo'];
        }
        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }

        return $model;
    }
}
