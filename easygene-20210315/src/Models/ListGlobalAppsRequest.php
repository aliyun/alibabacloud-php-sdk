<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class ListGlobalAppsRequest extends Model
{
    /**
     * @example OpenAccess
     *
     * @var string
     */
    public $appScope;

    /**
     * @example 群体变异
     *
     * @var string
     */
    public $category;

    /**
     * @example true
     *
     * @var bool
     */
    public $isReversed;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $location;

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
     * @example AppName, LastModified, Used
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example 群体变异
     *
     * @var string
     */
    public $search;

    /**
     * @example Sentieon
     *
     * @var string
     */
    public $toolkit;
    protected $_name = [
        'appScope'   => 'AppScope',
        'category'   => 'Category',
        'isReversed' => 'IsReversed',
        'location'   => 'Location',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'orderBy'    => 'OrderBy',
        'search'     => 'Search',
        'toolkit'    => 'Toolkit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appScope) {
            $res['AppScope'] = $this->appScope;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->isReversed) {
            $res['IsReversed'] = $this->isReversed;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
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
        if (null !== $this->toolkit) {
            $res['Toolkit'] = $this->toolkit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGlobalAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppScope'])) {
            $model->appScope = $map['AppScope'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['IsReversed'])) {
            $model->isReversed = $map['IsReversed'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
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
        if (isset($map['Toolkit'])) {
            $model->toolkit = $map['Toolkit'];
        }

        return $model;
    }
}
