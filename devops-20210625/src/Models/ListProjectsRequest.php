<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListProjectsRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $conditions;

    /**
     * @var string
     */
    public $extraConditions;

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
    public $scope;
    protected $_name = [
        'category'        => 'category',
        'conditions'      => 'conditions',
        'extraConditions' => 'extraConditions',
        'maxResults'      => 'maxResults',
        'nextToken'       => 'nextToken',
        'scope'           => 'scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->conditions) {
            $res['conditions'] = $this->conditions;
        }
        if (null !== $this->extraConditions) {
            $res['extraConditions'] = $this->extraConditions;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['conditions'])) {
            $model->conditions = $map['conditions'];
        }
        if (isset($map['extraConditions'])) {
            $model->extraConditions = $map['extraConditions'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        return $model;
    }
}
