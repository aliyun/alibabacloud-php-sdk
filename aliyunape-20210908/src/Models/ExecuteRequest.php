<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class ExecuteRequest extends Model
{
    /**
     * @description aliyunPk
     *
     * @var int
     */
    public $userId;

    /**
     * @description serviceParam
     *
     * @var string[]
     */
    public $serviceParam;

    /**
     * @description extendParam
     *
     * @var string[]
     */
    public $extendParam;

    /**
     * @description orderId
     *
     * @var string
     */
    public $orderId;

    /**
     * @description appName
     *
     * @var string
     */
    public $appName;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description source
     *
     * @var string
     */
    public $channel;
    protected $_name = [
        'userId'       => 'UserId',
        'serviceParam' => 'ServiceParam',
        'extendParam'  => 'ExtendParam',
        'orderId'      => 'OrderId',
        'appName'      => 'AppName',
        'requestId'    => 'RequestId',
        'channel'      => 'Channel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->serviceParam) {
            $res['ServiceParam'] = $this->serviceParam;
        }
        if (null !== $this->extendParam) {
            $res['ExtendParam'] = $this->extendParam;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['ServiceParam'])) {
            $model->serviceParam = $map['ServiceParam'];
        }
        if (isset($map['ExtendParam'])) {
            $model->extendParam = $map['ExtendParam'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        return $model;
    }
}
