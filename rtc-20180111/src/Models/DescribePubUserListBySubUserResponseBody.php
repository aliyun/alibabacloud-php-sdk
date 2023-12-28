<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribePubUserListBySubUserResponseBody\pubUserDetailList;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribePubUserListBySubUserResponseBody\subUserDetail;
use AlibabaCloud\Tea\Model;

class DescribePubUserListBySubUserResponseBody extends Model
{
    /**
     * @example IN
     *
     * @var string
     */
    public $callStatus;

    /**
     * @var pubUserDetailList[]
     */
    public $pubUserDetailList;

    /**
     * @example 231470C1-ACFB-4C9F-844F-4CFE1E3804C5
     *
     * @var string
     */
    public $requestId;

    /**
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
