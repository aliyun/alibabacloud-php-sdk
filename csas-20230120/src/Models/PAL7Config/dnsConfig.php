<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config;

use AlibabaCloud\Tea\Model;

class dnsConfig extends Model
{
    /**
     * @var string[]
     */
    public $dnsServers;
    protected $_name = [
        'dnsServers' => 'DnsServers',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsServers) {
            $res['DnsServers'] = $this->dnsServers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsServers'])) {
            if (!empty($map['DnsServers'])) {
                $model->dnsServers = $map['DnsServers'];
            }
        }

        return $model;
    }
}
