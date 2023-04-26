<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SearchMediaRequest extends Model
{
    /**
     * @description Details about media assets.
     *
     * @example Title,CoverURL
     *
     * @var string
     */
    public $fields;

    /**
     * @description The preprocessing status. Only preprocessed videos can be used for live streaming in the production studio. Valid values:
     *
     *   **UnPreprocess**
     *   **Preprocessing**
     *   **PreprocessSucceed**
     *   **PreprocessFailed**
     *
     * @example field = value
     *
     * @var string
     */
    public $match;

    /**
     * @description The ID of the media asset.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The type of the media asset that you want to query. Default value: video. Valid values:
     *
     *   **video**
     *   **audio**
     *   **image**
     *   **attached**
     *
     * > If this parameter is set to **video** or **audio** and you want to traverse all data that meets the filter criteria, you must set the ScrollToken parameter.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The tags of the image file.
     *
     * @example 24e0fba7188fae707e146esa54****
     *
     * @var string
     */
    public $scrollToken;

    /**
     * @description The list of sprite snapshots.
     *
     * @example video
     *
     * @var string
     */
    public $searchType;

    /**
     * @description The size of the video file.
     *
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
