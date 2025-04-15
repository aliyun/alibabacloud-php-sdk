<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelTopPubUserListResponseBody\topPubUserDetailList;

class DescribeChannelTopPubUserListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var topPubUserDetailList[]
     */
    public $topPubUserDetailList;
    protected $_name = [
        'requestId' => 'RequestId',
        'topPubUserDetailList' => 'TopPubUserDetailList',
    ];

    public function validate()
    {
        if (\is_array($this->topPubUserDetailList)) {
            Model::validateArray($this->topPubUserDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->topPubUserDetailList) {
            if (\is_array($this->topPubUserDetailList)) {
                $res['TopPubUserDetailList'] = [];
                $n1 = 0;
                foreach ($this->topPubUserDetailList as $item1) {
                    $res['TopPubUserDetailList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TopPubUserDetailList'])) {
            if (!empty($map['TopPubUserDetailList'])) {
                $model->topPubUserDetailList = [];
                $n1 = 0;
                foreach ($map['TopPubUserDetailList'] as $item1) {
                    $model->topPubUserDetailList[$n1++] = topPubUserDetailList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
