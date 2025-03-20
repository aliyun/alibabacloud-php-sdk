<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetTagsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetTagsResponseBody\pagingInfo\dataAssetTags;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @description The tags.
     *
     * @var dataAssetTags[]
     */
    public $dataAssetTags;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 2524
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataAssetTags' => 'DataAssetTags',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataAssetTags) {
            $res['DataAssetTags'] = [];
            if (null !== $this->dataAssetTags && \is_array($this->dataAssetTags)) {
                $n = 0;
                foreach ($this->dataAssetTags as $item) {
                    $res['DataAssetTags'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DataAssetTags'])) {
            if (!empty($map['DataAssetTags'])) {
                $model->dataAssetTags = [];
                $n = 0;
                foreach ($map['DataAssetTags'] as $item) {
                    $model->dataAssetTags[$n++] = null !== $item ? dataAssetTags::fromMap($item) : $item;
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
