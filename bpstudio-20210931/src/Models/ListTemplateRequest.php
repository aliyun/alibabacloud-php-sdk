<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class ListTemplateRequest extends Model
{
    /**
     * @description The keyword that is used to search for templates.
     *
     * @example cadt
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $nextToken;

    /**
     * @description The criterion by which the returned templates are sorted. Valid values:
     *
     *   1: The templates are sorted by the time when they are updated.
     *   2: The templates are sorted by the time when they are created.
     *   3: The templates are sorted by the system.
     *   4: The templates are sorted by the number of times that they are used.
     *   If you specify an integer other than 1, 2, 3, and 4 or do not specify any value, the templates are sorted by the system.
     *
     * @example 1
     *
     * @var int
     */
    public $orderType;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmyjt3c5om3hi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tag that you want to use to query templates.
     *
     * @example 1
     *
     * @var int
     */
    public $tagList;

    /**
     * @description The type of the templates to be returned. Valid values: public and private
     *
     * @example public
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'keyword'         => 'Keyword',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'orderType'       => 'OrderType',
        'resourceGroupId' => 'ResourceGroupId',
        'tagList'         => 'TagList',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TagList'])) {
            $model->tagList = $map['TagList'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
