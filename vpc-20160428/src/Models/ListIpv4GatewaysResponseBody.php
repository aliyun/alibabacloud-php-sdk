<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpv4GatewaysResponseBody\ipv4GatewayModels;
use AlibabaCloud\Tea\Model;

class ListIpv4GatewaysResponseBody extends Model
{
    /**
     * @description The list of IPv4 gateways.
     *
     * @var ipv4GatewayModels[]
     */
    public $ipv4GatewayModels;

    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If no value is returned for **NextToken**, no next queries are sent.
     *   If a value of **NextToken** is returned, the value is the token that is used for the subsequent query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 2D265800-E306-529C-8418-84B0A1D201DB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'ipv4GatewayModels' => 'Ipv4GatewayModels',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4GatewayModels) {
            $res['Ipv4GatewayModels'] = [];
            if (null !== $this->ipv4GatewayModels && \is_array($this->ipv4GatewayModels)) {
                $n = 0;
                foreach ($this->ipv4GatewayModels as $item) {
                    $res['Ipv4GatewayModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpv4GatewaysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4GatewayModels'])) {
            if (!empty($map['Ipv4GatewayModels'])) {
                $model->ipv4GatewayModels = [];
                $n                        = 0;
                foreach ($map['Ipv4GatewayModels'] as $item) {
                    $model->ipv4GatewayModels[$n++] = null !== $item ? ipv4GatewayModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
