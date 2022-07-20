<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLiveSubListResponseBody\subInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveSubListResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @var subInfoList[]
     */
    public $subInfoList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo'      => 'PageNo',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'subInfoList' => 'SubInfoList',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subInfoList) {
            $res['SubInfoList'] = [];
            if (null !== $this->subInfoList && \is_array($this->subInfoList)) {
                $n = 0;
                foreach ($this->subInfoList as $item) {
                    $res['SubInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveSubListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubInfoList'])) {
            if (!empty($map['SubInfoList'])) {
                $model->subInfoList = [];
                $n                  = 0;
                foreach ($map['SubInfoList'] as $item) {
                    $model->subInfoList[$n++] = null !== $item ? subInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
