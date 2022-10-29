<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingPortMappingsByDestinationResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingPortMappingsByDestinationResponseBody\portMappings\destinationSocketAddress;
use AlibabaCloud\Tea\Model;

class portMappings extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var int
     */
    public $acceleratorPort;

    /**
     * @var destinationSocketAddress
     */
    public $destinationSocketAddress;

    /**
     * @var string
     */
    public $destinationTrafficState;

    /**
     * @var string
     */
    public $endpointGroupId;

    /**
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string[]
     */
    public $protocols;

    /**
     * @var string
     */
    public $vswitch;
    protected $_name = [
        'acceleratorId'            => 'AcceleratorId',
        'acceleratorPort'          => 'AcceleratorPort',
        'destinationSocketAddress' => 'DestinationSocketAddress',
        'destinationTrafficState'  => 'DestinationTrafficState',
        'endpointGroupId'          => 'EndpointGroupId',
        'endpointGroupRegion'      => 'EndpointGroupRegion',
        'endpointId'               => 'EndpointId',
        'listenerId'               => 'ListenerId',
        'protocols'                => 'Protocols',
        'vswitch'                  => 'Vswitch',
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
        if (null !== $this->acceleratorPort) {
            $res['AcceleratorPort'] = $this->acceleratorPort;
        }
        if (null !== $this->destinationSocketAddress) {
            $res['DestinationSocketAddress'] = null !== $this->destinationSocketAddress ? $this->destinationSocketAddress->toMap() : null;
        }
        if (null !== $this->destinationTrafficState) {
            $res['DestinationTrafficState'] = $this->destinationTrafficState;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }
        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['AcceleratorPort'])) {
            $model->acceleratorPort = $map['AcceleratorPort'];
        }
        if (isset($map['DestinationSocketAddress'])) {
            $model->destinationSocketAddress = destinationSocketAddress::fromMap($map['DestinationSocketAddress']);
        }
        if (isset($map['DestinationTrafficState'])) {
            $model->destinationTrafficState = $map['DestinationTrafficState'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
        }
        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }

        return $model;
    }
}
