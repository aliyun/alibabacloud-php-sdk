<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ListSplitSummaryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $commonFiltersShrink;

    /**
     * @var string
     */
    public $costCategoriesFiltersShrink;

    /**
     * @var string
     */
    public $ecIdAccountIdsShrink;

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
    public $periodShrink;

    /**
     * @var string
     */
    public $tagFiltersShrink;
    protected $_name = [
        'commonFiltersShrink' => 'CommonFilters',
        'costCategoriesFiltersShrink' => 'CostCategoriesFilters',
        'ecIdAccountIdsShrink' => 'EcIdAccountIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'periodShrink' => 'Period',
        'tagFiltersShrink' => 'TagFilters',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonFiltersShrink) {
            $res['CommonFilters'] = $this->commonFiltersShrink;
        }

        if (null !== $this->costCategoriesFiltersShrink) {
            $res['CostCategoriesFilters'] = $this->costCategoriesFiltersShrink;
        }

        if (null !== $this->ecIdAccountIdsShrink) {
            $res['EcIdAccountIds'] = $this->ecIdAccountIdsShrink;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->periodShrink) {
            $res['Period'] = $this->periodShrink;
        }

        if (null !== $this->tagFiltersShrink) {
            $res['TagFilters'] = $this->tagFiltersShrink;
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
            $model->commonFiltersShrink = $map['CommonFilters'];
        }

        if (isset($map['CostCategoriesFilters'])) {
            $model->costCategoriesFiltersShrink = $map['CostCategoriesFilters'];
        }

        if (isset($map['EcIdAccountIds'])) {
            $model->ecIdAccountIdsShrink = $map['EcIdAccountIds'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Period'])) {
            $model->periodShrink = $map['Period'];
        }

        if (isset($map['TagFilters'])) {
            $model->tagFiltersShrink = $map['TagFilters'];
        }

        return $model;
    }
}
