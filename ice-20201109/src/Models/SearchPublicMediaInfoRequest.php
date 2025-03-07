<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SearchPublicMediaInfoRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $authorized;

    /**
     * @example "ApprovalStatus=\\"Available\\"&amp;MaterialBags=\\"boutiquemusic\\"&amp;Mood=\\"Nervous\\""
     *
     * @var string
     */
    public $dynamicMetaDataMatchFields;

    /**
     * @example Copyright_Music
     *
     * @var string
     */
    public $entityId;

    /**
     * @example true
     *
     * @var bool
     */
    public $favorite;

    /**
     * @example ****20b48fb04483915d4f2cd8ac****,****15d4a4b0448391508f2cb486****
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example UsageCount:Desc,UnitPrice:Asc
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'authorized'                 => 'Authorized',
        'dynamicMetaDataMatchFields' => 'DynamicMetaDataMatchFields',
        'entityId'                   => 'EntityId',
        'favorite'                   => 'Favorite',
        'mediaIds'                   => 'MediaIds',
        'pageNo'                     => 'PageNo',
        'pageSize'                   => 'PageSize',
        'sortBy'                     => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }
        if (null !== $this->dynamicMetaDataMatchFields) {
            $res['DynamicMetaDataMatchFields'] = $this->dynamicMetaDataMatchFields;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->favorite) {
            $res['Favorite'] = $this->favorite;
        }
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchPublicMediaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }
        if (isset($map['DynamicMetaDataMatchFields'])) {
            $model->dynamicMetaDataMatchFields = $map['DynamicMetaDataMatchFields'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Favorite'])) {
            $model->favorite = $map['Favorite'];
        }
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
