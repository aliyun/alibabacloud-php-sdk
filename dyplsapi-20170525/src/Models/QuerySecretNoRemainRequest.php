<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QuerySecretNoRemainRequest extends Model
{
    /**
     * @description The home location of the phone number.
     *
     *   If **SpecId** is set to 1 or 2, you can specify the **City** parameter to query the quantity of available phone numbers.
     *
     * 3.  You can enter National List to query the cities with available phone numbers and the quantities of remaining phone numbers in the Chinese mainland. Cities without available phone numbers will not be returned.
     *
     *   If **SpecId** is set to 3, home locations are not distinguished for phone numbers that start with 95 and only the quantity of all the remaining phone numbers that start with 95 and are available for online purchase can be queried. If SpecId is set to 3, **City** must be set to **Nationwide**.
     *
     * This parameter is required.
     * @example hangzhou
     *
     * @var string
     */
    public $city;

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
     * @description The prefix of the phone number. When you call the QuerySecretNoRemain operation with **SecretNo** specified, the quantity of remaining phone numbers with the specified prefix that are available for online purchase is queried.
     *
     * Up to 18 digits of a phone number prefix can be specified.
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
        'ownerId'              => 'OwnerId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
     * @return QuerySecretNoRemainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
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
        if (isset($map['SecretNo'])) {
            $model->secretNo = $map['SecretNo'];
        }
        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }

        return $model;
    }
}
