<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;

use AlibabaCloud\Dara\Model;

class netDNS extends Model
{
    /**
     * @var int
     */
    public $dnsServerIpType;

    /**
     * @var string
     */
    public $nsServer;

    /**
     * @var int
     */
    public $queryMethod;

    /**
     * @var string
     */
    public $targetUrl;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'dnsServerIpType' => 'DnsServerIpType',
        'nsServer' => 'NsServer',
        'queryMethod' => 'QueryMethod',
        'targetUrl' => 'TargetUrl',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
