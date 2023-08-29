<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class SearchRequest extends Model
{
    /**
     * @description catalogid
     *
     * @example 默认是空，在多catalogid下填写对应的id
     *
     * @var string
     */
    public $catalogId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 1000
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example tags:tag1 or comment:^iso and name=aliyun and (createTime > "20211111" and createTime < "20211117") and has category
     *
     * @var string
     */
    public $searchText;

    /**
     * @example TABLE/DATABASE/CATALOG
     *
     * @var string
     */
    public $searchType;

    /**
     * @var SortCriterion[]
     */
    public $sortCriteria;
    protected $_name = [
        'catalogId'    => 'CatalogId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'searchText'   => 'SearchText',
        'searchType'   => 'SearchType',
        'sortCriteria' => 'SortCriteria',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->sortCriteria) {
            $res['SortCriteria'] = [];
            if (null !== $this->sortCriteria && \is_array($this->sortCriteria)) {
                $n = 0;
                foreach ($this->sortCriteria as $item) {
                    $res['SortCriteria'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['SortCriteria'])) {
            if (!empty($map['SortCriteria'])) {
                $model->sortCriteria = [];
                $n                   = 0;
                foreach ($map['SortCriteria'] as $item) {
                    $model->sortCriteria[$n++] = null !== $item ? SortCriterion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
