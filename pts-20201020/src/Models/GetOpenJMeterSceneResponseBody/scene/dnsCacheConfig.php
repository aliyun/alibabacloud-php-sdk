<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene;

use AlibabaCloud\Dara\Model;

class dnsCacheConfig extends Model
{
    /**
     * @var bool
     */
    public $clearCacheEachIteration;

    /**
     * @var string[]
     */
    public $dnsServers;

    /**
     * @var mixed[]
     */
    public $hostTable;
    protected $_name = [
        'clearCacheEachIteration' => 'ClearCacheEachIteration',
        'dnsServers' => 'DnsServers',
        'hostTable' => 'HostTable',
    ];

    public function validate()
    {
        if (\is_array($this->dnsServers)) {
            Model::validateArray($this->dnsServers);
        }
        if (\is_array($this->hostTable)) {
            Model::validateArray($this->hostTable);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clearCacheEachIteration) {
            $res['ClearCacheEachIteration'] = $this->clearCacheEachIteration;
        }

        if (null !== $this->dnsServers) {
            if (\is_array($this->dnsServers)) {
                $res['DnsServers'] = [];
                $n1 = 0;
                foreach ($this->dnsServers as $item1) {
                    $res['DnsServers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostTable) {
            if (\is_array($this->hostTable)) {
                $res['HostTable'] = [];
                foreach ($this->hostTable as $key1 => $value1) {
                    $res['HostTable'][$key1] = $value1;
                }
            }
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
        if (isset($map['ClearCacheEachIteration'])) {
            $model->clearCacheEachIteration = $map['ClearCacheEachIteration'];
        }

        if (isset($map['DnsServers'])) {
            if (!empty($map['DnsServers'])) {
                $model->dnsServers = [];
                $n1 = 0;
                foreach ($map['DnsServers'] as $item1) {
                    $model->dnsServers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HostTable'])) {
            if (!empty($map['HostTable'])) {
                $model->hostTable = [];
                foreach ($map['HostTable'] as $key1 => $value1) {
                    $model->hostTable[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
