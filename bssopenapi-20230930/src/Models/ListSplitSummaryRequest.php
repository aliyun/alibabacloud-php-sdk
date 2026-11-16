<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListSplitSummaryRequest\commonFilters;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListSplitSummaryRequest\costCategoriesFilters;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListSplitSummaryRequest\ecIdAccountIds;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListSplitSummaryRequest\period;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListSplitSummaryRequest\tagFilters;

class ListSplitSummaryRequest extends Model
{
    /**
     * @var commonFilters[]
     */
    public $commonFilters;

    /**
     * @var costCategoriesFilters[]
     */
    public $costCategoriesFilters;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var period
     */
    public $period;

    /**
     * @var tagFilters[]
     */
    public $tagFilters;
    protected $_name = [
        'commonFilters' => 'CommonFilters',
        'costCategoriesFilters' => 'CostCategoriesFilters',
        'ecIdAccountIds' => 'EcIdAccountIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'period' => 'Period',
        'tagFilters' => 'TagFilters',
    ];

    public function validate()
    {
        if (\is_array($this->commonFilters)) {
            Model::validateArray($this->commonFilters);
        }
        if (\is_array($this->costCategoriesFilters)) {
            Model::validateArray($this->costCategoriesFilters);
        }
        if (\is_array($this->ecIdAccountIds)) {
            Model::validateArray($this->ecIdAccountIds);
        }
        if (null !== $this->period) {
            $this->period->validate();
        }
        if (\is_array($this->tagFilters)) {
            Model::validateArray($this->tagFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonFilters) {
            if (\is_array($this->commonFilters)) {
                $res['CommonFilters'] = [];
                $n1 = 0;
                foreach ($this->commonFilters as $item1) {
                    $res['CommonFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->costCategoriesFilters) {
            if (\is_array($this->costCategoriesFilters)) {
                $res['CostCategoriesFilters'] = [];
                $n1 = 0;
                foreach ($this->costCategoriesFilters as $item1) {
                    $res['CostCategoriesFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ecIdAccountIds) {
            if (\is_array($this->ecIdAccountIds)) {
                $res['EcIdAccountIds'] = [];
                $n1 = 0;
                foreach ($this->ecIdAccountIds as $item1) {
                    $res['EcIdAccountIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->period) {
            $res['Period'] = null !== $this->period ? $this->period->toArray($noStream) : $this->period;
        }

        if (null !== $this->tagFilters) {
            if (\is_array($this->tagFilters)) {
                $res['TagFilters'] = [];
                $n1 = 0;
                foreach ($this->tagFilters as $item1) {
                    $res['TagFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CommonFilters'])) {
            if (!empty($map['CommonFilters'])) {
                $model->commonFilters = [];
                $n1 = 0;
                foreach ($map['CommonFilters'] as $item1) {
                    $model->commonFilters[$n1] = commonFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CostCategoriesFilters'])) {
            if (!empty($map['CostCategoriesFilters'])) {
                $model->costCategoriesFilters = [];
                $n1 = 0;
                foreach ($map['CostCategoriesFilters'] as $item1) {
                    $model->costCategoriesFilters[$n1] = costCategoriesFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n1 = 0;
                foreach ($map['EcIdAccountIds'] as $item1) {
                    $model->ecIdAccountIds[$n1] = ecIdAccountIds::fromMap($item1);
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

        if (isset($map['Period'])) {
            $model->period = period::fromMap($map['Period']);
        }

        if (isset($map['TagFilters'])) {
            if (!empty($map['TagFilters'])) {
                $model->tagFilters = [];
                $n1 = 0;
                foreach ($map['TagFilters'] as $item1) {
                    $model->tagFilters[$n1] = tagFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
