<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListMetaCollectionsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListMetaCollectionsResponseBody\data\metaCollections;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The collections.
     *
     * @var metaCollections[]
     */
    public $metaCollections;

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
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'metaCollections' => 'MetaCollections',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaCollections) {
            $res['MetaCollections'] = [];
            if (null !== $this->metaCollections && \is_array($this->metaCollections)) {
                $n = 0;
                foreach ($this->metaCollections as $item) {
                    $res['MetaCollections'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetaCollections'])) {
            if (!empty($map['MetaCollections'])) {
                $model->metaCollections = [];
                $n = 0;
                foreach ($map['MetaCollections'] as $item) {
                    $model->metaCollections[$n++] = null !== $item ? metaCollections::fromMap($item) : $item;
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
