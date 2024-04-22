<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody;

use AlibabaCloud\Tea\Model;

class serviceManagedInfos extends Model
{
    /**
     * @description The name of the action performed on the managed instance. Valid values:
     *
     *   **Create**
     *   **Update**
     *   **Delete**
     *   **Associate**
     *   **UserUnmanaged**
     *   **CreateChild**
     *
     * @example Update
     *
     * @var string
     */
    public $action;

    /**
     * @description The type of the child resource. Valid values:
     *
     *   **Listener**: a listener.
     *   **IpSet**: an acceleration region.
     *   **EndpointGroup**: an endpoint group.
     *   **ForwardingRule**: a forwarding rule.
     *   **Endpoint**: an endpoint.
     *   **EndpointGroupDestination**: a protocol mapping of an endpoint group associated with a custom routing listener.
     *   **EndpointPolicy**: a traffic policy of an endpoint associated with a custom routing listener.
     *
     * >  This parameter is returned only if the value of **Action** is **CreateChild**.
     * @example Listener
     *
     * @var string
     */
    public $childType;

    /**
     * @description Indicates whether the specified actions are managed. Valid values:
     *
     *   **true**: The specified actions are managed, and you cannot perform the specified actions on the managed instance.
     *   **false**: The specified actions are not managed, and you can perform the specified actions on the managed instance.
     *
     * @example false
     *
     * @var bool
     */
    public $isManaged;
    protected $_name = [
        'action'    => 'Action',
        'childType' => 'ChildType',
        'isManaged' => 'IsManaged',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->childType) {
            $res['ChildType'] = $this->childType;
        }
        if (null !== $this->isManaged) {
            $res['IsManaged'] = $this->isManaged;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceManagedInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ChildType'])) {
            $model->childType = $map['ChildType'];
        }
        if (isset($map['IsManaged'])) {
            $model->isManaged = $map['IsManaged'];
        }

        return $model;
    }
}
