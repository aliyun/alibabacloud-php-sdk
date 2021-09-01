<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAdvertisementSettleInfoResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAdvertisementSettleInfoResponseBody\model\advertiseSettleInfoList;
use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var advertiseSettleInfoList[]
     */
    public $advertiseSettleInfoList;
    protected $_name = [
        'pageSize'                => 'PageSize',
        'pageNumber'              => 'PageNumber',
        'totalCount'              => 'TotalCount',
        'advertiseSettleInfoList' => 'AdvertiseSettleInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->advertiseSettleInfoList) {
            $res['AdvertiseSettleInfoList'] = [];
            if (null !== $this->advertiseSettleInfoList && \is_array($this->advertiseSettleInfoList)) {
                $n = 0;
                foreach ($this->advertiseSettleInfoList as $item) {
                    $res['AdvertiseSettleInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['AdvertiseSettleInfoList'])) {
            if (!empty($map['AdvertiseSettleInfoList'])) {
                $model->advertiseSettleInfoList = [];
                $n                              = 0;
                foreach ($map['AdvertiseSettleInfoList'] as $item) {
                    $model->advertiseSettleInfoList[$n++] = null !== $item ? advertiseSettleInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
