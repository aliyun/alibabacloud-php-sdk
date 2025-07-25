<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponseBody;

use AlibabaCloud\Tea\Model;

class expectDnsServers extends Model
{
    /**
     * @var string[]
     */
    public $expectDnsServer;
    protected $_name = [
        'expectDnsServer' => 'ExpectDnsServer',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->expectDnsServer) {
            $res['ExpectDnsServer'] = $this->expectDnsServer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expectDnsServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpectDnsServer'])) {
            if (!empty($map['ExpectDnsServer'])) {
                $model->expectDnsServer = $map['ExpectDnsServer'];
            }
        }

        return $model;
    }
}
