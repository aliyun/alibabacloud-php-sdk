<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SearchMediaByAILabelRequest extends Model
{
    /**
     * @var string
     */
    public $matchingMode;
    /**
     * @var string
     */
    public $mediaId;
    /**
     * @var string
     */
    public $mediaType;
    /**
     * @var string
     */
    public $multimodalSearchType;
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
    public $searchLibName;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var bool
     */
    public $specificSearch;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
