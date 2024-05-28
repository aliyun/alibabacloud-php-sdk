<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorNodesResponseBody\ipv4IspCityNodes;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorNodesResponseBody\ipv6IspCityNodes;
use AlibabaCloud\Tea\Model;

class ListCloudGtmMonitorNodesResponseBody extends Model
{
    /**
     * @var ipv4IspCityNodes
     */
    public $ipv4IspCityNodes;

    /**
     * @var ipv6IspCityNodes
     */
    public $ipv6IspCityNodes;

    /**
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipv4IspCityNodes' => 'Ipv4IspCityNodes',
        'ipv6IspCityNodes' => 'Ipv6IspCityNodes',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4IspCityNodes) {
            $res['Ipv4IspCityNodes'] = null !== $this->ipv4IspCityNodes ? $this->ipv4IspCityNodes->toMap() : null;
        }
        if (null !== $this->ipv6IspCityNodes) {
            $res['Ipv6IspCityNodes'] = null !== $this->ipv6IspCityNodes ? $this->ipv6IspCityNodes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudGtmMonitorNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4IspCityNodes'])) {
            $model->ipv4IspCityNodes = ipv4IspCityNodes::fromMap($map['Ipv4IspCityNodes']);
        }
        if (isset($map['Ipv6IspCityNodes'])) {
            $model->ipv6IspCityNodes = ipv6IspCityNodes::fromMap($map['Ipv6IspCityNodes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
