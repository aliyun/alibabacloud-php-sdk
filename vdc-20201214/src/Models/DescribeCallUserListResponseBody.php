<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallUserListResponseBody\userDetailList;
use AlibabaCloud\Tea\Model;

class DescribeCallUserListResponseBody extends Model
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
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCnt;

    /**
     * @var userDetailList[]
     */
    public $userDetailList;
    protected $_name = [
        'pageNo'         => 'PageNo',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'totalCnt'       => 'TotalCnt',
        'userDetailList' => 'UserDetailList',
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
        if (null !== $this->totalCnt) {
            $res['TotalCnt'] = $this->totalCnt;
        }
        if (null !== $this->userDetailList) {
            $res['UserDetailList'] = [];
            if (null !== $this->userDetailList && \is_array($this->userDetailList)) {
                $n = 0;
                foreach ($this->userDetailList as $item) {
                    $res['UserDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCallUserListResponseBody
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
        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }
        if (isset($map['UserDetailList'])) {
            if (!empty($map['UserDetailList'])) {
                $model->userDetailList = [];
                $n                     = 0;
                foreach ($map['UserDetailList'] as $item) {
                    $model->userDetailList[$n++] = null !== $item ? userDetailList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
