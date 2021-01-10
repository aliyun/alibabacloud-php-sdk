<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetDevicePurifyJobByJobIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $purifyRecordIndexUrl;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $purifyRecordNameUrl;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'status'               => 'Status',
        'deviceName'           => 'DeviceName',
        'userId'               => 'UserId',
        'planId'               => 'PlanId',
        'endTime'              => 'EndTime',
        'startTime'            => 'StartTime',
        'purifyRecordIndexUrl' => 'PurifyRecordIndexUrl',
        'productKey'           => 'ProductKey',
        'purifyRecordNameUrl'  => 'PurifyRecordNameUrl',
        'jobId'                => 'JobId',
        'iotId'                => 'IotId',
        'tenantId'             => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->purifyRecordIndexUrl) {
            $res['PurifyRecordIndexUrl'] = $this->purifyRecordIndexUrl;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->purifyRecordNameUrl) {
            $res['PurifyRecordNameUrl'] = $this->purifyRecordNameUrl;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['PurifyRecordIndexUrl'])) {
            $model->purifyRecordIndexUrl = $map['PurifyRecordIndexUrl'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['PurifyRecordNameUrl'])) {
            $model->purifyRecordNameUrl = $map['PurifyRecordNameUrl'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
