<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMediaSettleInfoResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMediaSettleInfoResponseBody\model\mediaSettleInfoList;
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
     * @var mediaSettleInfoList[]
     */
    public $mediaSettleInfoList;
    protected $_name = [
        'pageSize'            => 'PageSize',
        'pageNumber'          => 'PageNumber',
        'totalCount'          => 'TotalCount',
        'mediaSettleInfoList' => 'MediaSettleInfoList',
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
        if (null !== $this->mediaSettleInfoList) {
            $res['MediaSettleInfoList'] = [];
            if (null !== $this->mediaSettleInfoList && \is_array($this->mediaSettleInfoList)) {
                $n = 0;
                foreach ($this->mediaSettleInfoList as $item) {
                    $res['MediaSettleInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['MediaSettleInfoList'])) {
            if (!empty($map['MediaSettleInfoList'])) {
                $model->mediaSettleInfoList = [];
                $n                          = 0;
                foreach ($map['MediaSettleInfoList'] as $item) {
                    $model->mediaSettleInfoList[$n++] = null !== $item ? mediaSettleInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
