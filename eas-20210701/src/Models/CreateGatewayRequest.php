<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewayRequest extends Model
{
    /**
     * @description The resource group ID. To obtain a resource group ID, see the ResourceId field in the response of the [ListResources](https://help.aliyun.com/document_detail/412133.html) operation.
     *
     * @example eas-r-4gt8twzwllfo******
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description Specifies whether to enable auto-renewal. Valid values:
     *
     *   false (default)
     *   true
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @description The billing method. Valid values:
     *
     *   PrePaid: subscription.
     *   PostPaid: pay-as-you-go.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Specifies whether to enable Internet access. Default value: false.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $enableInternet;

    /**
     * @description Specifies whether to enable private access. Default value: true.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableIntranet;

    /**
     * @description The instance type used by the private gateway. Valid values:
     *
     *   2c4g
     *   4c8g
     *   8c16g
     *   16c32g
     *
     * This parameter is required.
     *
     * @example ecs.c6.4xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The alias of the private gateway.
     *
     * @example mygateway1
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of nodes in the private gateway.
     *
     * @example 2
     *
     * @var int
     */
    public $replicas;
    protected $_name = [
        'resourceName' => 'ResourceName',
        'autoRenewal' => 'AutoRenewal',
        'chargeType' => 'ChargeType',
        'enableInternet' => 'EnableInternet',
        'enableIntranet' => 'EnableIntranet',
        'instanceType' => 'InstanceType',
        'name' => 'Name',
        'replicas' => 'Replicas',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->enableInternet) {
            $res['EnableInternet'] = $this->enableInternet;
        }
        if (null !== $this->enableIntranet) {
            $res['EnableIntranet'] = $this->enableIntranet;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['EnableInternet'])) {
            $model->enableInternet = $map['EnableInternet'];
        }
        if (isset($map['EnableIntranet'])) {
            $model->enableIntranet = $map['EnableIntranet'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        return $model;
    }
}
