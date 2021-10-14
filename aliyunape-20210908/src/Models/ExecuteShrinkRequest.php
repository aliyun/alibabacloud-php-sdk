<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class ExecuteShrinkRequest extends Model
{
    /**
     * @description appName
     *
     * @var string
     */
    public $appName;

    /**
     * @description source
     *
     * @var string
     */
    public $channel;

    /**
     * @description extendParam
     *
     * @var string
     */
    public $extendParamShrink;

    /**
     * @description orderId
     *
     * @var string
     */
    public $orderId;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description serviceParam
     *
     * @var string
     */
    public $serviceParamShrink;

    /**
     * @description aliyunPk
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'appName'            => 'AppName',
        'channel'            => 'Channel',
        'extendParamShrink'  => 'ExtendParam',
        'orderId'            => 'OrderId',
        'requestId'          => 'RequestId',
        'serviceParamShrink' => 'ServiceParam',
        'userId'             => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->extendParamShrink) {
            $res['ExtendParam'] = $this->extendParamShrink;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceParamShrink) {
            $res['ServiceParam'] = $this->serviceParamShrink;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['ExtendParam'])) {
            $model->extendParamShrink = $map['ExtendParam'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceParam'])) {
            $model->serviceParamShrink = $map['ServiceParam'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
