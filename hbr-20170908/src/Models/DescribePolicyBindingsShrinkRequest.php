<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsShrinkRequest\filters;
use AlibabaCloud\Tea\Model;

class DescribePolicyBindingsShrinkRequest extends Model
{
    /**
     * @description List of data source IDs.
     *
     * @var string
     */
    public $dataSourceIdsShrink;

    /**
     * @description Query filters.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description Number of results per query.
     *
     * Range: 10~100. Default: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Token required to fetch the next page of policy and data source associations.
     *
     * @example caeba0bbb2be03f84eb48b699f0a
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Policy ID.
     *
     * @example po-000************hky
     *
     * @var string
     */
    public $policyId;

    /**
     * @description Data source type. Possible values:
     * **UDM_ECS**: Indicates ECS full machine backup.
     *
     * @example UDM_ECS
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'dataSourceIdsShrink' => 'DataSourceIds',
        'filters' => 'Filters',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'policyId' => 'PolicyId',
        'sourceType' => 'SourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceIdsShrink) {
            $res['DataSourceIds'] = $this->dataSourceIdsShrink;
        }
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribePolicyBindingsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceIds'])) {
            $model->dataSourceIdsShrink = $map['DataSourceIds'];
        }
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
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
