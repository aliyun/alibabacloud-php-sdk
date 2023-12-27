<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\ForwardInfoResponse\connectInfo;
use AlibabaCloud\Tea\Model;

class ForwardInfoResponse extends Model
{
    /**
     * @var connectInfo
     */
    public $connectInfo;

    /**
     * @example dsw-notebook
     *
     * @var string
     */
    public $containerName;

    /**
     * @example eip-25877c70gddh****
     *
     * @var string
     */
    public $eipAllocationId;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example ngw-bp1uewa15k4iy5770****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @example 22
     *
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $SSHPublicKey;
    protected $_name = [
        'connectInfo'     => 'ConnectInfo',
        'containerName'   => 'ContainerName',
        'eipAllocationId' => 'EipAllocationId',
        'enable'          => 'Enable',
        'natGatewayId'    => 'NatGatewayId',
        'port'            => 'Port',
        'SSHPublicKey'    => 'SSHPublicKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectInfo) {
            $res['ConnectInfo'] = null !== $this->connectInfo ? $this->connectInfo->toMap() : null;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->eipAllocationId) {
            $res['EipAllocationId'] = $this->eipAllocationId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->SSHPublicKey) {
            $res['SSHPublicKey'] = $this->SSHPublicKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ForwardInfoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectInfo'])) {
            $model->connectInfo = connectInfo::fromMap($map['ConnectInfo']);
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['EipAllocationId'])) {
            $model->eipAllocationId = $map['EipAllocationId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SSHPublicKey'])) {
            $model->SSHPublicKey = $map['SSHPublicKey'];
        }

        return $model;
    }
}
