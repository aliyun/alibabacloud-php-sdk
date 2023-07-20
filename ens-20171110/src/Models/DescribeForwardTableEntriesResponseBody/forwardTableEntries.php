<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeForwardTableEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class forwardTableEntries extends Model
{
    /**
     * @example 120.XXX.XXX.70
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
     * @example fwd-5tf66679oi2uoxcvlg0g2****
     *
     * @var string
     */
    public $forwardEntryId;

    /**
     * @example test0
     *
     * @var string
     */
    public $forwardEntryName;

    /**
     * @example 80
     *
     * @var string
     */
    public $healthCheckPort;

    /**
     * @example 10.XXX.XXX.3
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
     * @example nat-5tawjw5j7sgd2deujxuk0****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $standbyExternalIp;

    /**
     * @var string
     */
    public $standbyStatus;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'externalIp'        => 'ExternalIp',
        'externalPort'      => 'ExternalPort',
        'forwardEntryId'    => 'ForwardEntryId',
        'forwardEntryName'  => 'ForwardEntryName',
        'healthCheckPort'   => 'HealthCheckPort',
        'internalIp'        => 'InternalIp',
        'internalPort'      => 'InternalPort',
        'ipProtocol'        => 'IpProtocol',
        'natGatewayId'      => 'NatGatewayId',
        'standbyExternalIp' => 'StandbyExternalIp',
        'standbyStatus'     => 'StandbyStatus',
        'status'            => 'Status',
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
        if (null !== $this->forwardEntryId) {
            $res['ForwardEntryId'] = $this->forwardEntryId;
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
        if (null !== $this->standbyStatus) {
            $res['StandbyStatus'] = $this->standbyStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forwardTableEntries
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
        if (isset($map['ForwardEntryId'])) {
            $model->forwardEntryId = $map['ForwardEntryId'];
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
        if (isset($map['StandbyStatus'])) {
            $model->standbyStatus = $map['StandbyStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
