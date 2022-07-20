<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayQoeListResponseBody\qoeInfoList;
use AlibabaCloud\Tea\Model;

class DescribePlayQoeListResponseBody extends Model
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
     * @var qoeInfoList[]
     */
    public $qoeInfoList;

    /**
     * @description Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo'      => 'PageNo',
        'pageSize'    => 'PageSize',
        'qoeInfoList' => 'QoeInfoList',
        'requestId'   => 'RequestId',
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
        if (null !== $this->qoeInfoList) {
            $res['QoeInfoList'] = [];
            if (null !== $this->qoeInfoList && \is_array($this->qoeInfoList)) {
                $n = 0;
                foreach ($this->qoeInfoList as $item) {
                    $res['QoeInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlayQoeListResponseBody
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
        if (isset($map['QoeInfoList'])) {
            if (!empty($map['QoeInfoList'])) {
                $model->qoeInfoList = [];
                $n                  = 0;
                foreach ($map['QoeInfoList'] as $item) {
                    $model->qoeInfoList[$n++] = null !== $item ? qoeInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
