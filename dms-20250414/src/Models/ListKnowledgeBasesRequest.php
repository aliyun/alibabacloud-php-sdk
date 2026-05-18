<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ListKnowledgeBasesRequest extends Model
{
    /**
     * @var string
     */
    public $filters;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $namePattern;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $sortFieldName;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'filters' => 'Filters',
        'maxResults' => 'MaxResults',
        'namePattern' => 'NamePattern',
        'nextToken' => 'NextToken',
        'sortFieldName' => 'SortFieldName',
        'sortOrder' => 'SortOrder',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filters) {
            $res['Filters'] = $this->filters;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->namePattern) {
            $res['NamePattern'] = $this->namePattern;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->sortFieldName) {
            $res['SortFieldName'] = $this->sortFieldName;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['Filters'])) {
            $model->filters = $map['Filters'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NamePattern'])) {
            $model->namePattern = $map['NamePattern'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['SortFieldName'])) {
            $model->sortFieldName = $map['SortFieldName'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
