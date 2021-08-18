<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallListResponseBody\callList;
use AlibabaCloud\Tea\Model;

class DescribeCallListResponseBody extends Model
{
    /**
     * @description 页码。
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description 每页数量。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 总数量。
     *
     * @var int
     */
    public $totalCnt;

    /**
     * @description 通信列表。
     *
     * @var callList[]
     */
    public $callList;

    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageNo'    => 'PageNo',
        'pageSize'  => 'PageSize',
        'totalCnt'  => 'TotalCnt',
        'callList'  => 'CallList',
        'requestId' => 'RequestId',
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
        if (null !== $this->totalCnt) {
            $res['TotalCnt'] = $this->totalCnt;
        }
        if (null !== $this->callList) {
            $res['CallList'] = [];
            if (null !== $this->callList && \is_array($this->callList)) {
                $n = 0;
                foreach ($this->callList as $item) {
                    $res['CallList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCallListResponseBody
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
        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }
        if (isset($map['CallList'])) {
            if (!empty($map['CallList'])) {
                $model->callList = [];
                $n               = 0;
                foreach ($map['CallList'] as $item) {
                    $model->callList[$n++] = null !== $item ? callList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
