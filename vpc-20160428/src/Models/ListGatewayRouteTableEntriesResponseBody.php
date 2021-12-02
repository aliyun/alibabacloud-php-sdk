<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListGatewayRouteTableEntriesResponseBody\gatewayRouteEntryModels;
use AlibabaCloud\Tea\Model;

class ListGatewayRouteTableEntriesResponseBody extends Model
{
    /**
     * @var gatewayRouteEntryModels[]
     */
    public $gatewayRouteEntryModels;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'gatewayRouteEntryModels' => 'GatewayRouteEntryModels',
        'nextToken'               => 'NextToken',
        'requestId'               => 'RequestId',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayRouteEntryModels) {
            $res['GatewayRouteEntryModels'] = [];
            if (null !== $this->gatewayRouteEntryModels && \is_array($this->gatewayRouteEntryModels)) {
                $n = 0;
                foreach ($this->gatewayRouteEntryModels as $item) {
                    $res['GatewayRouteEntryModels'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListGatewayRouteTableEntriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayRouteEntryModels'])) {
            if (!empty($map['GatewayRouteEntryModels'])) {
                $model->gatewayRouteEntryModels = [];
                $n                              = 0;
                foreach ($map['GatewayRouteEntryModels'] as $item) {
                    $model->gatewayRouteEntryModels[$n++] = null !== $item ? gatewayRouteEntryModels::fromMap($item) : $item;
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
