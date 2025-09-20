<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryRequest\aggregations;

class SimpleQueryRequest extends Model
{
    /**
     * @var aggregations[]
     */
    public $aggregations;

    /**
     * @var string
     */
    public $datasetName;

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
    public $order;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var SimpleQuery
     */
    public $query;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string[]
     */
    public $withFields;

    /**
     * @var bool
     */
    public $withoutTotalHits;
    protected $_name = [
        'aggregations' => 'Aggregations',
        'datasetName' => 'DatasetName',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'order' => 'Order',
        'projectName' => 'ProjectName',
        'query' => 'Query',
        'sort' => 'Sort',
        'withFields' => 'WithFields',
        'withoutTotalHits' => 'WithoutTotalHits',
    ];

    public function validate()
    {
        if (\is_array($this->aggregations)) {
            Model::validateArray($this->aggregations);
        }
        if (null !== $this->query) {
            $this->query->validate();
        }
        if (\is_array($this->withFields)) {
            Model::validateArray($this->withFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregations) {
            if (\is_array($this->aggregations)) {
                $res['Aggregations'] = [];
                $n1 = 0;
                foreach ($this->aggregations as $item1) {
                    $res['Aggregations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->query) {
            $res['Query'] = null !== $this->query ? $this->query->toArray($noStream) : $this->query;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->withFields) {
            if (\is_array($this->withFields)) {
                $res['WithFields'] = [];
                $n1 = 0;
                foreach ($this->withFields as $item1) {
                    $res['WithFields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->withoutTotalHits) {
            $res['WithoutTotalHits'] = $this->withoutTotalHits;
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
        if (isset($map['Aggregations'])) {
            if (!empty($map['Aggregations'])) {
                $model->aggregations = [];
                $n1 = 0;
                foreach ($map['Aggregations'] as $item1) {
                    $model->aggregations[$n1] = aggregations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Query'])) {
            $model->query = SimpleQuery::fromMap($map['Query']);
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['WithFields'])) {
            if (!empty($map['WithFields'])) {
                $model->withFields = [];
                $n1 = 0;
                foreach ($map['WithFields'] as $item1) {
                    $model->withFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WithoutTotalHits'])) {
            $model->withoutTotalHits = $map['WithoutTotalHits'];
        }

        return $model;
    }
}
