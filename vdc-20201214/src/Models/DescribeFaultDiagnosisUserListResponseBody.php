<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserListResponseBody\userList;
use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisUserListResponseBody extends Model
{
    /**
     * @description 异常用户明细列表。
     *
     * @var userList[]
     */
    public $userList;

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
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'userList'  => 'UserList',
        'pageNo'    => 'PageNo',
        'pageSize'  => 'PageSize',
        'totalCnt'  => 'TotalCnt',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userList) {
            $res['UserList'] = [];
            if (null !== $this->userList && \is_array($this->userList)) {
                $n = 0;
                foreach ($this->userList as $item) {
                    $res['UserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCnt) {
            $res['TotalCnt'] = $this->totalCnt;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaultDiagnosisUserListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n               = 0;
                foreach ($map['UserList'] as $item) {
                    $model->userList[$n++] = null !== $item ? userList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
