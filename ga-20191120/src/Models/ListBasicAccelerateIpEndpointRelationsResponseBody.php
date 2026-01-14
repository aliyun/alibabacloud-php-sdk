<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAccelerateIpEndpointRelationsResponseBody\accelerateIpEndpointRelations;

class ListBasicAccelerateIpEndpointRelationsResponseBody extends Model
{
    /**
     * @var accelerateIpEndpointRelations[]
     */
    public $accelerateIpEndpointRelations;

    /**
     * @var string
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
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'accelerateIpEndpointRelations' => 'AccelerateIpEndpointRelations',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->accelerateIpEndpointRelations)) {
            Model::validateArray($this->accelerateIpEndpointRelations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerateIpEndpointRelations) {
            if (\is_array($this->accelerateIpEndpointRelations)) {
                $res['AccelerateIpEndpointRelations'] = [];
                $n1 = 0;
                foreach ($this->accelerateIpEndpointRelations as $item1) {
                    $res['AccelerateIpEndpointRelations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccelerateIpEndpointRelations'])) {
            if (!empty($map['AccelerateIpEndpointRelations'])) {
                $model->accelerateIpEndpointRelations = [];
                $n1 = 0;
                foreach ($map['AccelerateIpEndpointRelations'] as $item1) {
                    $model->accelerateIpEndpointRelations[$n1] = accelerateIpEndpointRelations::fromMap($item1);
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
