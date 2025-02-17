<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet;

class DescribeElasticityAssurancesResponseBody extends Model
{
    /**
     * @var elasticityAssuranceSet
     */
    public $elasticityAssuranceSet;
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
        'elasticityAssuranceSet' => 'ElasticityAssuranceSet',
        'maxResults'             => 'MaxResults',
        'nextToken'              => 'NextToken',
        'requestId'              => 'RequestId',
        'totalCount'             => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->elasticityAssuranceSet) {
            $this->elasticityAssuranceSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticityAssuranceSet) {
            $res['ElasticityAssuranceSet'] = null !== $this->elasticityAssuranceSet ? $this->elasticityAssuranceSet->toArray($noStream) : $this->elasticityAssuranceSet;
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
        if (isset($map['ElasticityAssuranceSet'])) {
            $model->elasticityAssuranceSet = elasticityAssuranceSet::fromMap($map['ElasticityAssuranceSet']);
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
