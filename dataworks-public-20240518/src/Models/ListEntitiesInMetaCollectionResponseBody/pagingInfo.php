<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListEntitiesInMetaCollectionResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListEntitiesInMetaCollectionResponseBody\pagingInfo\entities;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @description The entities in the collection.
     *
     * @var entities[]
     */
    public $entities;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'entities' => 'Entities',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->entities) {
            $res['Entities'] = [];
            if (null !== $this->entities && \is_array($this->entities)) {
                $n = 0;
                foreach ($this->entities as $item) {
                    $res['Entities'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Entities'])) {
            if (!empty($map['Entities'])) {
                $model->entities = [];
                $n = 0;
                foreach ($map['Entities'] as $item) {
                    $model->entities[$n++] = null !== $item ? entities::fromMap($item) : $item;
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
