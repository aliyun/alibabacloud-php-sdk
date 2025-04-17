<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class FuzzyQueryShrinkRequest extends Model
{
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
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $withFieldsShrink;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'order' => 'Order',
        'projectName' => 'ProjectName',
        'query' => 'Query',
        'sort' => 'Sort',
        'withFieldsShrink' => 'WithFields',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
            $res['Query'] = $this->query;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->withFieldsShrink) {
            $res['WithFields'] = $this->withFieldsShrink;
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
            $model->query = $map['Query'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['WithFields'])) {
            $model->withFieldsShrink = $map['WithFields'];
        }

        return $model;
    }
}
