<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateForwardEntryRequest extends Model
{
    /**
     * @example 121.11.36.28
     *
     * @var string
     */
    public $externalIp;

    /**
     * @example 22
     *
     * @var string
     */
    public $externalPort;

    /**
     * @example test0
     *
     * @var string
     */
    public $forwardEntryName;

    /**
     * @var int
     */
    public $healthCheckPort;

    /**
     * @example 10.0.0.13
     *
     * @var string
     */
    public $internalIp;

    /**
     * @example 22
     *
     * @var string
     */
    public $internalPort;

    /**
     * @example Any
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @example nat-5t7nh1cfm6kxiszlttr383xpo
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $standbyExternalIp;
    protected $_name = [
        'externalIp'        => 'ExternalIp',
        'externalPort'      => 'ExternalPort',
        'forwardEntryName'  => 'ForwardEntryName',
        'healthCheckPort'   => 'HealthCheckPort',
        'internalIp'        => 'InternalIp',
        'internalPort'      => 'InternalPort',
        'ipProtocol'        => 'IpProtocol',
        'natGatewayId'      => 'NatGatewayId',
        'standbyExternalIp' => 'StandbyExternalIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalIp) {
            $res['ExternalIp'] = $this->externalIp;
        }
        if (null !== $this->externalPort) {
            $res['ExternalPort'] = $this->externalPort;
        }
        if (null !== $this->forwardEntryName) {
            $res['ForwardEntryName'] = $this->forwardEntryName;
        }
        if (null !== $this->healthCheckPort) {
            $res['HealthCheckPort'] = $this->healthCheckPort;
        }
        if (null !== $this->internalIp) {
            $res['InternalIp'] = $this->internalIp;
        }
        if (null !== $this->internalPort) {
            $res['InternalPort'] = $this->internalPort;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->standbyExternalIp) {
            $res['StandbyExternalIp'] = $this->standbyExternalIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateForwardEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalIp'])) {
            $model->externalIp = $map['ExternalIp'];
        }
        if (isset($map['ExternalPort'])) {
            $model->externalPort = $map['ExternalPort'];
        }
        if (isset($map['ForwardEntryName'])) {
            $model->forwardEntryName = $map['ForwardEntryName'];
        }
        if (isset($map['HealthCheckPort'])) {
            $model->healthCheckPort = $map['HealthCheckPort'];
        }
        if (isset($map['InternalIp'])) {
            $model->internalIp = $map['InternalIp'];
        }
        if (isset($map['InternalPort'])) {
            $model->internalPort = $map['InternalPort'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['StandbyExternalIp'])) {
            $model->standbyExternalIp = $map['StandbyExternalIp'];
        }

        return $model;
    }
}
