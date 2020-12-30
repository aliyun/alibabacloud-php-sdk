<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDomainConfigPageResponseBody\configList\instances;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var string[]
     */
    public $proxyTypeList;

    /**
     * @var string
     */
    public $line;

    /**
     * @var string[]
     */
    public $realServers;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'proxyTypeList' => 'ProxyTypeList',
        'line'          => 'Line',
        'realServers'   => 'RealServers',
        'ip'            => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->proxyTypeList) {
            $res['ProxyTypeList'] = $this->proxyTypeList;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = $this->realServers;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProxyTypeList'])) {
            if (!empty($map['ProxyTypeList'])) {
                $model->proxyTypeList = $map['ProxyTypeList'];
            }
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = $map['RealServers'];
            }
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
