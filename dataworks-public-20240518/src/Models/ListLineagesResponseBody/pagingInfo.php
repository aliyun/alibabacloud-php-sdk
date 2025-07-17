<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListLineagesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListLineagesResponseBody\pagingInfo\lineages;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @var lineages[]
     */
    public $lineages;

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
     * @example 12
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'lineages' => 'Lineages',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineages) {
            $res['Lineages'] = [];
            if (null !== $this->lineages && \is_array($this->lineages)) {
                $n = 0;
                foreach ($this->lineages as $item) {
                    $res['Lineages'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Lineages'])) {
            if (!empty($map['Lineages'])) {
                $model->lineages = [];
                $n = 0;
                foreach ($map['Lineages'] as $item) {
                    $model->lineages[$n++] = null !== $item ? lineages::fromMap($item) : $item;
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
