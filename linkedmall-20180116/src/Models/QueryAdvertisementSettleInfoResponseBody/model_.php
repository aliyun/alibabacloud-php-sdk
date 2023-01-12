<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAdvertisementSettleInfoResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAdvertisementSettleInfoResponseBody\model\advertiseSettleInfoList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var advertiseSettleInfoList[]
     */
    public $advertiseSettleInfoList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 19
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'advertiseSettleInfoList' => 'AdvertiseSettleInfoList',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advertiseSettleInfoList) {
            $res['AdvertiseSettleInfoList'] = [];
            if (null !== $this->advertiseSettleInfoList && \is_array($this->advertiseSettleInfoList)) {
                $n = 0;
                foreach ($this->advertiseSettleInfoList as $item) {
                    $res['AdvertiseSettleInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvertiseSettleInfoList'])) {
            if (!empty($map['AdvertiseSettleInfoList'])) {
                $model->advertiseSettleInfoList = [];
                $n                              = 0;
                foreach ($map['AdvertiseSettleInfoList'] as $item) {
                    $model->advertiseSettleInfoList[$n++] = null !== $item ? advertiseSettleInfoList::fromMap($item) : $item;
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
