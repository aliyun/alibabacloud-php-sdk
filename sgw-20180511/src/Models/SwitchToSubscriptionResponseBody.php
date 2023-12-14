<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class SwitchToSubscriptionResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example 395B1136-982E-4F95-BDCE-7323FFEF499E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example https://common-buy.aliyun.com/?commodityCode=hcs_sgw_csg_pre&request={"gateway_id":"gw-0007va9bnidei3s8a***”,”directBuy":"false","gateway_class":"standard","cache_cloud_efficiency_size":0}&regionId=cn-hangzhou#/buy
     *
     * @var string
     */
    public $subscriptionURL;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'            => 'Code',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'subscriptionURL' => 'SubscriptionURL',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subscriptionURL) {
            $res['SubscriptionURL'] = $this->subscriptionURL;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchToSubscriptionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubscriptionURL'])) {
            $model->subscriptionURL = $map['SubscriptionURL'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
