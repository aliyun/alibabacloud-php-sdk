<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallResponseBody\callInfo;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallResponseBody\userDetailList;
use AlibabaCloud\Tea\Model;

class DescribeCallResponseBody extends Model
{
    /**
     * @description 通信基本信息。
     *
     * @var callInfo
     */
    public $callInfo;

    /**
     * @description 用户详情列表。
     *
     * @var userDetailList[]
     */
    public $userDetailList;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callInfo'       => 'CallInfo',
        'userDetailList' => 'UserDetailList',
        'requestId'      => 'RequestId',
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
        if (null !== $this->userDetailList) {
            $res['UserDetailList'] = [];
            if (null !== $this->userDetailList && \is_array($this->userDetailList)) {
                $n = 0;
                foreach ($this->userDetailList as $item) {
                    $res['UserDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCallResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallInfo'])) {
            $model->callInfo = callInfo::fromMap($map['CallInfo']);
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
