<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceInstancesResponse\elasticityAssuranceItem;
use AlibabaCloud\Tea\Model;

class DescribeElasticityAssuranceInstancesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var elasticityAssuranceItem
     */
    public $elasticityAssuranceItem;
    protected $_name = [
        'requestId'               => 'RequestId',
        'nextToken'               => 'NextToken',
        'maxResults'              => 'MaxResults',
        'totalCount'              => 'TotalCount',
        'elasticityAssuranceItem' => 'ElasticityAssuranceItem',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('maxResults', $this->maxResults, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('elasticityAssuranceItem', $this->elasticityAssuranceItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->elasticityAssuranceItem) {
            $res['ElasticityAssuranceItem'] = null !== $this->elasticityAssuranceItem ? $this->elasticityAssuranceItem->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticityAssuranceInstancesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ElasticityAssuranceItem'])) {
            $model->elasticityAssuranceItem = elasticityAssuranceItem::fromMap($map['ElasticityAssuranceItem']);
        }

        return $model;
    }
}
