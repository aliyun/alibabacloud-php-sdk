<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DescribeUdmSnapshotsRequest extends Model
{
    /**
     * @description The ID of the disk.
     *
     * @example d-bp1560750pclffpzxy70
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The end of the time range to query. The value must be a UNIX timestamp. Unit: seconds.
     *
     * @example 1643092168
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-bp18x2k7sw925ir7ofh8
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the backup job.
     *
     * @example job-*********************
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The list of backup snapshots.
     *
     * @example [\"s-000e3vhhu62xsm6v92r0\"]
     *
     * @var mixed[]
     */
    public $snapshotIds;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **UDM_ECS**: ECS instance backup
     *   **UDM_ECS_DISK**: disk backup subtask of ECS instance backup
     *   **UDM_DISK**: disk backup
     *
     * @example UDM_ECS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The beginning of the time range to query. The value must be a UNIX timestamp. Unit: seconds.
     *
     * @example 1642057551
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The ID of the region where the ECS instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $udmRegionId;
    protected $_name = [
        'diskId'      => 'DiskId',
        'endTime'     => 'EndTime',
        'instanceId'  => 'InstanceId',
        'jobId'       => 'JobId',
        'snapshotIds' => 'SnapshotIds',
        'sourceType'  => 'SourceType',
        'startTime'   => 'StartTime',
        'udmRegionId' => 'UdmRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->snapshotIds) {
            $res['SnapshotIds'] = $this->snapshotIds;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->udmRegionId) {
            $res['UdmRegionId'] = $this->udmRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUdmSnapshotsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['SnapshotIds'])) {
            $model->snapshotIds = $map['SnapshotIds'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UdmRegionId'])) {
            $model->udmRegionId = $map['UdmRegionId'];
        }

        return $model;
    }
}
