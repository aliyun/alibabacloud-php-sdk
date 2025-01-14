<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetsResponseBody\pagingInfo\dataAssets;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @var dataAssets[]
     */
    public $dataAssets;

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
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataAssets' => 'DataAssets',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataAssets) {
            $res['DataAssets'] = [];
            if (null !== $this->dataAssets && \is_array($this->dataAssets)) {
                $n = 0;
                foreach ($this->dataAssets as $item) {
                    $res['DataAssets'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DataAssets'])) {
            if (!empty($map['DataAssets'])) {
                $model->dataAssets = [];
                $n                 = 0;
                foreach ($map['DataAssets'] as $item) {
                    $model->dataAssets[$n++] = null !== $item ? dataAssets::fromMap($item) : $item;
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
