<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ListConsumeSummaryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $commonFiltersShrink;

    /**
     * @var string
     */
    public $dimensionType;

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
    protected $_name = [
        'commonFiltersShrink' => 'CommonFilters',
        'dimensionType' => 'DimensionType',
        'ecIdAccountIdsShrink' => 'EcIdAccountIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'periodShrink' => 'Period',
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

        if (null !== $this->dimensionType) {
            $res['DimensionType'] = $this->dimensionType;
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

        if (isset($map['DimensionType'])) {
            $model->dimensionType = $map['DimensionType'];
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

        return $model;
    }
}
