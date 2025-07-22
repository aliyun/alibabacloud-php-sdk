<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelParticipantsResponseBody\userList;
use AlibabaCloud\Tea\Model;

class DescribeChannelParticipantsResponseBody extends Model
{
    /**
     * @example 6159ba01-6687-4fb2-a831-f0cd8d188648
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1557909133
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalPage;

    /**
     * @var userList
     */
    public $userList;
    protected $_name = [
        'requestId' => 'RequestId',
        'timestamp' => 'Timestamp',
        'totalNum' => 'TotalNum',
        'totalPage' => 'TotalPage',
        'userList' => 'UserList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->userList) {
            $res['UserList'] = null !== $this->userList ? $this->userList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelParticipantsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['UserList'])) {
            $model->userList = userList::fromMap($map['UserList']);
        }

        return $model;
    }
}
