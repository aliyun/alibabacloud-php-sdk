<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingPortMappingsByDestinationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingPortMappingsByDestinationResponseBody\portMappings\destinationSocketAddress;

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
        'acceleratorId' => 'AcceleratorId',
        'acceleratorPort' => 'AcceleratorPort',
        'destinationSocketAddress' => 'DestinationSocketAddress',
        'destinationTrafficState' => 'DestinationTrafficState',
        'endpointGroupId' => 'EndpointGroupId',
        'endpointGroupRegion' => 'EndpointGroupRegion',
        'endpointId' => 'EndpointId',
        'listenerId' => 'ListenerId',
        'protocols' => 'Protocols',
        'vswitch' => 'Vswitch',
    ];

    public function validate()
    {
        if (null !== $this->destinationSocketAddress) {
            $this->destinationSocketAddress->validate();
        }
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->acceleratorPort) {
            $res['AcceleratorPort'] = $this->acceleratorPort;
        }

        if (null !== $this->destinationSocketAddress) {
            $res['DestinationSocketAddress'] = null !== $this->destinationSocketAddress ? $this->destinationSocketAddress->toArray($noStream) : $this->destinationSocketAddress;
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
            if (\is_array($this->protocols)) {
                $res['Protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['Protocols'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['Protocols'] as $item1) {
                    $model->protocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }

        return $model;
    }
}
