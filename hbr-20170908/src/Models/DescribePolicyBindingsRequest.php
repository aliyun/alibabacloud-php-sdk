<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsRequest\filters;

class DescribePolicyBindingsRequest extends Model
{
    /**
     * @var string[]
     */
    public $dataSourceIds;
    /**
     * @var filters[]
     */
    public $filters;
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
    public $policyId;
    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'dataSourceIds' => 'DataSourceIds',
        'filters'       => 'Filters',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'policyId'      => 'PolicyId',
        'sourceType'    => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceIds)) {
            Model::validateArray($this->dataSourceIds);
        }
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceIds) {
            if (\is_array($this->dataSourceIds)) {
                $res['DataSourceIds'] = [];
                $n1                   = 0;
                foreach ($this->dataSourceIds as $item1) {
                    $res['DataSourceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1             = 0;
                foreach ($this->filters as $item1) {
                    $res['Filters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['DataSourceIds'])) {
            if (!empty($map['DataSourceIds'])) {
                $model->dataSourceIds = [];
                $n1                   = 0;
                foreach ($map['DataSourceIds'] as $item1) {
                    $model->dataSourceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n1             = 0;
                foreach ($map['Filters'] as $item1) {
                    $model->filters[$n1++] = filters::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
