<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageRequest;

use AlibabaCloud\Tea\Model;

class diskDeviceMapping extends Model
{
    /**
     * @description The device name of disk N in the custom image. Valid values:
     *
     *   For disks other than basic disks, such as standard SSDs, ultra disks, and enhanced SSDs (ESSDs), the valid values range from /dev/vda to /dev/vdz in alphabetical order.
     *   For basic disks, the valid values range from /dev/xvda to /dev/xvdz in alphabetical order.
     *
     * @example /dev/vdb
     *
     * @var string
     */
    public $device;

    /**
     * @description The type of disk N in the custom image. You can specify this parameter to create the system disk of the custom image from a data disk snapshot. If you do not specify this parameter, the disk type is determined by the corresponding snapshot. Valid values:
     *
     *   system: system disk. You can specify only one snapshot to use to create the system disk in the custom image.
     *   data: data disk. You can specify up to 16 snapshots to use to create data disks in the custom image.
     *
     * @example system
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The size of disk N in the custom image. Unit: GiB. The valid values and default value of DiskDeviceMapping.N.Size vary based on the value of DiskDeviceMapping.N.SnapshotId.
     *
     *   If no corresponding snapshot IDs are specified in the value of DiskDeviceMapping.N.SnapshotId, DiskDeviceMapping.N.Size has the following valid values and default values:
     *
     *   For basic disks, the valid values range from 5 to 2000, and the default value is 5.
     *   For other disks, the valid values range from 20 to 32768, and the default value is 20.
     *
     *   If a corresponding snapshot ID is specified in the value of DiskDeviceMapping.N.SnapshotId, the value of DiskDeviceMapping.N.Size must be greater than or equal to the size of the specified snapshot. The default value of DiskDeviceMapping.N.Size is the size of the specified snapshot.
     *
     * @example 2000
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of snapshot N to use to create the custom image.
     *
     * @example s-bp17441ohwkdca0****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'device'     => 'Device',
        'diskType'   => 'DiskType',
        'size'       => 'Size',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskDeviceMapping
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
