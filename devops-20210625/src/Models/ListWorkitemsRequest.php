<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListWorkitemsRequest extends Model
{
    /**
     * @example Req
     *
     * @var string
     */
    public $category;

    /**
     * @example {"conditionGroups":[]}
     *
     * @var string
     */
    public $conditions;

    /**
     * @example {"conditionGroups":[]}
     *
     * @var string
     */
    public $extraConditions;

    /**
     * @example {"fieldIdentifier":"tag","className":"tag","format":"multiList","value":["c76e0e4bf64801cfad73......"],"operator":"EQUALS"}
     *
     * @var string
     */
    public $groupCondition;

    /**
     * @example 20
     *
     * @var string
     */
    public $maxResults;

    /**
     * @example ""
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example {"fieldIdentifier":"status","format":"list","order":"desc","className":"status"}
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example LIST
     *
     * @var string
     */
    public $searchType;

    /**
     * @example 8fb83debd69a6c7c6626......
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @example Project
     *
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
