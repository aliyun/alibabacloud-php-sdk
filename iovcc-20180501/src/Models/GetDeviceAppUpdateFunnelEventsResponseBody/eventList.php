<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GetDeviceAppUpdateFunnelEventsResponseBody;

use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $targetVersionCode;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $reportTime;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @var int
     */
    public $reportTimestamp;
    protected $_name = [
        'tenantId'          => 'TenantId',
        'deviceId'          => 'DeviceId',
        'targetVersionCode' => 'TargetVersionCode',
        'event'             => 'Event',
        'reportTime'        => 'ReportTime',
        'packageName'       => 'PackageName',
        'reportTimestamp'   => 'ReportTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->targetVersionCode) {
            $res['TargetVersionCode'] = $this->targetVersionCode;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->reportTimestamp) {
            $res['ReportTimestamp'] = $this->reportTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['TargetVersionCode'])) {
            $model->targetVersionCode = $map['TargetVersionCode'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['ReportTimestamp'])) {
            $model->reportTimestamp = $map['ReportTimestamp'];
        }

        return $model;
    }
}
