<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryRequest\aggregations;
use AlibabaCloud\Tea\Model;

class SimpleQueryRequest extends Model
{
    /**
     * @description 聚合字段
     *
     * @var aggregations[]
     */
    public $aggregations;

    /**
     * @description Dataset 名称
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description 本次读取的最大数据记录数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 标记当前开始读取的位置，置空表示从头开始
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 排序字段
     *
     * @var string
     */
    public $order;

    /**
     * @description 项目名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @var SimpleQuery
     */
    public $query;

    /**
     * @description 排序方式，默认 DESC
     *
     * @var string
     */
    public $sort;

    /**
     * @description 仅返回哪些字段
     *
     * @var string[]
     */
    public $withFields;
    protected $_name = [
        'aggregations' => 'Aggregations',
        'datasetName'  => 'DatasetName',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'order'        => 'Order',
        'projectName'  => 'ProjectName',
        'query'        => 'Query',
        'sort'         => 'Sort',
        'withFields'   => 'WithFields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregations) {
            $res['Aggregations'] = [];
            if (null !== $this->aggregations && \is_array($this->aggregations)) {
                $n = 0;
                foreach ($this->aggregations as $item) {
                    $res['Aggregations'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Query'] = null !== $this->query ? $this->query->toMap() : null;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->withFields) {
            $res['WithFields'] = $this->withFields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimpleQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregations'])) {
            if (!empty($map['Aggregations'])) {
                $model->aggregations = [];
                $n                   = 0;
                foreach ($map['Aggregations'] as $item) {
                    $model->aggregations[$n++] = null !== $item ? aggregations::fromMap($item) : $item;
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
                $model->withFields = $map['WithFields'];
            }
        }

        return $model;
    }
}
