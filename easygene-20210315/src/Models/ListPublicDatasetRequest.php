<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class ListPublicDatasetRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isReversed;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 0f2cc944-67db-4fb1-bb10-f136cda74bda
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example LastModified, DatasetName
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example 西蒙斯基因组多样性计划
     *
     * @var string
     */
    public $search;

    /**
     * @example 遗传多样性
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'isReversed' => 'IsReversed',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'orderBy'    => 'OrderBy',
        'search'     => 'Search',
        'tag'        => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isReversed) {
            $res['IsReversed'] = $this->isReversed;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPublicDatasetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsReversed'])) {
            $model->isReversed = $map['IsReversed'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
