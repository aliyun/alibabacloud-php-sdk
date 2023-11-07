<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class GetTrailStatusResponseBody extends Model
{
    /**
     * @description Indicates whether logging is enabled for the trail. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $isLogging;

    /**
     * @description The log of the last failed delivery.
     *
     * @example write sls failed, exception: the parent of sub user must be project owner, itemscount: 1
     *
     * @var string
     */
    public $latestDeliveryError;

    /**
     * @description The log of the last failed delivery to Log Service.
     *
     * @example write sls failed, exception: the parent of sub user must be project owner, itemscount: 1
     *
     * @var string
     */
    public $latestDeliveryLogServiceError;

    /**
     * @description The most recent time when an event was delivered to Log Service.
     *
     * @example 2021-02-26T09:19:44Z
     *
     * @var string
     */
    public $latestDeliveryLogServiceTime;

    /**
     * @description The most recent time when an event was delivered by the trail.
     *
     * @example 2021-02-26T09:19:44Z
     *
     * @var string
     */
    public $latestDeliveryTime;

    /**
     * @description Indicates whether the destination Object Storage Service (OSS) bucket is available. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $ossBucketStatus;

    /**
     * @description The ID of the request.
     *
     * @example 8067369B-B923-4D26-85BC-61BF33922505
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the destination Log Service Logstore is available. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $slsLogStoreStatus;

    /**
     * @description The time when logging was last enabled for the trail.
     *
     * @example 2021-02-24T09:19:44Z
     *
     * @var string
     */
    public $startLoggingTime;

    /**
     * @description The time when logging was last disabled for the trail.
     *
     * @example 2021-02-25T09:19:44Z
     *
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
