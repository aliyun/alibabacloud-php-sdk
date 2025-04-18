<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ForwardInfoResponse\connectInfo;

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
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $eipAllocationId;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $externalPort;

    /**
     * @var string
     */
    public $forwardPort;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $SSHPublicKey;
    protected $_name = [
        'accessType' => 'AccessType',
        'connectInfo' => 'ConnectInfo',
        'containerName' => 'ContainerName',
        'eipAllocationId' => 'EipAllocationId',
        'enable' => 'Enable',
        'externalPort' => 'ExternalPort',
        'forwardPort' => 'ForwardPort',
        'name' => 'Name',
        'natGatewayId' => 'NatGatewayId',
        'SSHPublicKey' => 'SSHPublicKey',
    ];

    public function validate()
    {
        if (\is_array($this->accessType)) {
            Model::validateArray($this->accessType);
        }
        if (null !== $this->connectInfo) {
            $this->connectInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            if (\is_array($this->accessType)) {
                $res['AccessType'] = [];
                $n1 = 0;
                foreach ($this->accessType as $item1) {
                    $res['AccessType'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->connectInfo) {
            $res['ConnectInfo'] = null !== $this->connectInfo ? $this->connectInfo->toArray($noStream) : $this->connectInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            if (!empty($map['AccessType'])) {
                $model->accessType = [];
                $n1 = 0;
                foreach ($map['AccessType'] as $item1) {
                    $model->accessType[$n1++] = $item1;
                }
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
