<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallResponseBody\callInfo;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallResponseBody\userDetailList;

class DescribeCallResponseBody extends Model
{
    /**
     * @var callInfo
     */
    public $callInfo;
    /**
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
        if (null !== $this->callInfo) {
            $this->callInfo->validate();
        }
        if (\is_array($this->userDetailList)) {
            Model::validateArray($this->userDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callInfo) {
            $res['CallInfo'] = null !== $this->callInfo ? $this->callInfo->toArray($noStream) : $this->callInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userDetailList) {
            if (\is_array($this->userDetailList)) {
                $res['UserDetailList'] = [];
                $n1                    = 0;
                foreach ($this->userDetailList as $item1) {
                    $res['UserDetailList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                    = 0;
                foreach ($map['UserDetailList'] as $item1) {
                    $model->userDetailList[$n1++] = userDetailList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
