<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\ForwardInfoResponse\connectInfo;
use AlibabaCloud\Tea\Model;

class ForwardInfoResponse extends Model
{
    /**
     * @var string[]
     */
    public $accessType;

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
     * @example 1024
     *
     * @var string
     */
    public $externalPort;

    /**
     * @example 22
     *
     * @var string
     */
    public $forwardPort;

    /**
     * @example ssh
     *
     * @var string
     */
    public $name;

    /**
     * @example ngw-bp1uewa15k4iy5770****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $SSHPublicKey;
    protected $_name = [
        'accessType'      => 'AccessType',
        'connectInfo'     => 'ConnectInfo',
        'containerName'   => 'ContainerName',
        'eipAllocationId' => 'EipAllocationId',
        'enable'          => 'Enable',
        'externalPort'    => 'ExternalPort',
        'forwardPort'     => 'ForwardPort',
        'name'            => 'Name',
        'natGatewayId'    => 'NatGatewayId',
        'SSHPublicKey'    => 'SSHPublicKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
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
        if (null !== $this->externalPort) {
            $res['ExternalPort'] = $this->externalPort;
        }
        if (null !== $this->forwardPort) {
            $res['ForwardPort'] = $this->forwardPort;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
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
        if (isset($map['AccessType'])) {
            if (!empty($map['AccessType'])) {
                $model->accessType = $map['AccessType'];
            }
        }
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
        if (isset($map['ExternalPort'])) {
            $model->externalPort = $map['ExternalPort'];
        }
        if (isset($map['ForwardPort'])) {
            $model->forwardPort = $map['ForwardPort'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['SSHPublicKey'])) {
            $model->SSHPublicKey = $map['SSHPublicKey'];
        }

        return $model;
    }
}
