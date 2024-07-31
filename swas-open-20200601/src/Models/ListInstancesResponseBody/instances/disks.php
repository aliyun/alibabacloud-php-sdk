<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\disks\diskTags;
use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @description The category of the disk. Valid values:
     *
     *   ESSD: ESSD of PL0
     *   SSD: standard SSD
     *   CLOUD_EFFICIENCY: an ultra disk.
     *
     * @example ESSD
     *
     * @var string
     */
    public $category;

    /**
     * @description The time when the simple application server was created. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-02-24T02:20:10Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The device name of the disk after the disk is attached to the simple application server.
     *
     * @example /dev/xvda
     *
     * @var string
     */
    public $device;

    /**
     * @description The billing method of the disk.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $diskChargeType;

    /**
     * @description The disk ID.
     *
     * @example d-bp14wq0149cpp2x****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The disk name.
     *
     * @example SystemDisk
     *
     * @var string
     */
    public $diskName;

    /**
     * @description The tags that are added to the disk.
     *
     * @var diskTags[]
     */
    public $diskTags;

    /**
     * @description The disk type. Valid values:
     *
     *   system: system disk
     *   data: data disk
     *
     * @example System
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The remarks of the disk.
     *
     * @example remark
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the resource group to which the disk belongs.
     *
     * @example rg-aek2bti7cf7****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The disk size. Unit: GB.
     *
     * @example 50
     *
     * @var int
     */
    public $size;

    /**
     * @description The status of the disk. Valid values:
     *
     *   ReIniting: The disk is being initialized.
     *   Creating: The disk is being created.
     *   In_use: The disk is in use.
     *   Available: The disk can be attached.
     *   Attaching: The disk is being attached.
     *   Detaching: The disk is being detached.
     *
     * @example In_use
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'category'        => 'Category',
        'creationTime'    => 'CreationTime',
        'device'          => 'Device',
        'diskChargeType'  => 'DiskChargeType',
        'diskId'          => 'DiskId',
        'diskName'        => 'DiskName',
        'diskTags'        => 'DiskTags',
        'diskType'        => 'DiskType',
        'regionId'        => 'RegionId',
        'remark'          => 'Remark',
        'resourceGroupId' => 'ResourceGroupId',
        'size'            => 'Size',
        'status'          => 'Status',
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
        if (null !== $this->device) {
            $res['Device'] = $this->device;
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
        if (null !== $this->diskTags) {
            $res['DiskTags'] = [];
            if (null !== $this->diskTags && \is_array($this->diskTags)) {
                $n = 0;
                foreach ($this->diskTags as $item) {
                    $res['DiskTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
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
        if (isset($map['DiskTags'])) {
            if (!empty($map['DiskTags'])) {
                $model->diskTags = [];
                $n               = 0;
                foreach ($map['DiskTags'] as $item) {
                    $model->diskTags[$n++] = null !== $item ? diskTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
