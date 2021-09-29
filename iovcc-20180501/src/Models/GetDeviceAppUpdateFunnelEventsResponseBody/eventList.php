<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GetDeviceAppUpdateFunnelEventsResponseBody;

use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @var string
     */
    public $packageName;

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
     * @var int
     */
    public $reportTimestamp;

    /**
     * @var string
     */
    public $reportTime;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'packageName'       => 'PackageName',
        'deviceId'          => 'DeviceId',
        'targetVersionCode' => 'TargetVersionCode',
        'event'             => 'Event',
        'reportTimestamp'   => 'ReportTimestamp',
        'reportTime'        => 'ReportTime',
        'tenantId'          => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
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
        if (null !== $this->reportTimestamp) {
            $res['ReportTimestamp'] = $this->reportTimestamp;
        }
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
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
        if (isset($map['ReportTimestamp'])) {
            $model->reportTimestamp = $map['ReportTimestamp'];
        }
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
