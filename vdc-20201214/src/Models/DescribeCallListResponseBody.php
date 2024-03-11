<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallListResponseBody\callList;
use AlibabaCloud\Tea\Model;

class DescribeCallListResponseBody extends Model
{
    /**
     * @var callList[]
     */
    public $callList;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 231470C1-ACFB-4C9F-844F-4CFE1E3804C5
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalCnt;
    protected $_name = [
        'callList'  => 'CallList',
        'pageNo'    => 'PageNo',
        'pageSize'  => 'PageSize',
        'requestId' => 'RequestId',
        'totalCnt'  => 'TotalCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callList) {
            $res['CallList'] = [];
            if (null !== $this->callList && \is_array($this->callList)) {
                $n = 0;
                foreach ($this->callList as $item) {
                    $res['CallList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeCallListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallList'])) {
            if (!empty($map['CallList'])) {
                $model->callList = [];
                $n               = 0;
                foreach ($map['CallList'] as $item) {
                    $model->callList[$n++] = null !== $item ? callList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
