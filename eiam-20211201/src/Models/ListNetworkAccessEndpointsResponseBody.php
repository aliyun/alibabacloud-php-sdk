<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessEndpointsResponseBody\networkAccessEndpoints;

class ListNetworkAccessEndpointsResponseBody extends Model
{
    /**
     * @var networkAccessEndpoints[]
     */
    public $networkAccessEndpoints;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'networkAccessEndpoints' => 'NetworkAccessEndpoints',
        'nextToken'              => 'NextToken',
        'requestId'              => 'RequestId',
        'totalCount'             => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->networkAccessEndpoints)) {
            Model::validateArray($this->networkAccessEndpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkAccessEndpoints) {
            if (\is_array($this->networkAccessEndpoints)) {
                $res['NetworkAccessEndpoints'] = [];
                $n1                            = 0;
                foreach ($this->networkAccessEndpoints as $item1) {
                    $res['NetworkAccessEndpoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetworkAccessEndpoints'])) {
            if (!empty($map['NetworkAccessEndpoints'])) {
                $model->networkAccessEndpoints = [];
                $n1                            = 0;
                foreach ($map['NetworkAccessEndpoints'] as $item1) {
                    $model->networkAccessEndpoints[$n1++] = networkAccessEndpoints::fromMap($item1);
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
