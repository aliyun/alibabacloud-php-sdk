<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class WeathermonitorProvinceHourRequest extends Model
{
    /**
     * @description appName
     *
     * @var string
     */
    public $appName;

    /**
     * @description 渠道名称
     *
     * @var string
     */
    public $channel;

    /**
     * @description 扩展参数
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
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 请求参数
     *
     * @var string[]
     */
    public $serviceParam;

    /**
     * @description UserId
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'appName'      => 'AppName',
        'channel'      => 'Channel',
        'extendParam'  => 'ExtendParam',
        'orderId'      => 'OrderId',
        'requestId'    => 'RequestId',
        'serviceParam' => 'ServiceParam',
        'userId'       => 'UserId',
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
        if (null !== $this->extendParam) {
            $res['ExtendParam'] = $this->extendParam;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceParam) {
            $res['ServiceParam'] = $this->serviceParam;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WeathermonitorProvinceHourRequest
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
            $model->extendParam = $map['ExtendParam'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceParam'])) {
            $model->serviceParam = $map['ServiceParam'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
