<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewayCacheDiskResponseBody extends Model
{
    /**
     * @example https://common-buy.aliyun.com/?commodityCode=hcs_sgw_csg_pre&request={"gateway_id":"gw-0007va9bnidei3s8a***","directBuy":"false","gateway_class":"standard","cache_cloud_efficiency_size":0}&regionId=cn-hangzhou#/buy
     *
     * @var string
     */
    public $buyURL;

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
     * @example 8E69E1A1-9076-4C8C-8ADF-ACD253886E22
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example t-0001xv7je357xv4st***
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'buyURL'    => 'BuyURL',
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyURL) {
            $res['BuyURL'] = $this->buyURL;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayCacheDiskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyURL'])) {
            $model->buyURL = $map['BuyURL'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
