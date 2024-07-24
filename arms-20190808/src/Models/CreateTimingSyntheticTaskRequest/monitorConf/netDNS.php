<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf;

use AlibabaCloud\Tea\Model;

class netDNS extends Model
{
    /**
     * @description The IP version of the DNS server.
     *
     *   0 (default value): IPv4.
     *   1: IPv6.
     *   2: A version is automatically selected.
     *
     * @example 0
     *
     * @var int
     */
    public $dnsServerIpType;

    /**
     * @description The IP address of the DNS server. Default value: 114.114.114.114.
     *
     * @example 114.114.114.114
     *
     * @var string
     */
    public $nsServer;

    /**
     * @description The DNS query method. Valid values:
     *
     *   0 (default value): recursive
     *   1: iterative
     *
     * @example 0
     *
     * @var int
     */
    public $queryMethod;

    /**
     * @description The destination domain name.
     *
     * This parameter is required.
     * @example www.aliyun.com
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description The timeout period for the DNS synthetic test. Unit: milliseconds. Minimum value: 1000. Maximum value: 45000. Default value: 5000.
     *
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
