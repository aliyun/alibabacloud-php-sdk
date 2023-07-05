<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointConnectionsResponseBody;

use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointConnectionsResponseBody\connections\zones;
use AlibabaCloud\Tea\Model;

class connections extends Model
{
    /**
     * @description The bandwidth of the endpoint connection. Valid values: **1024 to 10240**. Unit: Mbit/s.
     *
     * @example 1024
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The state of the endpoint connection. Valid values:
     *
     *   **Pending**: The connection is being modified.
     *   **Connecting**: The connection is being established.
     *   **Connected**: The connection is established.
     *   **Disconnecting**: The endpoint is being disconnected from the endpoint service.
     *   **Disconnected**: The endpoint is disconnected from the endpoint service.
     *   **Deleting**: The connection is being deleted.
     *   **ServiceDeleted**: The corresponding endpoint service has been deleted.
     *
     * @example Disconnected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @description The endpoint ID.
     *
     * @example ep-hp33b2e43fays7s8****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The ID of the Alibaba Cloud account to which the endpoint belongs.
     *
     * @example 25346073170691****
     *
     * @var int
     */
    public $endpointOwnerId;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the endpoint belongs.
     *
     * @example vpc-hp356stwkxg3fn2xe****
     *
     * @var string
     */
    public $endpointVpcId;

    /**
     * @description The time when the endpoint connection was modified.
     *
     * @example 2021-09-28T10:34:46Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the resource group to which the endpoint belongs.
     *
     * @example rg-acfmw353z35v***
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the endpoint and the endpoint service belong to the same Alibaba Cloud account. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $resourceOwner;

    /**
     * @description The endpoint service ID.
     *
     * @example epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The zones.
     *
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'bandwidth'        => 'Bandwidth',
        'connectionStatus' => 'ConnectionStatus',
        'endpointId'       => 'EndpointId',
        'endpointOwnerId'  => 'EndpointOwnerId',
        'endpointVpcId'    => 'EndpointVpcId',
        'modifiedTime'     => 'ModifiedTime',
        'resourceGroupId'  => 'ResourceGroupId',
        'resourceOwner'    => 'ResourceOwner',
        'serviceId'        => 'ServiceId',
        'zones'            => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->zones) {
            $res['Zones'] = [];
            if (null !== $this->zones && \is_array($this->zones)) {
                $n = 0;
                foreach ($this->zones as $item) {
                    $res['Zones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connections
     */
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
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n            = 0;
                foreach ($map['Zones'] as $item) {
                    $model->zones[$n++] = null !== $item ? zones::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
