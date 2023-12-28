<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelTopPubUserListResponseBody\topPubUserDetailList;
use AlibabaCloud\Tea\Model;

class DescribeChannelTopPubUserListResponseBody extends Model
{
    /**
     * @example 231470C1-ACFB-4C9F-844F-4CFE1E3804C5
     *
     * @var string
     */
    public $requestId;

    /**
     * @var topPubUserDetailList[]
     */
    public $topPubUserDetailList;
    protected $_name = [
        'requestId'            => 'RequestId',
        'topPubUserDetailList' => 'TopPubUserDetailList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->topPubUserDetailList) {
            $res['TopPubUserDetailList'] = [];
            if (null !== $this->topPubUserDetailList && \is_array($this->topPubUserDetailList)) {
                $n = 0;
                foreach ($this->topPubUserDetailList as $item) {
                    $res['TopPubUserDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelTopPubUserListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TopPubUserDetailList'])) {
            if (!empty($map['TopPubUserDetailList'])) {
                $model->topPubUserDetailList = [];
                $n                           = 0;
                foreach ($map['TopPubUserDetailList'] as $item) {
                    $model->topPubUserDetailList[$n++] = null !== $item ? topPubUserDetailList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
