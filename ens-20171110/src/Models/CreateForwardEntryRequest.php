<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateForwardEntryRequest extends Model
{
    /**
     * @description The elastic IP address (EIP) that is used to access the Internet.
     *
     * This parameter is required.
     * @example 121.11.36.28
     *
     * @var string
     */
    public $externalIp;

    /**
     * @description The external port or port range that is used for port forwarding.
     *
     *   Valid values: 1 to 65535.
     *   To specify a port range, separate the first port and the last port with a forward slash (/), such as 10/20.
     *   If you set ExternalPort to a port range, you must also set InternalPort to a port range, and the number of ports specified must be the same for both parameters. For example, if you set ExternalPort to 10/20, you can set InternalPort to 80/90.
     *
     * This parameter is required.
     * @example 22
     *
     * @var string
     */
    public $externalPort;

    /**
     * @description The name of the DNAT entry. The name must be 2 to 128 characters in length. The name cannot start with `http://` or `https://`.
     *
     * @example test0
     *
     * @var string
     */
    public $forwardEntryName;

    /**
     * @description The probe port. The port must be within the internal port range. By default, this parameter is left empty.
     *
     * @example 80
     *
     * @var int
     */
    public $healthCheckPort;

    /**
     * @description The private IP address of the instance that uses the DNAT entry for Internet communication.
     *
     * This parameter is required.
     * @example 10.0.0.13
     *
     * @var string
     */
    public $internalIp;

    /**
     * @description The internal port or port range that is used for port forwarding.
     *
     *   Valid values: 1 to 65535.
     *   To specify a port range, separate the first port and the last port with a forward slash (/), such as 10/20.
     *
     * This parameter is required.
     * @example 22
     *
     * @var string
     */
    public $internalPort;

    /**
     * @description The protocol. Valid values:
     *
     *   **TCP**: forwards TCP packets.
     *   **UDP**: forwards UDP packets.
     *   **Any** (default): forwards all packets.
     *
     * @example Any
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The ID of the Network Address Translation (NAT) gateway.
     *
     * This parameter is required.
     * @example nat-5t7nh1cfm6kxiszlttr383xpo
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The secondary EIP that is used to access the Internet. You need to select a secondary EIP that is bound to NAT. After the DNAT entry is created, the secondary EIP takes effect.
     *
     * @example 101.XXX.XXX.4
     *
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
