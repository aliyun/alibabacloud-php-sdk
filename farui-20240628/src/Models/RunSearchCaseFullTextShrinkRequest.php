<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\Tea\Model;

class RunSearchCaseFullTextShrinkRequest extends Model
{
    /**
     * @example farui
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $filterConditionShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $pageParamShrink;

    /**
     * @description This parameter is required.
     *
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
    public $sortKeyAndDirectionShrink;

    /**
     * @var string
     */
    public $threadShrink;
    protected $_name = [
        'appId'                     => 'appId',
        'filterConditionShrink'     => 'filterCondition',
        'pageParamShrink'           => 'pageParam',
        'query'                     => 'query',
        'queryKeywordsShrink'       => 'queryKeywords',
        'sortKeyAndDirectionShrink' => 'sortKeyAndDirection',
        'threadShrink'              => 'thread',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->sortKeyAndDirectionShrink) {
            $res['sortKeyAndDirection'] = $this->sortKeyAndDirectionShrink;
        }
        if (null !== $this->threadShrink) {
            $res['thread'] = $this->threadShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunSearchCaseFullTextShrinkRequest
     */
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
        if (isset($map['sortKeyAndDirection'])) {
            $model->sortKeyAndDirectionShrink = $map['sortKeyAndDirection'];
        }
        if (isset($map['thread'])) {
            $model->threadShrink = $map['thread'];
        }

        return $model;
    }
}
