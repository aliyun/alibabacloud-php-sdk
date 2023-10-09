<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\networkInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\productInfo;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description Specifies whether to enable auto-renewal. This parameter takes effect only when the PaymentType parameter is set to Subscription.
     *
     *   true: enable
     *   false: disable
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal cycle of the instance. This parameter takes effect only when the autoRenew parameter is set to true. Unit: months.
     *
     * Valid values:
     *
     *   Monthly renewal: 1, 2, 3, 6, and 12
     *
     * @example 3
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @description The name of the instance that you want to create.
     *
     * If you do not configure this parameter, the instance ID is used as the instance name.
     * @example rmq-cn-72u3048uxxx
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The information about the network.
     *
     * @var networkInfo
     */
    public $networkInfo;

    /**
     * @description The billing method of the instance. ApsaraMQ for RocketMQ supports the subscription and pay-as-you-go billing methods.
     *
     * Valid values:
     *
     *   PayAsYouGo: pay-as-you go. This billing method allows you to use resources before you pay for the resources.
     *   Subscription: This billing method allows you to use resources after you pay for the resources.
     *
     * For more information, see [Billing methods](~~427234~~).
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The subscription duration of the instance. This parameter takes effect only when the PaymentType parameter is set to Subscription.
     *
     * Valid values:
     *
     *   Monthly subscription: 1, 2, 3, 4, 5, and 6
     *   Yearly subscription: 1, 2, and 3
     *
     * @example 3
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration.
     *
     * Valid values:
     *
     *   Month
     *   Year
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The information about the instance specification.
     *
     * @var productInfo
     */
    public $productInfo;

    /**
     * @description The description of the instance.
     *
     * @example This is the remark for test.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzy6pist7uuna
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The primary edition of the instance. For information about the differences between primary edition instances, see [Instance selection](~~444722~~).
     *
     * Valid values:
     *
     *   standard: Standard Edition
     *   ultimate: Enterprise Platinum Edition
     *   professional: Professional Edition
     *
     * > After you create a ApsaraMQ for RocketMQ instance, you can only upgrade the primary edition of the instance. The following editions are sorted in ascending order: Standard Edition, Professional Edition, and Platinum Edition. For example, an instance of Standard Edition can be upgraded to Professional Edition. However, an instance of Professional Edition cannot be downgraded to Standard Edition.
     * @example standard
     *
     * @var string
     */
    public $seriesCode;

    /**
     * @description The code of the service to which the instance belongs. The service code of ApsaraMQ for RocketMQ is rmq.
     *
     * @example rmq
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @description The sub-category edition of the instance. For information about the differences between sub-category edition instances, see [Instance selection](~~444722~~).
     *
     * Valid values:
     *
     *   cluster_ha: Cluster High-availability Edition
     *   single_node: Standalone Edition
     *
     * > After you create a ApsaraMQ for RocketMQ instance, you cannot change the sub-category edition of the instance.
     * @example cluster_ha
     *
     * @var string
     */
    public $subSeriesCode;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value of this parameter, but you must ensure that the value is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example c2c5d1274a8d4317a13bc5b0d4******
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'autoRenew'       => 'autoRenew',
        'autoRenewPeriod' => 'autoRenewPeriod',
        'commodityCode'   => 'commodityCode',
        'instanceName'    => 'instanceName',
        'networkInfo'     => 'networkInfo',
        'paymentType'     => 'paymentType',
        'period'          => 'period',
        'periodUnit'      => 'periodUnit',
        'productInfo'     => 'productInfo',
        'remark'          => 'remark',
        'resourceGroupId' => 'resourceGroupId',
        'seriesCode'      => 'seriesCode',
        'serviceCode'     => 'serviceCode',
        'subSeriesCode'   => 'subSeriesCode',
        'clientToken'     => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['autoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['autoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }
        if (null !== $this->networkInfo) {
            $res['networkInfo'] = null !== $this->networkInfo ? $this->networkInfo->toMap() : null;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['periodUnit'] = $this->periodUnit;
        }
        if (null !== $this->productInfo) {
            $res['productInfo'] = null !== $this->productInfo ? $this->productInfo->toMap() : null;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->seriesCode) {
            $res['seriesCode'] = $this->seriesCode;
        }
        if (null !== $this->serviceCode) {
            $res['serviceCode'] = $this->serviceCode;
        }
        if (null !== $this->subSeriesCode) {
            $res['subSeriesCode'] = $this->subSeriesCode;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['autoRenew'])) {
            $model->autoRenew = $map['autoRenew'];
        }
        if (isset($map['autoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['autoRenewPeriod'];
        }
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }
        if (isset($map['networkInfo'])) {
            $model->networkInfo = networkInfo::fromMap($map['networkInfo']);
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['periodUnit'])) {
            $model->periodUnit = $map['periodUnit'];
        }
        if (isset($map['productInfo'])) {
            $model->productInfo = productInfo::fromMap($map['productInfo']);
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['seriesCode'])) {
            $model->seriesCode = $map['seriesCode'];
        }
        if (isset($map['serviceCode'])) {
            $model->serviceCode = $map['serviceCode'];
        }
        if (isset($map['subSeriesCode'])) {
            $model->subSeriesCode = $map['subSeriesCode'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
