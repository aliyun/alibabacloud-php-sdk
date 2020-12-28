<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20171204\Models;

use AlibabaCloud\Tea\Model;

class GetTrailStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startLoggingTime;

    /**
     * @var string
     */
    public $latestDeliveryError;

    /**
     * @var string
     */
    public $stopLoggingTime;

    /**
     * @var bool
     */
    public $isLogging;

    /**
     * @var string
     */
    public $latestDeliveryTime;
    protected $_name = [
        'requestId'           => 'RequestId',
        'startLoggingTime'    => 'StartLoggingTime',
        'latestDeliveryError' => 'LatestDeliveryError',
        'stopLoggingTime'     => 'StopLoggingTime',
        'isLogging'           => 'IsLogging',
        'latestDeliveryTime'  => 'LatestDeliveryTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startLoggingTime) {
            $res['StartLoggingTime'] = $this->startLoggingTime;
        }
        if (null !== $this->latestDeliveryError) {
            $res['LatestDeliveryError'] = $this->latestDeliveryError;
        }
        if (null !== $this->stopLoggingTime) {
            $res['StopLoggingTime'] = $this->stopLoggingTime;
        }
        if (null !== $this->isLogging) {
            $res['IsLogging'] = $this->isLogging;
        }
        if (null !== $this->latestDeliveryTime) {
            $res['LatestDeliveryTime'] = $this->latestDeliveryTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrailStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartLoggingTime'])) {
            $model->startLoggingTime = $map['StartLoggingTime'];
        }
        if (isset($map['LatestDeliveryError'])) {
            $model->latestDeliveryError = $map['LatestDeliveryError'];
        }
        if (isset($map['StopLoggingTime'])) {
            $model->stopLoggingTime = $map['StopLoggingTime'];
        }
        if (isset($map['IsLogging'])) {
            $model->isLogging = $map['IsLogging'];
        }
        if (isset($map['LatestDeliveryTime'])) {
            $model->latestDeliveryTime = $map['LatestDeliveryTime'];
        }

        return $model;
    }
}
