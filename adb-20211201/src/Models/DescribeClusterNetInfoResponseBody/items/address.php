<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterNetInfoResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterNetInfoResponseBody\items\address\ports;

class address extends Model
{
    /**
     * @var string
     */
    public $connectionString;
    /**
     * @var string
     */
    public $connectionStringPrefix;
    /**
     * @var string
     */
    public $IPAddress;
    /**
     * @var string
     */
    public $netType;
    /**
     * @var string
     */
    public $port;
    /**
     * @var ports
     */
    public $ports;
    /**
     * @var string
     */
    public $VPCId;
    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'connectionString'       => 'ConnectionString',
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'IPAddress'              => 'IPAddress',
        'netType'                => 'NetType',
        'port'                   => 'Port',
        'ports'                  => 'Ports',
        'VPCId'                  => 'VPCId',
        'vSwitchId'              => 'VSwitchId',
    ];

    public function validate()
    {
        if (null !== $this->ports) {
            $this->ports->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }

        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }

        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->ports) {
            $res['Ports'] = null !== $this->ports ? $this->ports->toArray($noStream) : $this->ports;
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

        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }

        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }

        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Ports'])) {
            $model->ports = ports::fromMap($map['Ports']);
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
