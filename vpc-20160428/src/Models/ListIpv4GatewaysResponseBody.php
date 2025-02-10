<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpv4GatewaysResponseBody\ipv4GatewayModels;

class ListIpv4GatewaysResponseBody extends Model
{
    /**
     * @var ipv4GatewayModels[]
     */
    public $ipv4GatewayModels;
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
        'ipv4GatewayModels' => 'Ipv4GatewayModels',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->ipv4GatewayModels)) {
            Model::validateArray($this->ipv4GatewayModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4GatewayModels) {
            if (\is_array($this->ipv4GatewayModels)) {
                $res['Ipv4GatewayModels'] = [];
                $n1                       = 0;
                foreach ($this->ipv4GatewayModels as $item1) {
                    $res['Ipv4GatewayModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4GatewayModels'])) {
            if (!empty($map['Ipv4GatewayModels'])) {
                $model->ipv4GatewayModels = [];
                $n1                       = 0;
                foreach ($map['Ipv4GatewayModels'] as $item1) {
                    $model->ipv4GatewayModels[$n1++] = ipv4GatewayModels::fromMap($item1);
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
