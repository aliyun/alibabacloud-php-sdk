<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class DescribeUdmSnapshotsRequest extends Model
{
    /**
     * @var string
     */
    public $diskId;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var mixed[]
     */
    public $snapshotIds;
    /**
     * @var string
     */
    public $sourceType;
    /**
     * @var int
     */
    public $startTime;
    /**
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
        if (\is_array($this->snapshotIds)) {
            Model::validateArray($this->snapshotIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->snapshotIds)) {
                $res['SnapshotIds'] = [];
                foreach ($this->snapshotIds as $key1 => $value1) {
                    $res['SnapshotIds'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['SnapshotIds'])) {
                $model->snapshotIds = [];
                foreach ($map['SnapshotIds'] as $key1 => $value1) {
                    $model->snapshotIds[$key1] = $value1;
                }
            }
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
