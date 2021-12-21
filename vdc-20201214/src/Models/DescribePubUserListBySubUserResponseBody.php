<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribePubUserListBySubUserResponseBody\pubUserDetailList;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribePubUserListBySubUserResponseBody\subUserDetail;
use AlibabaCloud\Tea\Model;

class DescribePubUserListBySubUserResponseBody extends Model
{
    /**
     * @description 通信状态。取值：IN：进行中。OUT：已结束。
     *
     * @var string
     */
    public $callStatus;

    /**
     * @description 发布端用户详情信息。
     *
     * @var pubUserDetailList[]
     */
    public $pubUserDetailList;

    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 订阅端用户详细信息。
     *
     * @var subUserDetail
     */
    public $subUserDetail;
    protected $_name = [
        'callStatus'        => 'CallStatus',
        'pubUserDetailList' => 'PubUserDetailList',
        'requestId'         => 'RequestId',
        'subUserDetail'     => 'SubUserDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }
        if (null !== $this->pubUserDetailList) {
            $res['PubUserDetailList'] = [];
            if (null !== $this->pubUserDetailList && \is_array($this->pubUserDetailList)) {
                $n = 0;
                foreach ($this->pubUserDetailList as $item) {
                    $res['PubUserDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subUserDetail) {
            $res['SubUserDetail'] = null !== $this->subUserDetail ? $this->subUserDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePubUserListBySubUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }
        if (isset($map['PubUserDetailList'])) {
            if (!empty($map['PubUserDetailList'])) {
                $model->pubUserDetailList = [];
                $n                        = 0;
                foreach ($map['PubUserDetailList'] as $item) {
                    $model->pubUserDetailList[$n++] = null !== $item ? pubUserDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubUserDetail'])) {
            $model->subUserDetail = subUserDetail::fromMap($map['SubUserDetail']);
        }

        return $model;
    }
}
