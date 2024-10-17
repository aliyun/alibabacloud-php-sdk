<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SearchMediaByAILabelRequest extends Model
{
    /**
     * @var string
     */
    public $matchingMode;

    /**
     * @description The ID of the media asset. This parameter is required if you want to query media asset clips.
     *
     * @example ****c469e944b5a856828dc2****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The type of the media assets. Valid values:
     *
     *   image
     *   video
     *   audio
     *
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description The type of query. Valid values:
     *
     *   PersonName: queries media assets based on character names.
     *   Ocr: queries media assets based on subtitles.
     *   AiCategory: queries media assets based on AI categories.
     *   FullSearch (default): queries all media assets.
     *
     * @example Ocr
     *
     * @var string
     */
    public $multimodalSearchType;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 50.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the search library.
     *
     * @example test-1
     *
     * @var string
     */
    public $searchLibName;

    /**
     * @description The sorting method of the results. Valid values:
     *
     *   CreationTime:Desc (default): sorts results in reverse chronological order.
     *   CreationTime:Asc: sorts results in chronological order.
     *
     * @example CreationTime:Desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description Specifies whether to query media asset clips. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $specificSearch;

    /**
     * @description The content that you want to query.
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'matchingMode'         => 'MatchingMode',
        'mediaId'              => 'MediaId',
        'mediaType'            => 'MediaType',
        'multimodalSearchType' => 'MultimodalSearchType',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'searchLibName'        => 'SearchLibName',
        'sortBy'               => 'SortBy',
        'specificSearch'       => 'SpecificSearch',
        'text'                 => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchingMode) {
            $res['MatchingMode'] = $this->matchingMode;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->multimodalSearchType) {
            $res['MultimodalSearchType'] = $this->multimodalSearchType;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->specificSearch) {
            $res['SpecificSearch'] = $this->specificSearch;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMediaByAILabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchingMode'])) {
            $model->matchingMode = $map['MatchingMode'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['MultimodalSearchType'])) {
            $model->multimodalSearchType = $map['MultimodalSearchType'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SpecificSearch'])) {
            $model->specificSearch = $map['SpecificSearch'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
