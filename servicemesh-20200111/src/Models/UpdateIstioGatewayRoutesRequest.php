<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute;
use AlibabaCloud\Tea\Model;

class UpdateIstioGatewayRoutesRequest extends Model
{
    /**
     * @description The description of the routing rule.
     *
     * @example demo route
     *
     * @var string
     */
    public $description;

    /**
     * @description The information about the routing rule to be updated for the ASM gateway.
     *
     * @var gatewayRoute
     */
    public $gatewayRoute;

    /**
     * @description The name of the ASM gateway.
     *
     * @example ingressgateway
     *
     * @var string
     */
    public $istioGatewayName;

    /**
     * @description The priority of the routing rule. The value of this parameter is an integer. A smaller value indicates a higher priority.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ASM instance ID.
     *
     * @example c08ba3fd1e6484b0f8cc1ad8fe10d****
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description The status of the routing rule. Valid values:
     *
     *   `0`: The routing rule is valid.
     *   `1`: The routing rule is invalid.
     *   `2`: An error occurs during the creation or update of the routing rule.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'description'      => 'Description',
        'gatewayRoute'     => 'GatewayRoute',
        'istioGatewayName' => 'IstioGatewayName',
        'priority'         => 'Priority',
        'serviceMeshId'    => 'ServiceMeshId',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gatewayRoute) {
            $res['GatewayRoute'] = null !== $this->gatewayRoute ? $this->gatewayRoute->toMap() : null;
        }
        if (null !== $this->istioGatewayName) {
            $res['IstioGatewayName'] = $this->istioGatewayName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIstioGatewayRoutesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GatewayRoute'])) {
            $model->gatewayRoute = gatewayRoute::fromMap($map['GatewayRoute']);
        }
        if (isset($map['IstioGatewayName'])) {
            $model->istioGatewayName = $map['IstioGatewayName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
