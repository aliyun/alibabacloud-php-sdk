<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeRequest\dataDisk;

use AlibabaCloud\Tea\Model;

class part extends Model
{
    /**
     * @description Specifies whether to enable block replication for partition N in the destination data disk. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $block;

    /**
     * @description The ID of partition N in the destination data disk.
     *
     * >  The partitions in the destination data disk are arranged in the same sequential order as those in the source data disk.
     * @example 0_1
     *
     * @var string
     */
    public $device;

    /**
     * @description The size of partition N in the destination data disk. Unit: bytes. The default value is equal to the corresponding size of the partition in the source data disk.
     *
     * >  The total size of all partitions in the destination data disk cannot exceed the size of the destination data disk.
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
     * @return part
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
