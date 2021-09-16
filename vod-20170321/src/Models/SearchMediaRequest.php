<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SearchMediaRequest extends Model
{
    /**
     * @var string
     */
    public $searchType;

    /**
     * @var string
     */
    public $fields;

    /**
     * @var string
     */
    public $match;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $scrollToken;
    protected $_name = [
        'searchType'  => 'SearchType',
        'fields'      => 'Fields',
        'match'       => 'Match',
        'sortBy'      => 'SortBy',
        'pageNo'      => 'PageNo',
        'pageSize'    => 'PageSize',
        'scrollToken' => 'ScrollToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->match) {
            $res['Match'] = $this->match;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
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
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }
        if (isset($map['Match'])) {
            $model->match = $map['Match'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
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

        return $model;
    }
}
