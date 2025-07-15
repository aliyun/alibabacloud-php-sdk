<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeChannelParticipantsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 6159ba01-6687-4fb2-a831-f0cd8d188648
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time elapsed until the result was returned. Unit: seconds. The value is a UNIX timestamp.
     *
     * @example 1557909133
     *
     * @var int
     */
    public $times;

    /**
     * @description The number of entries returned.
     *
     * @example 3
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $totalPage;

    /**
     * @description The list of user IDs.
     *
     * @var string[]
     */
    public $userList;
    protected $_name = [
        'requestId' => 'RequestId',
        'times' => 'Times',
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
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->userList) {
            $res['UserList'] = $this->userList;
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
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = $map['UserList'];
            }
        }

        return $model;
    }
}
