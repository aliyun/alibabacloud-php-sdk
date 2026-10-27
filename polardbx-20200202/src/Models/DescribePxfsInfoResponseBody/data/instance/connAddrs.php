<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePxfsInfoResponseBody\data\instance;

use AlibabaCloud\Dara\Model;

class connAddrs extends Model
{
    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var bool
     */
    public $tlsEnabled;

    /**
     * @var string
     */
    public $transport;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'endpoint' => 'Endpoint',
        'port' => 'Port',
        'protocol' => 'Protocol',
        'tlsEnabled' => 'TlsEnabled',
        'transport' => 'Transport',
        'type' => 'Type',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->tlsEnabled) {
            $res['TlsEnabled'] = $this->tlsEnabled;
        }

        if (null !== $this->transport) {
            $res['Transport'] = $this->transport;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['TlsEnabled'])) {
            $model->tlsEnabled = $map['TlsEnabled'];
        }

        if (isset($map['Transport'])) {
            $model->transport = $map['Transport'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
