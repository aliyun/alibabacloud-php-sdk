<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\IpRecord;

use AlibabaCloud\SDK\Cmn\V20200825\Models\IpRecord\detail\zoneLayer;
use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @example 10:10:10:10:10:10
     *
     * @var string
     */
    public $deviceMac;

    /**
     * @example ASW-1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 10.0.0.1
     *
     * @var string
     */
    public $gateway;

    /**
     * @example 10.0.0.1
     *
     * @var string
     */
    public $ip;

    /**
     * @var string[]
     */
    public $parentIpBlocks;

    /**
     * @example TE-1
     *
     * @var string
     */
    public $port;

    /**
     * @example PSW-1
     *
     * @var string
     */
    public $remoteDeviceName;

    /**
     * @example 10.0.0.2
     *
     * @var string
     */
    public $remoteIp;

    /**
     * @example TE-1
     *
     * @var string
     */
    public $remotePort;

    /**
     * @var zoneLayer[]
     */
    public $zoneLayer;
    protected $_name = [
        'deviceMac'        => 'DeviceMac',
        'deviceName'       => 'DeviceName',
        'gateway'          => 'Gateway',
        'ip'               => 'Ip',
        'parentIpBlocks'   => 'ParentIpBlocks',
        'port'             => 'Port',
        'remoteDeviceName' => 'RemoteDeviceName',
        'remoteIp'         => 'RemoteIp',
        'remotePort'       => 'RemotePort',
        'zoneLayer'        => 'ZoneLayer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceMac) {
            $res['DeviceMac'] = $this->deviceMac;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->parentIpBlocks) {
            $res['ParentIpBlocks'] = $this->parentIpBlocks;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->remoteDeviceName) {
            $res['RemoteDeviceName'] = $this->remoteDeviceName;
        }
        if (null !== $this->remoteIp) {
            $res['RemoteIp'] = $this->remoteIp;
        }
        if (null !== $this->remotePort) {
            $res['RemotePort'] = $this->remotePort;
        }
        if (null !== $this->zoneLayer) {
            $res['ZoneLayer'] = [];
            if (null !== $this->zoneLayer && \is_array($this->zoneLayer)) {
                $n = 0;
                foreach ($this->zoneLayer as $item) {
                    $res['ZoneLayer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceMac'])) {
            $model->deviceMac = $map['DeviceMac'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['ParentIpBlocks'])) {
            if (!empty($map['ParentIpBlocks'])) {
                $model->parentIpBlocks = $map['ParentIpBlocks'];
            }
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RemoteDeviceName'])) {
            $model->remoteDeviceName = $map['RemoteDeviceName'];
        }
        if (isset($map['RemoteIp'])) {
            $model->remoteIp = $map['RemoteIp'];
        }
        if (isset($map['RemotePort'])) {
            $model->remotePort = $map['RemotePort'];
        }
        if (isset($map['ZoneLayer'])) {
            if (!empty($map['ZoneLayer'])) {
                $model->zoneLayer = [];
                $n                = 0;
                foreach ($map['ZoneLayer'] as $item) {
                    $model->zoneLayer[$n++] = null !== $item ? zoneLayer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
