<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateIPv6TranslatorRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Valid values: **true and false**.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The bandwidth of the IPv6 Translation Service instance. Unit: Mbit/s. Valid values: **1** to **200**. If you do not specify the bandwidth for the mapping entry, the bandwidth is shared with the mapping entry.
     *
     * > If you do not specify this parameter, the default bandwidth is 10 Mbit/s.
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example sha111
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The subscription duration.
     *
     *   If the billing cycle is **Month**, valid values are **1** to **9**.
     *   If the billing cycle is **Year**, set the value to **3**.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The name of the IPv6 Translation Service instance. The default name is the instance ID. It must be 2 to 100 characters in length and must start with a letter. It can contain letters, digits, periods (.), underscores (_), and hyphens (-). It cannot start with `http://` or `https://`.
     *
     * @example ipv6_1
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the IPv6 Translation Service instance. Valid values:
     *
     *   **PREPAY**: subscription
     *   **POSTPAY**: pay-as-you-go
     *
     * @example PREPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @description The billing cycle of the subscription. Valid values:
     *
     *   **Month** (default)
     *   **Year**
     *
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The region of the IPv6 Translation Service instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cm-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The specification of the IPv6 Translation Service instance. Set the value to **small**.
     *
     * @example small
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'bandwidth'            => 'Bandwidth',
        'clientToken'          => 'ClientToken',
        'duration'             => 'Duration',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'payType'              => 'PayType',
        'pricingCycle'         => 'PricingCycle',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'spec'                 => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIPv6TranslatorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
