<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRequest;

use AlibabaCloud\Tea\Model;

class filterParams extends Model
{
    /**
     * @description The type of the gateway.
     *
     * @example Ingress
     *
     * @var string
     */
    public $gatewayType;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-5017305290e14centbrveca****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The ID of the instance.
     *
     * @example mse_ingresspre-cn-****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example [{"key":"tagkey","value":"tagvalue"}]
     *
     * @var string
     */
    public $mseTag;

    /**
     * @description The name of the gateway.
     *
     * @example rutain-test
     *
     * @var string
     */
    public $name;

    /**
     * @example rg-7y2uye*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp13hhyjntbab7w****
     *
     * @var string
     */
    public $vpc;
    protected $_name = [
        'gatewayType'     => 'GatewayType',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'instanceId'      => 'InstanceId',
        'mseTag'          => 'MseTag',
        'name'            => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'vpc'             => 'Vpc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mseTag) {
            $res['MseTag'] = $this->mseTag;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = $this->vpc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MseTag'])) {
            $model->mseTag = $map['MseTag'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Vpc'])) {
            $model->vpc = $map['Vpc'];
        }

        return $model;
    }
}
