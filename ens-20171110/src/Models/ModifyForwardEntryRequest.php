<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ModifyForwardEntryRequest extends Model
{
    /**
     * @var string
     */
    public $externalIp;

    /**
     * @var string
     */
    public $externalPort;

    /**
     * @var string
     */
    public $forwardEntryId;

    /**
     * @var string
     */
    public $forwardEntryName;

    /**
     * @var int
     */
    public $healthCheckPort;

    /**
     * @var string
     */
    public $internalIp;

    /**
     * @var string
     */
    public $internalPort;

    /**
     * @var string
     */
    public $ipProtocol;
    protected $_name = [
        'externalIp' => 'ExternalIp',
        'externalPort' => 'ExternalPort',
        'forwardEntryId' => 'ForwardEntryId',
        'forwardEntryName' => 'ForwardEntryName',
        'healthCheckPort' => 'HealthCheckPort',
        'internalIp' => 'InternalIp',
        'internalPort' => 'InternalPort',
        'ipProtocol' => 'IpProtocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        return $model;
    }
}
