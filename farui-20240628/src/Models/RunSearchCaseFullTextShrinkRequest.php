<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\Dara\Model;

class RunSearchCaseFullTextShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $filterConditionShrink;

    /**
     * @var string
     */
    public $pageParamShrink;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $queryKeywordsShrink;

    /**
     * @var string
     */
    public $referLevel;

    /**
     * @var string
     */
    public $sortKeyAndDirectionShrink;

    /**
     * @var string
     */
    public $threadShrink;
    protected $_name = [
        'appId' => 'appId',
        'filterConditionShrink' => 'filterCondition',
        'pageParamShrink' => 'pageParam',
        'query' => 'query',
        'queryKeywordsShrink' => 'queryKeywords',
        'referLevel' => 'referLevel',
        'sortKeyAndDirectionShrink' => 'sortKeyAndDirection',
        'threadShrink' => 'thread',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->filterConditionShrink) {
            $res['filterCondition'] = $this->filterConditionShrink;
        }

        if (null !== $this->pageParamShrink) {
            $res['pageParam'] = $this->pageParamShrink;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->queryKeywordsShrink) {
            $res['queryKeywords'] = $this->queryKeywordsShrink;
        }

        if (null !== $this->referLevel) {
            $res['referLevel'] = $this->referLevel;
        }

        if (null !== $this->sortKeyAndDirectionShrink) {
            $res['sortKeyAndDirection'] = $this->sortKeyAndDirectionShrink;
        }

        if (null !== $this->threadShrink) {
            $res['thread'] = $this->threadShrink;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['filterCondition'])) {
            $model->filterConditionShrink = $map['filterCondition'];
        }

        if (isset($map['pageParam'])) {
            $model->pageParamShrink = $map['pageParam'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['queryKeywords'])) {
            $model->queryKeywordsShrink = $map['queryKeywords'];
        }

        if (isset($map['referLevel'])) {
            $model->referLevel = $map['referLevel'];
        }

        if (isset($map['sortKeyAndDirection'])) {
            $model->sortKeyAndDirectionShrink = $map['sortKeyAndDirection'];
        }

        if (isset($map['thread'])) {
            $model->threadShrink = $map['thread'];
        }

        return $model;
    }
}
