<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceInstancesResponseBody\elasticityAssuranceItem;
use AlibabaCloud\Tea\Model;

class DescribeElasticityAssuranceInstancesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $maxResults;

    /**
     * @var elasticityAssuranceItem[]
     */
    public $elasticityAssuranceItem;
    protected $_name = [
        'totalCount'              => 'TotalCount',
        'nextToken'               => 'NextToken',
        'requestId'               => 'RequestId',
        'maxResults'              => 'MaxResults',
        'elasticityAssuranceItem' => 'ElasticityAssuranceItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->elasticityAssuranceItem) {
            $res['ElasticityAssuranceItem'] = [];
            if (null !== $this->elasticityAssuranceItem && \is_array($this->elasticityAssuranceItem)) {
                $n = 0;
                foreach ($this->elasticityAssuranceItem as $item) {
                    $res['ElasticityAssuranceItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticityAssuranceInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['ElasticityAssuranceItem'])) {
            if (!empty($map['ElasticityAssuranceItem'])) {
                $model->elasticityAssuranceItem = [];
                $n                              = 0;
                foreach ($map['ElasticityAssuranceItem'] as $item) {
                    $model->elasticityAssuranceItem[$n++] = null !== $item ? elasticityAssuranceItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
