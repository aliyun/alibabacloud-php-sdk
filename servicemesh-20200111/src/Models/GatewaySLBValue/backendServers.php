<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GatewaySLBValue;

use AlibabaCloud\Tea\Model;

class backendServers extends Model
{
    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var string
     */
    public $serverHealthStatus;

    /**
     * @var string
     */
    public $serverId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $weight;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eniHost;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'port'               => 'Port',
        'protocol'           => 'Protocol',
        'serverIp'           => 'ServerIp',
        'serverHealthStatus' => 'ServerHealthStatus',
        'serverId'           => 'ServerId',
        'vpcId'              => 'VpcId',
        'listenerPort'       => 'ListenerPort',
        'weight'             => 'Weight',
        'description'        => 'Description',
        'eniHost'            => 'EniHost',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->serverHealthStatus) {
            $res['ServerHealthStatus'] = $this->serverHealthStatus;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eniHost) {
            $res['EniHost'] = $this->eniHost;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['ServerHealthStatus'])) {
            $model->serverHealthStatus = $map['ServerHealthStatus'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EniHost'])) {
            $model->eniHost = $map['EniHost'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
