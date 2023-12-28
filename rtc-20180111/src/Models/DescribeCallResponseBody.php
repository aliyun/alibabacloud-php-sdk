<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallResponseBody\callInfo;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallResponseBody\userDetailList;
use AlibabaCloud\Tea\Model;

class DescribeCallResponseBody extends Model
{
    /**
     * @var callInfo
     */
    public $callInfo;

    /**
     * @example 231470C1-ACFB-4C9F-844F-4CFE1E3804C5
     *
     * @var string
     */
    public $requestId;

    /**
     * @var userDetailList[]
     */
    public $userDetailList;
    protected $_name = [
        'callInfo'       => 'CallInfo',
        'requestId'      => 'RequestId',
        'userDetailList' => 'UserDetailList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callInfo) {
            $res['CallInfo'] = null !== $this->callInfo ? $this->callInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeCallResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallInfo'])) {
            $model->callInfo = callInfo::fromMap($map['CallInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
