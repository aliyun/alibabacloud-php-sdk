<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointConnectionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointConnectionsResponseBody\connections\zones;

class connections extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var int
     */
    public $endpointOwnerId;

    /**
     * @var string
     */
    public $endpointRegionId;

    /**
     * @var string
     */
    public $endpointVpcId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $resourceOwner;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var string
     */
    public $trafficControlMode;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'connectionStatus' => 'ConnectionStatus',
        'endpointId' => 'EndpointId',
        'endpointOwnerId' => 'EndpointOwnerId',
        'endpointRegionId' => 'EndpointRegionId',
        'endpointVpcId' => 'EndpointVpcId',
        'modifiedTime' => 'ModifiedTime',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwner' => 'ResourceOwner',
        'serviceId' => 'ServiceId',
        'serviceRegionId' => 'ServiceRegionId',
        'trafficControlMode' => 'TrafficControlMode',
        'zones' => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointOwnerId) {
            $res['EndpointOwnerId'] = $this->endpointOwnerId;
        }

        if (null !== $this->endpointRegionId) {
            $res['EndpointRegionId'] = $this->endpointRegionId;
        }

        if (null !== $this->endpointVpcId) {
            $res['EndpointVpcId'] = $this->endpointVpcId;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }

        if (null !== $this->trafficControlMode) {
            $res['TrafficControlMode'] = $this->trafficControlMode;
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['Zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['Zones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['EndpointOwnerId'])) {
            $model->endpointOwnerId = $map['EndpointOwnerId'];
        }

        if (isset($map['EndpointRegionId'])) {
            $model->endpointRegionId = $map['EndpointRegionId'];
        }

        if (isset($map['EndpointVpcId'])) {
            $model->endpointVpcId = $map['EndpointVpcId'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        if (isset($map['TrafficControlMode'])) {
            $model->trafficControlMode = $map['TrafficControlMode'];
        }

        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n1 = 0;
                foreach ($map['Zones'] as $item1) {
                    $model->zones[$n1] = zones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
