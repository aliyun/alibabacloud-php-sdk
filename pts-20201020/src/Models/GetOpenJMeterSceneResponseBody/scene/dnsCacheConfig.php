<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene;

use AlibabaCloud\Tea\Model;

class dnsCacheConfig extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $clearCacheEachIteration;

    /**
     * @var string[]
     */
    public $dnsServers;

    /**
     * @example {"server.com":"6.6.6.6"}
     *
     * @var mixed[]
     */
    public $hostTable;
    protected $_name = [
        'clearCacheEachIteration' => 'ClearCacheEachIteration',
        'dnsServers'              => 'DnsServers',
        'hostTable'               => 'HostTable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clearCacheEachIteration) {
            $res['ClearCacheEachIteration'] = $this->clearCacheEachIteration;
        }
        if (null !== $this->dnsServers) {
            $res['DnsServers'] = $this->dnsServers;
        }
        if (null !== $this->hostTable) {
            $res['HostTable'] = $this->hostTable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsCacheConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClearCacheEachIteration'])) {
            $model->clearCacheEachIteration = $map['ClearCacheEachIteration'];
        }
        if (isset($map['DnsServers'])) {
            if (!empty($map['DnsServers'])) {
                $model->dnsServers = $map['DnsServers'];
            }
        }
        if (isset($map['HostTable'])) {
            $model->hostTable = $map['HostTable'];
        }

        return $model;
    }
}
