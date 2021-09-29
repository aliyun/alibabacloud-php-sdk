<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GetDeviceSystemUpdateFunnelEventsResponseBody;

use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $targetVersion;

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
        'deviceId'        => 'DeviceId',
        'targetVersion'   => 'TargetVersion',
        'event'           => 'Event',
        'reportTimestamp' => 'ReportTimestamp',
        'reportTime'      => 'ReportTime',
        'tenantId'        => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->targetVersion) {
            $res['TargetVersion'] = $this->targetVersion;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['TargetVersion'])) {
            $model->targetVersion = $map['TargetVersion'];
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
