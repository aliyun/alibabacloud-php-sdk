<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class GetTrailStatusResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isLogging;

    /**
     * @var string
     */
    public $latestDeliveryError;

    /**
     * @var string
     */
    public $latestDeliveryLogServiceError;

    /**
     * @var string
     */
    public $latestDeliveryLogServiceTime;

    /**
     * @var string
     */
    public $latestDeliveryTime;

    /**
     * @var bool
     */
    public $ossBucketStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $slsLogStoreStatus;

    /**
     * @var string
     */
    public $startLoggingTime;

    /**
     * @var string
     */
    public $stopLoggingTime;
    protected $_name = [
        'isLogging'                     => 'IsLogging',
        'latestDeliveryError'           => 'LatestDeliveryError',
        'latestDeliveryLogServiceError' => 'LatestDeliveryLogServiceError',
        'latestDeliveryLogServiceTime'  => 'LatestDeliveryLogServiceTime',
        'latestDeliveryTime'            => 'LatestDeliveryTime',
        'ossBucketStatus'               => 'OssBucketStatus',
        'requestId'                     => 'RequestId',
        'slsLogStoreStatus'             => 'SlsLogStoreStatus',
        'startLoggingTime'              => 'StartLoggingTime',
        'stopLoggingTime'               => 'StopLoggingTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isLogging) {
            $res['IsLogging'] = $this->isLogging;
        }
        if (null !== $this->latestDeliveryError) {
            $res['LatestDeliveryError'] = $this->latestDeliveryError;
        }
        if (null !== $this->latestDeliveryLogServiceError) {
            $res['LatestDeliveryLogServiceError'] = $this->latestDeliveryLogServiceError;
        }
        if (null !== $this->latestDeliveryLogServiceTime) {
            $res['LatestDeliveryLogServiceTime'] = $this->latestDeliveryLogServiceTime;
        }
        if (null !== $this->latestDeliveryTime) {
            $res['LatestDeliveryTime'] = $this->latestDeliveryTime;
        }
        if (null !== $this->ossBucketStatus) {
            $res['OssBucketStatus'] = $this->ossBucketStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsLogStoreStatus) {
            $res['SlsLogStoreStatus'] = $this->slsLogStoreStatus;
        }
        if (null !== $this->startLoggingTime) {
            $res['StartLoggingTime'] = $this->startLoggingTime;
        }
        if (null !== $this->stopLoggingTime) {
            $res['StopLoggingTime'] = $this->stopLoggingTime;
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
        if (isset($map['IsLogging'])) {
            $model->isLogging = $map['IsLogging'];
        }
        if (isset($map['LatestDeliveryError'])) {
            $model->latestDeliveryError = $map['LatestDeliveryError'];
        }
        if (isset($map['LatestDeliveryLogServiceError'])) {
            $model->latestDeliveryLogServiceError = $map['LatestDeliveryLogServiceError'];
        }
        if (isset($map['LatestDeliveryLogServiceTime'])) {
            $model->latestDeliveryLogServiceTime = $map['LatestDeliveryLogServiceTime'];
        }
        if (isset($map['LatestDeliveryTime'])) {
            $model->latestDeliveryTime = $map['LatestDeliveryTime'];
        }
        if (isset($map['OssBucketStatus'])) {
            $model->ossBucketStatus = $map['OssBucketStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsLogStoreStatus'])) {
            $model->slsLogStoreStatus = $map['SlsLogStoreStatus'];
        }
        if (isset($map['StartLoggingTime'])) {
            $model->startLoggingTime = $map['StartLoggingTime'];
        }
        if (isset($map['StopLoggingTime'])) {
            $model->stopLoggingTime = $map['StopLoggingTime'];
        }

        return $model;
    }
}
