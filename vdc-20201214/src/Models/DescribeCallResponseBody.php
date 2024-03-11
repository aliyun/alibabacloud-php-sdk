<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallResponseBody\callInfo;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallResponseBody\userDetailList;
use AlibabaCloud\Tea\Model;

class DescribeCallResponseBody extends Model
{
    /**
     * @var callInfo
     */
    public $callInfo;

    /**
     * @example EC4960AA-A407-4853-975E-D68F253E18FF
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
