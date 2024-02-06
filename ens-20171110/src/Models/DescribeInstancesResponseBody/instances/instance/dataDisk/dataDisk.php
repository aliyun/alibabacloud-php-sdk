<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\dataDisk;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The category of the cloud disk or local disk. Valid values:
     *
     *   **file**: local disk.
     *   **pangu**: ultra disk.
     *   **local_hdd**: local HDD.
     *
     * @example file
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the disk.
     *
     * @example d-5ip4c2dhmas0vjd5u1r****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The name of the disk.
     *
     * @example DiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @description The size of the disk. Unit: MiB.
     *
     * @example 51200
     *
     * @var int
     */
    public $size;

    /**
     * @description The extended field of the disk category. Valid values:
     *
     *   **file**: local disk.
     *   **pangu**: ultra disk.
     *   **local_hdd**: local HDD.
     *
     * @example pangu
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description The type of the cloud disk or local disk. Valid values:
     *
     **system**: system disk. **data**: data disk.
     *
     * @example system
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The name of the disk.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The size of the disk. Unit: MiB.
     *
     * @example 20480
     *
     * @var int
     */
    public $storage;

    /**
     * @description The UUID of the disk.
     *
     * @example d-5itef1wtxj961mbff8xe9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'category'   => 'Category',
        'diskId'     => 'DiskId',
        'diskName'   => 'DiskName',
        'diskSize'   => 'DiskSize',
        'size'       => 'Size',
        'deviceType' => 'device_type',
        'diskType'   => 'disk_type',
        'name'       => 'name',
        'storage'    => 'storage',
        'uuid'       => 'uuid',
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
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->deviceType) {
            $res['device_type'] = $this->deviceType;
        }
        if (null !== $this->diskType) {
            $res['disk_type'] = $this->diskType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->storage) {
            $res['storage'] = $this->storage;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['device_type'])) {
            $model->deviceType = $map['device_type'];
        }
        if (isset($map['disk_type'])) {
            $model->diskType = $map['disk_type'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['storage'])) {
            $model->storage = $map['storage'];
        }
        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        return $model;
    }
}
