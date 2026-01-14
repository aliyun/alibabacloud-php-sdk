<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointGroupDestinationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointGroupDestinationsResponseBody\destinations\serviceManagedInfos;

class destinations extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $destinationId;

    /**
     * @var string
     */
    public $endpointGroupId;

    /**
     * @var int
     */
    public $fromPort;

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
    public $serviceId;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @var int
     */
    public $toPort;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'destinationId' => 'DestinationId',
        'endpointGroupId' => 'EndpointGroupId',
        'fromPort' => 'FromPort',
        'listenerId' => 'ListenerId',
        'protocols' => 'Protocols',
        'serviceId' => 'ServiceId',
        'serviceManaged' => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
        'toPort' => 'ToPort',
    ];

    public function validate()
    {
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        if (\is_array($this->serviceManagedInfos)) {
            Model::validateArray($this->serviceManagedInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->protocols)) {
                $res['Protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['Protocols'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }

        if (null !== $this->serviceManagedInfos) {
            if (\is_array($this->serviceManagedInfos)) {
                $res['ServiceManagedInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceManagedInfos as $item1) {
                    $res['ServiceManagedInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
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
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['Protocols'] as $item1) {
                    $model->protocols[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['ServiceManagedInfos'] as $item1) {
                    $model->serviceManagedInfos[$n1] = serviceManagedInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
