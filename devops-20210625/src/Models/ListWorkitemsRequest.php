<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListWorkitemsRequest extends Model
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
     * @var string
     */
    public $groupCondition;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $searchType;

    /**
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @var string
     */
    public $spaceType;
    protected $_name = [
        'category'        => 'category',
        'conditions'      => 'conditions',
        'extraConditions' => 'extraConditions',
        'groupCondition'  => 'groupCondition',
        'maxResults'      => 'maxResults',
        'nextToken'       => 'nextToken',
        'orderBy'         => 'orderBy',
        'searchType'      => 'searchType',
        'spaceIdentifier' => 'spaceIdentifier',
        'spaceType'       => 'spaceType',
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
        if (null !== $this->groupCondition) {
            $res['groupCondition'] = $this->groupCondition;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }
        if (null !== $this->searchType) {
            $res['searchType'] = $this->searchType;
        }
        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }
        if (null !== $this->spaceType) {
            $res['spaceType'] = $this->spaceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkitemsRequest
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
        if (isset($map['groupCondition'])) {
            $model->groupCondition = $map['groupCondition'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }
        if (isset($map['searchType'])) {
            $model->searchType = $map['searchType'];
        }
        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }
        if (isset($map['spaceType'])) {
            $model->spaceType = $map['spaceType'];
        }

        return $model;
    }
}
