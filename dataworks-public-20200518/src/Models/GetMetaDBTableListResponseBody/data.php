<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBTableListResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBTableListResponseBody\data\tableEntityList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total number of compute engine instances.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The list of metatables in the compute engine instance.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The GUID of the metatable.
     *
     * @var tableEntityList[]
     */
    public $tableEntityList;

    /**
     * @description The name of the metatable.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'tableEntityList' => 'TableEntityList',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tableEntityList) {
            $res['TableEntityList'] = [];
            if (null !== $this->tableEntityList && \is_array($this->tableEntityList)) {
                $n = 0;
                foreach ($this->tableEntityList as $item) {
                    $res['TableEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TableEntityList'])) {
            if (!empty($map['TableEntityList'])) {
                $model->tableEntityList = [];
                $n                      = 0;
                foreach ($map['TableEntityList'] as $item) {
                    $model->tableEntityList[$n++] = null !== $item ? tableEntityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
