<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAggTaskGroupsRequest\tags;

class ListAggTaskGroupsRequest extends Model
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
     * @var tags[]
     */
    public $tags;

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
        'tags' => 'tags',
        'targetPrometheusId' => 'targetPrometheusId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['targetPrometheusId'])) {
            $model->targetPrometheusId = $map['targetPrometheusId'];
        }

        return $model;
    }
}
