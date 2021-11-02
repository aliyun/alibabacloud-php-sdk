<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMediaSettleInfoResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMediaSettleInfoResponseBody\model\mediaSettleInfoList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var mediaSettleInfoList[]
     */
    public $mediaSettleInfoList;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'mediaSettleInfoList' => 'MediaSettleInfoList',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaSettleInfoList) {
            $res['MediaSettleInfoList'] = [];
            if (null !== $this->mediaSettleInfoList && \is_array($this->mediaSettleInfoList)) {
                $n = 0;
                foreach ($this->mediaSettleInfoList as $item) {
                    $res['MediaSettleInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['MediaSettleInfoList'])) {
            if (!empty($map['MediaSettleInfoList'])) {
                $model->mediaSettleInfoList = [];
                $n                          = 0;
                foreach ($map['MediaSettleInfoList'] as $item) {
                    $model->mediaSettleInfoList[$n++] = null !== $item ? mediaSettleInfoList::fromMap($item) : $item;
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
