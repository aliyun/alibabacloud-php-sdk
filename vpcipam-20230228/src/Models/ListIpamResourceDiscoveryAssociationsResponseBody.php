<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceDiscoveryAssociationsResponseBody\ipamResourceDiscoveryAssociations;

class ListIpamResourceDiscoveryAssociationsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var ipamResourceDiscoveryAssociations[]
     */
    public $ipamResourceDiscoveryAssociations;

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
        'ipamResourceDiscoveryAssociations' => 'IpamResourceDiscoveryAssociations',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->ipamResourceDiscoveryAssociations)) {
            Model::validateArray($this->ipamResourceDiscoveryAssociations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->ipamResourceDiscoveryAssociations) {
            if (\is_array($this->ipamResourceDiscoveryAssociations)) {
                $res['IpamResourceDiscoveryAssociations'] = [];
                $n1 = 0;
                foreach ($this->ipamResourceDiscoveryAssociations as $item1) {
                    $res['IpamResourceDiscoveryAssociations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['IpamResourceDiscoveryAssociations'])) {
            if (!empty($map['IpamResourceDiscoveryAssociations'])) {
                $model->ipamResourceDiscoveryAssociations = [];
                $n1 = 0;
                foreach ($map['IpamResourceDiscoveryAssociations'] as $item1) {
                    $model->ipamResourceDiscoveryAssociations[$n1] = ipamResourceDiscoveryAssociations::fromMap($item1);
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
