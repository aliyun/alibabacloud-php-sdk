<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ModifyHichinaDomainDNSResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $newDnsServers;

    /**
     * @var string[]
     */
    public $originalDnsServers;
    protected $_name = [
        'requestId'          => 'RequestId',
        'newDnsServers'      => 'NewDnsServers',
        'originalDnsServers' => 'OriginalDnsServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->newDnsServers) {
            $res['NewDnsServers'] = $this->newDnsServers;
        }
        if (null !== $this->originalDnsServers) {
            $res['OriginalDnsServers'] = $this->originalDnsServers;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NewDnsServers'])) {
            if (!empty($map['NewDnsServers'])) {
                $model->newDnsServers = $map['NewDnsServers'];
            }
        }
        if (isset($map['OriginalDnsServers'])) {
            if (!empty($map['OriginalDnsServers'])) {
                $model->originalDnsServers = $map['OriginalDnsServers'];
            }
        }

        return $model;
    }
}
