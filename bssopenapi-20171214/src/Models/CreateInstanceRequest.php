<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateInstanceRequest\parameter;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. The server checks whether a request that uses the same client token has been received. If a request that uses the same client token has been received, the server returns the same request result as the previous request.
     *
     * @example JASIOFKVNVIXXXXXX
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The logistics address of this order. This parameter is generally valid for physical orders.
     *
     * @example {"cityCode":"330100","cityName":"Hangzhou","contactName":"Test","countryCode":"","districtName":"Puyan Street","email":"\*\*@example.com","mobilePhone":"153564848844","phone":"1234567","provCode":"330000","provName":"Zhejiang","streetCode":"33010610","streetName":"Zhuantang","zipCode":"0000"}
     *
     * @var string
     */
    public $logistics;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The details of the modules.
     *
     * @var parameter[]
     */
    public $parameter;

    /**
     * @description The subscription duration. Unit: month. The value must be an integral multiple of 12.
     *
     * >  This parameter is required if you create a subscription instance.
     * @example 12
     *
     * @var int
     */
    public $period;

    /**
     * @description The code of the service to which the instance belongs. You can query the service code by calling the **QueryProductList** operation or viewing **Codes of Alibaba Cloud Services**.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @description The auto-renewal period. Unit: month.
     *
     * >  This parameter is required if the **RenewalStatus** parameter is set to **AutoRenewal**.
     * @example 12
     *
     * @var int
     */
    public $renewPeriod;

    /**
     * @description The renewal method. Valid values:
     *
     *   AutoRenewal: The instance is automatically renewed.
     *   ManualRenewal: The instance is manually renewed.
     *
     * Default value: ManualRenewal.
     * @example ManualRenewal
     *
     * @var string
     */
    public $renewalStatus;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: the subscription billing method.
     *   PayAsYouGo: the pay-as-you-go billing method.
     *
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'logistics'        => 'Logistics',
        'ownerId'          => 'OwnerId',
        'parameter'        => 'Parameter',
        'period'           => 'Period',
        'productCode'      => 'ProductCode',
        'productType'      => 'ProductType',
        'renewPeriod'      => 'RenewPeriod',
        'renewalStatus'    => 'RenewalStatus',
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->logistics) {
            $res['Logistics'] = $this->logistics;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parameter) {
            $res['Parameter'] = [];
            if (null !== $this->parameter && \is_array($this->parameter)) {
                $n = 0;
                foreach ($this->parameter as $item) {
                    $res['Parameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->renewPeriod) {
            $res['RenewPeriod'] = $this->renewPeriod;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Logistics'])) {
            $model->logistics = $map['Logistics'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Parameter'])) {
            if (!empty($map['Parameter'])) {
                $model->parameter = [];
                $n                = 0;
                foreach ($map['Parameter'] as $item) {
                    $model->parameter[$n++] = null !== $item ? parameter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RenewPeriod'])) {
            $model->renewPeriod = $map['RenewPeriod'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
