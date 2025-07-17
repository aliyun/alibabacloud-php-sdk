<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListLineageRelationshipsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\LineageRelationship;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @var LineageRelationship[]
     */
    public $lineageRelationships;

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
     * @example 123
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'lineageRelationships' => 'LineageRelationships',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineageRelationships) {
            $res['LineageRelationships'] = [];
            if (null !== $this->lineageRelationships && \is_array($this->lineageRelationships)) {
                $n = 0;
                foreach ($this->lineageRelationships as $item) {
                    $res['LineageRelationships'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['LineageRelationships'])) {
            if (!empty($map['LineageRelationships'])) {
                $model->lineageRelationships = [];
                $n = 0;
                foreach ($map['LineageRelationships'] as $item) {
                    $model->lineageRelationships[$n++] = null !== $item ? LineageRelationship::fromMap($item) : $item;
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
