<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\systemDiskParts;

use AlibabaCloud\Tea\Model;

class systemDiskPart extends Model
{
    /**
     * @description Indicates whether block replication is enabled for the system disk partition.
     *
     * @example true
     *
     * @var bool
     */
    public $block;

    /**
     * @description The device ID of the system disk partition.
     *
     * @example 0_1
     *
     * @var string
     */
    public $device;

    /**
     * @description The size of the system disk partition. Unit: bytes.
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
