<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListConsumeSummaryRequest\commonFilters;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListConsumeSummaryRequest\ecIdAccountIds;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListConsumeSummaryRequest\period;

class ListConsumeSummaryRequest extends Model
{
    /**
     * @var commonFilters[]
     */
    public $commonFilters;

    /**
     * @var string
     */
    public $dimensionType;

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
    protected $_name = [
        'commonFilters' => 'CommonFilters',
        'dimensionType' => 'DimensionType',
        'ecIdAccountIds' => 'EcIdAccountIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'period' => 'Period',
    ];

    public function validate()
    {
        if (\is_array($this->commonFilters)) {
            Model::validateArray($this->commonFilters);
        }
        if (\is_array($this->ecIdAccountIds)) {
            Model::validateArray($this->ecIdAccountIds);
        }
        if (null !== $this->period) {
            $this->period->validate();
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

        if (null !== $this->dimensionType) {
            $res['DimensionType'] = $this->dimensionType;
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

        if (isset($map['DimensionType'])) {
            $model->dimensionType = $map['DimensionType'];
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

        return $model;
    }
}
