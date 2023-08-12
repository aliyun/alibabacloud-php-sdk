<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;

use AlibabaCloud\Tea\Model;

class netDNS extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $dnsServerIpType;

    /**
     * @example 114.114.114.114
     *
     * @var string
     */
    public $nsServer;

    /**
     * @example 0
     *
     * @var int
     */
    public $queryMethod;

    /**
     * @example www.aliyun.com
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @example 5000
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'dnsServerIpType' => 'DnsServerIpType',
        'nsServer'        => 'NsServer',
        'queryMethod'     => 'QueryMethod',
        'targetUrl'       => 'TargetUrl',
        'timeout'         => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsServerIpType) {
            $res['DnsServerIpType'] = $this->dnsServerIpType;
        }
        if (null !== $this->nsServer) {
            $res['NsServer'] = $this->nsServer;
        }
        if (null !== $this->queryMethod) {
            $res['QueryMethod'] = $this->queryMethod;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netDNS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsServerIpType'])) {
            $model->dnsServerIpType = $map['DnsServerIpType'];
        }
        if (isset($map['NsServer'])) {
            $model->nsServer = $map['NsServer'];
        }
        if (isset($map['QueryMethod'])) {
            $model->queryMethod = $map['QueryMethod'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
