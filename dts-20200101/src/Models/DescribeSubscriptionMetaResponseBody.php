<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionMetaResponseBody\subscriptionMetaList;

class DescribeSubscriptionMetaResponseBody extends Model
{
    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var subscriptionMetaList[]
     */
    public $subscriptionMetaList;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId' => 'RequestId',
        'subscriptionMetaList' => 'SubscriptionMetaList',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->subscriptionMetaList)) {
            Model::validateArray($this->subscriptionMetaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subscriptionMetaList) {
            if (\is_array($this->subscriptionMetaList)) {
                $res['SubscriptionMetaList'] = [];
                $n1 = 0;
                foreach ($this->subscriptionMetaList as $item1) {
                    $res['SubscriptionMetaList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SubscriptionMetaList'])) {
            if (!empty($map['SubscriptionMetaList'])) {
                $model->subscriptionMetaList = [];
                $n1 = 0;
                foreach ($map['SubscriptionMetaList'] as $item1) {
                    $model->subscriptionMetaList[$n1++] = subscriptionMetaList::fromMap($item1);
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
