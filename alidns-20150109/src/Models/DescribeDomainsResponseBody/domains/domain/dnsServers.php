<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponseBody\domains\domain;

use AlibabaCloud\Tea\Model;

class dnsServers extends Model
{
    /**
     * @var string[]
     */
    public $dnsServer;
    protected $_name = [
        'dnsServer' => 'DnsServer',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsServer) {
            $res['DnsServer'] = $this->dnsServer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsServer'])) {
            if (!empty($map['DnsServer'])) {
                $model->dnsServer = $map['DnsServer'];
            }
        }

        return $model;
    }
}
