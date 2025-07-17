<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListCatalogsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Catalog;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @var Catalog[]
     */
    public $catalogs;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'catalogs' => 'Catalogs',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogs) {
            $res['Catalogs'] = [];
            if (null !== $this->catalogs && \is_array($this->catalogs)) {
                $n = 0;
                foreach ($this->catalogs as $item) {
                    $res['Catalogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Catalogs'])) {
            if (!empty($map['Catalogs'])) {
                $model->catalogs = [];
                $n = 0;
                foreach ($map['Catalogs'] as $item) {
                    $model->catalogs[$n++] = null !== $item ? Catalog::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
