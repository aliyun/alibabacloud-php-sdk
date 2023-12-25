<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointGroupDestinationsResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointGroupDestinationsResponseBody\destinations\serviceManagedInfos;
use AlibabaCloud\Tea\Model;

class destinations extends Model
{
    /**
     * @description The GA instance ID.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The ID of the endpoint group mapping.
     *
     * @example dst-123abc****
     *
     * @var string
     */
    public $destinationId;

    /**
     * @description The endpoint group ID.
     *
     * @example epg-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The first port of the backend service port range.
     *
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The listener ID.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The backend service protocols of the endpoint group. Valid values:
     *
     *   **TCP**
     *   **UDP**
     *   **TCP,UDP**
     *
     * @var string[]
     */
    public $protocols;

    /**
     * @description The ID of the service that manages the GA instance.
     *
     * >  This parameter takes effect only if **ServiceManaged** is set to **True**.
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Indicates whether the GA instance is managed. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The actions that you can perform on the managed instance.
     *
     * >  This parameter takes effect only if **ServiceManaged** is set to **True**.
     *
     *   You can perform only specific actions on a managed instance.
     *
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @description The last port of the backend service port range.
     *
     * @example 80
     *
     * @var int
     */
    public $toPort;
    protected $_name = [
        'acceleratorId'       => 'AcceleratorId',
        'destinationId'       => 'DestinationId',
        'endpointGroupId'     => 'EndpointGroupId',
        'fromPort'            => 'FromPort',
        'listenerId'          => 'ListenerId',
        'protocols'           => 'Protocols',
        'serviceId'           => 'ServiceId',
        'serviceManaged'      => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
        'toPort'              => 'ToPort',
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
        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->fromPort) {
            $res['FromPort'] = $this->fromPort;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
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
        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['FromPort'])) {
            $model->fromPort = $map['FromPort'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
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
        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
