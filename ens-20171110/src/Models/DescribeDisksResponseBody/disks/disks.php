<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksResponseBody\disks;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @example local_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @example 2021-11-11T14:34:55+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example prepaid
     *
     * @var string
     */
    public $diskChargeType;

    /**
     * @example d-5svum1dx1w4a4spr54lgrnoaa
     *
     * @var string
     */
    public $diskId;

    /**
     * @example fvt-ecs-5cf009f6
     *
     * @var string
     */
    public $diskName;

    /**
     * @example cn-guangzhou-10
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example i-5t77rb0yoz79m28ku60sxuhn4
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @example true
     *
     * @var bool
     */
    public $portable;

    /**
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'category'       => 'Category',
        'creationTime'   => 'CreationTime',
        'diskChargeType' => 'DiskChargeType',
        'diskId'         => 'DiskId',
        'diskName'       => 'DiskName',
        'ensRegionId'    => 'EnsRegionId',
        'instanceId'     => 'InstanceId',
        'instanceName'   => 'InstanceName',
        'portable'       => 'Portable',
        'size'           => 'Size',
        'snapshotId'     => 'SnapshotId',
        'status'         => 'Status',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->diskChargeType) {
            $res['DiskChargeType'] = $this->diskChargeType;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->portable) {
            $res['Portable'] = $this->portable;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DiskChargeType'])) {
            $model->diskChargeType = $map['DiskChargeType'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Portable'])) {
            $model->portable = $map['Portable'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
