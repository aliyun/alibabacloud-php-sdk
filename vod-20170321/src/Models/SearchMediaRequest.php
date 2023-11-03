<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SearchMediaRequest extends Model
{
    /**
     * @description The media asset fields to return in the query results.
     *
     * By default, only the basic media asset fields are returned. You can specify additional media asset fields that need to be returned in the request. For more information, see the "API examples" section of the [Search for media asset information](~~99179~~) topic.
     * @example Title,CoverURL
     *
     * @var string
     */
    public $fields;

    /**
     * @description The filter condition. For more information about the syntax, see [Protocol for media asset search](~~86991~~).
     *
     * @example field = value
     *
     * @var string
     */
    public $match;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * > If the value of this parameter exceeds **200**, we recommend that you set the ScrollToken parameter as well.
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page. Default value: **10**. Maximum value: **100**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The pagination identifier. The password must be 32 characters in length The first time you call this operation for each new search, you do not need to specify this parameter. The value of this parameter is returned each time data records that meet the specified filter condition are found. The value is used to record the current position of queried data. Record the returned parameter value and set this parameter according to the following requirements during the next search:
     *
     *   If SearchType is set to **video** or **audio** and you need to traverse all data that meets the filter criteria, you must set the ScrollToken parameter.
     *   If the value of the PageNo parameter exceeds **200**, we recommend that you set this parameter to optimize search performance.
     *
     * @example 24e0fba7188fae707e146esa54****
     *
     * @var string
     */
    public $scrollToken;

    /**
     * @description The type of the media asset that you want to query. Default value: video. Valid values:
     *
     *   **video**
     *   **audio**
     *   **image**
     *   **attached**
     *
     * > If this parameter is set to **video** or **audio** and you want to traverse all data that meets the filter criteria, you must set the ScrollToken parameter.
     * @example video
     *
     * @var string
     */
    public $searchType;

    /**
     * @description The sort field and order. Separate multiple values with commas (,). Default value: CreationTime:Desc. Valid values:
     *
     *   **CreationTime:Desc**: The results are sorted in reverse chronological order based on the creation time.
     *   **CreationTime:Asc**: The results are sorted in chronological order based on the creation time.
     *
     * > * For more information about the sort field, see "Sort field" in the [Search for media asset information](~~99179~~) topic.
     * > * To obtain the first 5,000 data records that meet the specified filter criteria, you can specify a maximum of three sort fields.
     * > * To obtain all the data records that meet the specified filter criteria, you can specify only one sort field.
     * @example CreationTime:Desc
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'fields'      => 'Fields',
        'match'       => 'Match',
        'pageNo'      => 'PageNo',
        'pageSize'    => 'PageSize',
        'scrollToken' => 'ScrollToken',
        'searchType'  => 'SearchType',
        'sortBy'      => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->match) {
            $res['Match'] = $this->match;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scrollToken) {
            $res['ScrollToken'] = $this->scrollToken;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMediaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }
        if (isset($map['Match'])) {
            $model->match = $map['Match'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScrollToken'])) {
            $model->scrollToken = $map['ScrollToken'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
