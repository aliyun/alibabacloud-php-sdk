<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListMediaLiveInputsRequest extends Model
{
    /**
     * @description The keyword of the query. You can perform a fuzzy search on input ID or name.
     *
     * @example 123
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: If you do not specify this parameter or if you set a value smaller than 10, the default value is 10. If you set a value greater than 100, the default value is 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries to be skipped in the query. If the number of entries you attempt to skip exceeds the number of entries that meet the condition, an empty list is returned.
     *
     * @example 20
     *
     * @var int
     */
    public $skip;

    /**
     * @description The sorting order of the inputs by creation time. Default value: asc. Valid values: desc and asc. asc indicates the ascending order, and desc indicates the descending order.
     *
     * @example desc
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @description The type of inputs you want to query. You can separate multiple input types with commas (,) in a JSON array.
     *
     * @example ["RTMP_PUSH","SRT_PULL"]
     *
     * @var string
     */
    public $types;
    protected $_name = [
        'keyword' => 'Keyword',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'skip' => 'Skip',
        'sortOrder' => 'SortOrder',
        'types' => 'Types',
    ];

    public function validate() {}

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
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMediaLiveInputsRequest
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
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['Types'])) {
            $model->types = $map['Types'];
        }

        return $model;
    }
}
