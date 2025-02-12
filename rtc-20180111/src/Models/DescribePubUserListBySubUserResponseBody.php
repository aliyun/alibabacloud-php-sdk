<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribePubUserListBySubUserResponseBody\pubUserDetailList;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribePubUserListBySubUserResponseBody\subUserDetail;

class DescribePubUserListBySubUserResponseBody extends Model
{
    /**
     * @var string
     */
    public $callStatus;
    /**
     * @var pubUserDetailList[]
     */
    public $pubUserDetailList;
    /**
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
        if (\is_array($this->pubUserDetailList)) {
            Model::validateArray($this->pubUserDetailList);
        }
        if (null !== $this->subUserDetail) {
            $this->subUserDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }

        if (null !== $this->pubUserDetailList) {
            if (\is_array($this->pubUserDetailList)) {
                $res['PubUserDetailList'] = [];
                $n1                       = 0;
                foreach ($this->pubUserDetailList as $item1) {
                    $res['PubUserDetailList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subUserDetail) {
            $res['SubUserDetail'] = null !== $this->subUserDetail ? $this->subUserDetail->toArray($noStream) : $this->subUserDetail;
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
        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }

        if (isset($map['PubUserDetailList'])) {
            if (!empty($map['PubUserDetailList'])) {
                $model->pubUserDetailList = [];
                $n1                       = 0;
                foreach ($map['PubUserDetailList'] as $item1) {
                    $model->pubUserDetailList[$n1++] = pubUserDetailList::fromMap($item1);
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
