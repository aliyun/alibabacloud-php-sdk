<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelTopPubUserListResponseBody\topPubUserDetailList;
use AlibabaCloud\Tea\Model;

class DescribeChannelTopPubUserListResponseBody extends Model
{
    /**
     * @description Top发布用户详情列表
     *
     * @var topPubUserDetailList[]
     */
    public $topPubUserDetailList;

    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'topPubUserDetailList' => 'TopPubUserDetailList',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topPubUserDetailList) {
            $res['TopPubUserDetailList'] = [];
            if (null !== $this->topPubUserDetailList && \is_array($this->topPubUserDetailList)) {
                $n = 0;
                foreach ($this->topPubUserDetailList as $item) {
                    $res['TopPubUserDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeChannelTopPubUserListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopPubUserDetailList'])) {
            if (!empty($map['TopPubUserDetailList'])) {
                $model->topPubUserDetailList = [];
                $n                           = 0;
                foreach ($map['TopPubUserDetailList'] as $item) {
                    $model->topPubUserDetailList[$n++] = null !== $item ? topPubUserDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
