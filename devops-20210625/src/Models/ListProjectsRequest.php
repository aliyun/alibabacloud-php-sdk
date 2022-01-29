<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListProjectsRequest extends Model
{
    /**
     * @description 项目类型
     *
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
     * @description 每页最大返回数量，0-200，默认值20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 分页中的起始序列
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 公开类型
     *
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
