<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHistoryEventsStatRequest extends Model
{
    /**
     * @description The status of the asset instance. Valid values: **starting**, **running**, **stopping**, and **stopped**.
     *
     * @example starting
     *
     * @var string
     */
    public $archiveStatus;

    /**
     * @description The beginning of the time range to query. Only tasks that have a start time later than or equal to the time specified by this parameter are queried. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. The start time can be up to 30 days earlier than the current time. If you set this parameter to a time more than 30 days earlier than the current time, this time is automatically converted to a time that is exactly 30 days earlier than the current time.
     *
     * @example 2022-01-02T11:31:03Z
     *
     * @var string
     */
    public $fromStartTime;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The end of the time range to query. Only tasks that have a start time earlier than or equal to the time specified by this parameter are queried. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2022-03-02T11:31:03Z
     *
     * @var string
     */
    public $toStartTime;
    protected $_name = [
        'archiveStatus' => 'ArchiveStatus',
        'fromStartTime' => 'FromStartTime',
        'regionId'      => 'RegionId',
        'securityToken' => 'SecurityToken',
        'toStartTime'   => 'ToStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveStatus) {
            $res['ArchiveStatus'] = $this->archiveStatus;
        }
        if (null !== $this->fromStartTime) {
            $res['FromStartTime'] = $this->fromStartTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->toStartTime) {
            $res['ToStartTime'] = $this->toStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHistoryEventsStatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveStatus'])) {
            $model->archiveStatus = $map['ArchiveStatus'];
        }
        if (isset($map['FromStartTime'])) {
            $model->fromStartTime = $map['FromStartTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ToStartTime'])) {
            $model->toStartTime = $map['ToStartTime'];
        }

        return $model;
    }
}
