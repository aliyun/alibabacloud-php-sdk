<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePalyListResponseBody\playList;
use AlibabaCloud\Tea\Model;

class DescribePalyListResponseBody extends Model
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
     * @var playList[]
     */
    public $playList;

    /**
     * @description Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCnt;
    protected $_name = [
        'pageNo'    => 'PageNo',
        'pageSize'  => 'PageSize',
        'playList'  => 'PlayList',
        'requestId' => 'RequestId',
        'totalCnt'  => 'TotalCnt',
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
        if (null !== $this->playList) {
            $res['PlayList'] = [];
            if (null !== $this->playList && \is_array($this->playList)) {
                $n = 0;
                foreach ($this->playList as $item) {
                    $res['PlayList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCnt) {
            $res['TotalCnt'] = $this->totalCnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePalyListResponseBody
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
        if (isset($map['PlayList'])) {
            if (!empty($map['PlayList'])) {
                $model->playList = [];
                $n               = 0;
                foreach ($map['PlayList'] as $item) {
                    $model->playList[$n++] = null !== $item ? playList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }

        return $model;
    }
}
