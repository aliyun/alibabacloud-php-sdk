<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamDiscoveredResourceResponseBody\ipamDiscoveredResources;

class ListIpamDiscoveredResourceResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var ipamDiscoveredResources[]
     */
    public $ipamDiscoveredResources;

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
        'count' => 'Count',
        'ipamDiscoveredResources' => 'IpamDiscoveredResources',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->ipamDiscoveredResources)) {
            Model::validateArray($this->ipamDiscoveredResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->ipamDiscoveredResources) {
            if (\is_array($this->ipamDiscoveredResources)) {
                $res['IpamDiscoveredResources'] = [];
                $n1 = 0;
                foreach ($this->ipamDiscoveredResources as $item1) {
                    $res['IpamDiscoveredResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['IpamDiscoveredResources'])) {
            if (!empty($map['IpamDiscoveredResources'])) {
                $model->ipamDiscoveredResources = [];
                $n1 = 0;
                foreach ($map['IpamDiscoveredResources'] as $item1) {
                    $model->ipamDiscoveredResources[$n1] = ipamDiscoveredResources::fromMap($item1);
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
