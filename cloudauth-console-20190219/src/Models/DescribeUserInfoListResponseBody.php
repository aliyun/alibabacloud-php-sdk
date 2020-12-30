<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models;

use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeUserInfoListResponseBody\userInfoList;
use AlibabaCloud\Tea\Model;

class DescribeUserInfoListResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userInfoList[]
     */
    public $userInfoList;
    protected $_name = [
        'totalCount'   => 'TotalCount',
        'requestId'    => 'RequestId',
        'userInfoList' => 'UserInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userInfoList) {
            $res['UserInfoList'] = [];
            if (null !== $this->userInfoList && \is_array($this->userInfoList)) {
                $n = 0;
                foreach ($this->userInfoList as $item) {
                    $res['UserInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserInfoListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserInfoList'])) {
            if (!empty($map['UserInfoList'])) {
                $model->userInfoList = [];
                $n                   = 0;
                foreach ($map['UserInfoList'] as $item) {
                    $model->userInfoList[$n++] = null !== $item ? userInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
