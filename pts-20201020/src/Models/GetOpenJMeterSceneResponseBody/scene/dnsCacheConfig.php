<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene;

use AlibabaCloud\Tea\Model;

class dnsCacheConfig extends Model
{
    /**
     * @description 是否清除缓存
     *
     * @var bool
     */
    public $clearCacheEachIteration;

    /**
     * @description DNS服务器
     *
     * @var string[]
     */
    public $dnsServers;

    /**
     * @description 域名绑定
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
