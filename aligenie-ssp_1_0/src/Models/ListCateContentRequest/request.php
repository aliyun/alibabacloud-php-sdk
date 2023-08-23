<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateContentRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @example 80010
     *
     * @var int
     */
    public $cateId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isAlbum;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example hot_score
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example DESC
     *
     * @var string
     */
    public $sortOrder;
    protected $_name = [
        'cateId'    => 'CateId',
        'isAlbum'   => 'IsAlbum',
        'pageNum'   => 'PageNum',
        'pageSize'  => 'PageSize',
        'sortBy'    => 'SortBy',
        'sortOrder' => 'SortOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->isAlbum) {
            $res['IsAlbum'] = $this->isAlbum;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['IsAlbum'])) {
            $model->isAlbum = $map['IsAlbum'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        return $model;
    }
}
