<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class SearchAcrossCatalogRequest extends Model
{
    /**
     * @var string[]
     */
    public $catalogIds;

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
     * @var string[]
     */
    public $searchTypes;

    /**
     * @var SortCriterion[]
     */
    public $sortCriteria;
    protected $_name = [
        'catalogIds'   => 'CatalogIds',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'searchText'   => 'SearchText',
        'searchTypes'  => 'SearchTypes',
        'sortCriteria' => 'SortCriteria',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogIds) {
            $res['CatalogIds'] = $this->catalogIds;
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
        if (null !== $this->searchTypes) {
            $res['SearchTypes'] = $this->searchTypes;
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
     * @return SearchAcrossCatalogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogIds'])) {
            if (!empty($map['CatalogIds'])) {
                $model->catalogIds = $map['CatalogIds'];
            }
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
        if (isset($map['SearchTypes'])) {
            if (!empty($map['SearchTypes'])) {
                $model->searchTypes = $map['SearchTypes'];
            }
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
