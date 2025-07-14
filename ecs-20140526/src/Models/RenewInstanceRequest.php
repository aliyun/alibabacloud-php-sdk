<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies the [unified expiration date](https://help.aliyun.com/document_detail/63396.html). Valid values: 1 to 28.
     *
     * To use this parameter, you must [specify a unified expiration date for the ECS instance](~~63396#694cb636c0rp6~~). The value of this parameter must be the same as the specified unified expiration date. Otherwise, the call fails.
     *
     * >  You must specify the renewal period-related parameter pair (`Period` and `PeriodUnit`) or `ExpectedRenewDay`, but not both.
     *
     * @example 5
     *
     * @var int
     */
    public $expectedRenewDay;

    /**
     * @description The ID of the instance that you want to renew.
     *
     * This parameter is required.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The renewal period of the subscription instance. If `DedicatedHostId` is specified, the value of Period cannot exceed the subscription period of the specified dedicated host.
     *
     * Valid values when PeriodUnit is set to Month: 1, 2, 3, 4, 5, 6, 7, 8, 9, and 12.
     *
     * > The renewal period-related parameter pair (`Period` and `PeriodUnit`) and `ExpectedRenewDay` are mutually exclusive.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the renewal period. Valid values:
     *
     * Month
     *
     * Default value: Month.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'expectedRenewDay' => 'ExpectedRenewDay',
        'instanceId' => 'InstanceId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->expectedRenewDay) {
            $res['ExpectedRenewDay'] = $this->expectedRenewDay;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
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
     * @return RenewInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ExpectedRenewDay'])) {
            $model->expectedRenewDay = $map['ExpectedRenewDay'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
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
