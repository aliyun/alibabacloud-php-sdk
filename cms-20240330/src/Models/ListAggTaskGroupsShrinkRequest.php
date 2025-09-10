<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListAggTaskGroupsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $filterAggTaskGroupIds;

    /**
     * @var string
     */
    public $filterAggTaskGroupNames;

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
    public $query;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $targetPrometheusId;
    protected $_name = [
        'filterAggTaskGroupIds' => 'filterAggTaskGroupIds',
        'filterAggTaskGroupNames' => 'filterAggTaskGroupNames',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'query' => 'query',
        'status' => 'status',
        'tagsShrink' => 'tags',
        'targetPrometheusId' => 'targetPrometheusId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterAggTaskGroupIds) {
            $res['filterAggTaskGroupIds'] = $this->filterAggTaskGroupIds;
        }

        if (null !== $this->filterAggTaskGroupNames) {
            $res['filterAggTaskGroupNames'] = $this->filterAggTaskGroupNames;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
        }

        if (null !== $this->targetPrometheusId) {
            $res['targetPrometheusId'] = $this->targetPrometheusId;
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
        if (isset($map['filterAggTaskGroupIds'])) {
            $model->filterAggTaskGroupIds = $map['filterAggTaskGroupIds'];
        }

        if (isset($map['filterAggTaskGroupNames'])) {
            $model->filterAggTaskGroupNames = $map['filterAggTaskGroupNames'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }

        if (isset($map['targetPrometheusId'])) {
            $model->targetPrometheusId = $map['targetPrometheusId'];
        }

        return $model;
    }
}
