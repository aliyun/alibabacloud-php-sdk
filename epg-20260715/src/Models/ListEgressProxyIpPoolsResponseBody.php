<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyIpPoolsResponseBody\egressProxyIpPools;

class ListEgressProxyIpPoolsResponseBody extends Model
{
    /**
     * @var egressProxyIpPools[]
     */
    public $egressProxyIpPools;

    /**
     * @var int
     */
    public $maxResults;

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
        'egressProxyIpPools' => 'EgressProxyIpPools',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->egressProxyIpPools)) {
            Model::validateArray($this->egressProxyIpPools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressProxyIpPools) {
            if (\is_array($this->egressProxyIpPools)) {
                $res['EgressProxyIpPools'] = [];
                $n1 = 0;
                foreach ($this->egressProxyIpPools as $item1) {
                    $res['EgressProxyIpPools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
        if (isset($map['EgressProxyIpPools'])) {
            if (!empty($map['EgressProxyIpPools'])) {
                $model->egressProxyIpPools = [];
                $n1 = 0;
                foreach ($map['EgressProxyIpPools'] as $item1) {
                    $model->egressProxyIpPools[$n1] = egressProxyIpPools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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
