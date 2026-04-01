<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkPeerConnectionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkPeerConnectionsResponseBody\networkPeerConnects\acceptingNetwork;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkPeerConnectionsResponseBody\networkPeerConnects\network;

class networkPeerConnects extends Model
{
    /**
     * @var acceptingNetwork
     */
    public $acceptingNetwork;

    /**
     * @var string
     */
    public $acceptingNetworkId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var network
     */
    public $network;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'acceptingNetwork' => 'AcceptingNetwork',
        'acceptingNetworkId' => 'AcceptingNetworkId',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'network' => 'Network',
        'networkId' => 'NetworkId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->acceptingNetwork) {
            $this->acceptingNetwork->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptingNetwork) {
            $res['AcceptingNetwork'] = null !== $this->acceptingNetwork ? $this->acceptingNetwork->toArray($noStream) : $this->acceptingNetwork;
        }

        if (null !== $this->acceptingNetworkId) {
            $res['AcceptingNetworkId'] = $this->acceptingNetworkId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AcceptingNetwork'])) {
            $model->acceptingNetwork = acceptingNetwork::fromMap($map['AcceptingNetwork']);
        }

        if (isset($map['AcceptingNetworkId'])) {
            $model->acceptingNetworkId = $map['AcceptingNetworkId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
