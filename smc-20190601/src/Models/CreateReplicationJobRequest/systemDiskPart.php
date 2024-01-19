<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest;

use AlibabaCloud\Tea\Model;

class systemDiskPart extends Model
{
    /**
     * @description Specifies whether to enable block replication for partition N in the destination system disk. Valid values:
     *
     *   true
     *   false
     *
     * Default value: true
     * @example true
     *
     * @var bool
     */
    public $block;

    /**
     * @description The ID of partition N in the destination system disk. The partitions in the destination system disk are arranged in the same sequential order as those in the source system disk.
     *
     * >  You must set both the SystemDiskPart.N.Device and `SystemDiskPart.N.SizeBytes` parameters or leave both parameters empty.
     * @example 0_1
     *
     * @var string
     */
    public $device;

    /**
     * @description The size of the partition N in the destination system disk. Unit: bytes. The default value is equal to the partition size of the source system disk.
     *
     * >
     *
     *   The total size of all partitions in the destination system disk cannot exceed the size of the destination system disk.
     *
     *   You must set both the `SystemDiskPart.N.Device` and SystemDiskPart.N.SizeBytes parameters or leave both parameters empty.
     *
     * @example 254803968
     *
     * @var int
     */
    public $sizeBytes;
    protected $_name = [
        'block'     => 'Block',
        'device'    => 'Device',
        'sizeBytes' => 'SizeBytes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->block) {
            $res['Block'] = $this->block;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->sizeBytes) {
            $res['SizeBytes'] = $this->sizeBytes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDiskPart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Block'])) {
            $model->block = $map['Block'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['SizeBytes'])) {
            $model->sizeBytes = $map['SizeBytes'];
        }

        return $model;
    }
}
