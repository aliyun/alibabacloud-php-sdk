<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserListResponseBody\userList;
use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisUserListResponseBody extends Model
{
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

    /**
     * @var userList[]
     */
    public $userList;
    protected $_name = [
        'pageNo'    => 'PageNo',
        'pageSize'  => 'PageSize',
        'requestId' => 'RequestId',
        'totalCnt'  => 'TotalCnt',
        'userList'  => 'UserList',
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
        if (null !== $this->userList) {
            $res['UserList'] = [];
            if (null !== $this->userList && \is_array($this->userList)) {
                $n = 0;
                foreach ($this->userList as $item) {
                    $res['UserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n               = 0;
                foreach ($map['UserList'] as $item) {
                    $model->userList[$n++] = null !== $item ? userList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
