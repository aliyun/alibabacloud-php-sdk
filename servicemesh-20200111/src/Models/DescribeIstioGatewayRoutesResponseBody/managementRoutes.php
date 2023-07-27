<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRoutesResponseBody;

use AlibabaCloud\Tea\Model;

class managementRoutes extends Model
{
    /**
     * @description The name of the ASM gateway.
     *
     * @example ingressgateway
     *
     * @var string
     */
    public $ASMGatewayName;

    /**
     * @description The description of the routing rule.
     *
     * @example demo route
     *
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $destinationHost;

    /**
     * @var string[]
     */
    public $destinationSubSet;

    /**
     * @description The namespace.
     *
     * @example istio-demo
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The priority of the routing rule. The value of this parameter is an integer. A smaller value indicates a higher priority.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The name of the routing rule.
     *
     * @example http-route
     *
     * @var string
     */
    public $routeName;

    /**
     * @description The path that is used to match request URLs.
     *
     * @example /reviews/v1
     *
     * @var string
     */
    public $routePath;

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
        'ASMGatewayName'    => 'ASMGatewayName',
        'description'       => 'Description',
        'destinationHost'   => 'DestinationHost',
        'destinationSubSet' => 'DestinationSubSet',
        'namespace'         => 'Namespace',
        'priority'          => 'Priority',
        'routeName'         => 'RouteName',
        'routePath'         => 'RoutePath',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ASMGatewayName) {
            $res['ASMGatewayName'] = $this->ASMGatewayName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationHost) {
            $res['DestinationHost'] = $this->destinationHost;
        }
        if (null !== $this->destinationSubSet) {
            $res['DestinationSubSet'] = $this->destinationSubSet;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->routeName) {
            $res['RouteName'] = $this->routeName;
        }
        if (null !== $this->routePath) {
            $res['RoutePath'] = $this->routePath;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managementRoutes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ASMGatewayName'])) {
            $model->ASMGatewayName = $map['ASMGatewayName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationHost'])) {
            if (!empty($map['DestinationHost'])) {
                $model->destinationHost = $map['DestinationHost'];
            }
        }
        if (isset($map['DestinationSubSet'])) {
            if (!empty($map['DestinationSubSet'])) {
                $model->destinationSubSet = $map['DestinationSubSet'];
            }
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RouteName'])) {
            $model->routeName = $map['RouteName'];
        }
        if (isset($map['RoutePath'])) {
            $model->routePath = $map['RoutePath'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
