<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SimpleQueryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aggregationsShrink;

    /**
     * @description This parameter is required.
     *
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example asc,desc
     *
     * @var string
     */
    public $order;

    /**
     * @description This parameter is required.
     *
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $queryShrink;

    /**
     * @example Size,Filename
     *
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $withFieldsShrink;

    /**
     * @var bool
     */
    public $withoutTotalHits;
    protected $_name = [
        'aggregationsShrink' => 'Aggregations',
        'datasetName'        => 'DatasetName',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'order'              => 'Order',
        'projectName'        => 'ProjectName',
        'queryShrink'        => 'Query',
        'sort'               => 'Sort',
        'withFieldsShrink'   => 'WithFields',
        'withoutTotalHits'   => 'WithoutTotalHits',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregationsShrink) {
            $res['Aggregations'] = $this->aggregationsShrink;
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
        if (null !== $this->queryShrink) {
            $res['Query'] = $this->queryShrink;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->withFieldsShrink) {
            $res['WithFields'] = $this->withFieldsShrink;
        }
        if (null !== $this->withoutTotalHits) {
            $res['WithoutTotalHits'] = $this->withoutTotalHits;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimpleQueryShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregations'])) {
            $model->aggregationsShrink = $map['Aggregations'];
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
            $model->queryShrink = $map['Query'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['WithFields'])) {
            $model->withFieldsShrink = $map['WithFields'];
        }
        if (isset($map['WithoutTotalHits'])) {
            $model->withoutTotalHits = $map['WithoutTotalHits'];
        }

        return $model;
    }
}
