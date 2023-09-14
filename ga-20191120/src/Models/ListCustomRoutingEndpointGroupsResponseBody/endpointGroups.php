<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointGroupsResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointGroupsResponseBody\endpointGroups\serviceManagedInfos;
use AlibabaCloud\Tea\Model;

class endpointGroups extends Model
{
    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The description of the endpoint group.
     *
     * @example EndpointGroup
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the endpoint group.
     *
     * @example epg-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The list of endpoint group IP addresses.
     *
     * @var string[]
     */
    public $endpointGroupIpList;

    /**
     * @description The ID of the region where the endpoint group is created.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @description The endpoint group IP addresses to be confirmed after the GA instance is upgraded.
     *
     * @var string[]
     */
    public $endpointGroupUnconfirmedIpList;

    /**
     * @description The ID of the custom routing listener.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The name of the endpoint group.
     *
     * @example group1
     *
     * @var string
     */
    public $name;

    /**
     * @description The service ID to which the managed instance belongs.
     *
     * >  Valid only when the ServiceManaged parameter is True.
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Is it a managed instance. Valid values:
     *
     * - false
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description A list of action policies that users can execute on this managed instance.
     *
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @description The status of the endpoint group.
     *
     *   **init**: being initialized
     *   **active**: running as expected
     *   **updating**: being updated
     *   **deleting**: being deleted
     *
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'acceleratorId'                  => 'AcceleratorId',
        'description'                    => 'Description',
        'endpointGroupId'                => 'EndpointGroupId',
        'endpointGroupIpList'            => 'EndpointGroupIpList',
        'endpointGroupRegion'            => 'EndpointGroupRegion',
        'endpointGroupUnconfirmedIpList' => 'EndpointGroupUnconfirmedIpList',
        'listenerId'                     => 'ListenerId',
        'name'                           => 'Name',
        'serviceId'                      => 'ServiceId',
        'serviceManaged'                 => 'ServiceManaged',
        'serviceManagedInfos'            => 'ServiceManagedInfos',
        'state'                          => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointGroupIpList) {
            $res['EndpointGroupIpList'] = $this->endpointGroupIpList;
        }
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }
        if (null !== $this->endpointGroupUnconfirmedIpList) {
            $res['EndpointGroupUnconfirmedIpList'] = $this->endpointGroupUnconfirmedIpList;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->serviceManagedInfos) {
            $res['ServiceManagedInfos'] = [];
            if (null !== $this->serviceManagedInfos && \is_array($this->serviceManagedInfos)) {
                $n = 0;
                foreach ($this->serviceManagedInfos as $item) {
                    $res['ServiceManagedInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointGroupIpList'])) {
            if (!empty($map['EndpointGroupIpList'])) {
                $model->endpointGroupIpList = $map['EndpointGroupIpList'];
            }
        }
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }
        if (isset($map['EndpointGroupUnconfirmedIpList'])) {
            if (!empty($map['EndpointGroupUnconfirmedIpList'])) {
                $model->endpointGroupUnconfirmedIpList = $map['EndpointGroupUnconfirmedIpList'];
            }
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['ServiceManagedInfos'])) {
            if (!empty($map['ServiceManagedInfos'])) {
                $model->serviceManagedInfos = [];
                $n                          = 0;
                foreach ($map['ServiceManagedInfos'] as $item) {
                    $model->serviceManagedInfos[$n++] = null !== $item ? serviceManagedInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
