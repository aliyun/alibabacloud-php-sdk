<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\monitorConf;

use AlibabaCloud\Tea\Model;

class netDNS extends Model
{
    /**
     * @description Specifies whether to use the dig command to display the data. Valid values: 0: No. 1: Yes.
     *
     * @example 0
     *
     * @var int
     */
    public $dig;

    /**
     * @description The IP version of the DNS server. Valid values: 0: IPv4. 1: IPv6. 2: A version is automatically selected. Default value: 0.
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
     * @description The DNS query method. Valid values: 0: recursive. 1: iterative. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $queryMethod;

    /**
     * @description The domain name.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description The timeout period for the DNS synthetic test. Unit: milliseconds. The minimum value is 1000 and the maximum value is 45000. Default value: 5000.
     *
     * @example 1000
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'dig'             => 'Dig',
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
        if (null !== $this->dig) {
            $res['Dig'] = $this->dig;
        }
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
        if (isset($map['Dig'])) {
            $model->dig = $map['Dig'];
        }
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
