<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRoutesResponseBody;

use AlibabaCloud\Tea\Model;

class managementRoutes extends Model
{
    /**
     * @var string
     */
    public $ASMGatewayName;

    /**
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
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $routeName;

    /**
     * @var string
     */
    public $routePath;

    /**
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
