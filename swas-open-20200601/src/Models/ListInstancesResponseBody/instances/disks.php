<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\disks\diskTags;

class disks extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $device;
    /**
     * @var string
     */
    public $diskChargeType;
    /**
     * @var string
     */
    public $diskId;
    /**
     * @var string
     */
    public $diskName;
    /**
     * @var diskTags[]
     */
    public $diskTags;
    /**
     * @var string
     */
    public $diskType;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var int
     */
    public $size;
    /**
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
        if (\is_array($this->diskTags)) {
            Model::validateArray($this->diskTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->diskTags)) {
                $res['DiskTags'] = [];
                $n1              = 0;
                foreach ($this->diskTags as $item1) {
                    $res['DiskTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1              = 0;
                foreach ($map['DiskTags'] as $item1) {
                    $model->diskTags[$n1++] = diskTags::fromMap($item1);
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
