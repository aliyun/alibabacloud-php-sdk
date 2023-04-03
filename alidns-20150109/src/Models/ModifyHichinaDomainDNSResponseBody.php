<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ModifyHichinaDomainDNSResponseBody\newDnsServers;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ModifyHichinaDomainDNSResponseBody\originalDnsServers;
use AlibabaCloud\Tea\Model;

class ModifyHichinaDomainDNSResponseBody extends Model
{
    /**
     * @description The list of DNS servers after the domain name is changed.
     *
     * @var newDnsServers
     */
    public $newDnsServers;

    /**
     * @description The list of DNS servers before the domain name is changed.
     *
     * @var originalDnsServers
     */
    public $originalDnsServers;

    /**
     * @description The ID of the request.
     *
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'newDnsServers'      => 'NewDnsServers',
        'originalDnsServers' => 'OriginalDnsServers',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newDnsServers) {
            $res['NewDnsServers'] = null !== $this->newDnsServers ? $this->newDnsServers->toMap() : null;
        }
        if (null !== $this->originalDnsServers) {
            $res['OriginalDnsServers'] = null !== $this->originalDnsServers ? $this->originalDnsServers->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHichinaDomainDNSResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewDnsServers'])) {
            $model->newDnsServers = newDnsServers::fromMap($map['NewDnsServers']);
        }
        if (isset($map['OriginalDnsServers'])) {
            $model->originalDnsServers = originalDnsServers::fromMap($map['OriginalDnsServers']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
