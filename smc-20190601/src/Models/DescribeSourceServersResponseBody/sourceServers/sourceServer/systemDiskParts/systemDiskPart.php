<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\systemDiskParts;

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
    public $canBlock;

    /**
     * @description The device ID of the system disk partition.
     *
     * @example 0_0
     *
     * @var string
     */
    public $device;

    /**
     * @description Indicates whether the system disk partition must be selected.
     *
     * @example true
     *
     * @var bool
     */
    public $need;

    /**
     * @description The path of the system disk partition.
     *
     * @example /boot
     *
     * @var string
     */
    public $path;

    /**
     * @description The size of the system disk partition. Unit: byte.
     *
     * @example 254803968
     *
     * @var int
     */
    public $sizeBytes;
    protected $_name = [
        'canBlock'  => 'CanBlock',
        'device'    => 'Device',
        'need'      => 'Need',
        'path'      => 'Path',
        'sizeBytes' => 'SizeBytes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canBlock) {
            $res['CanBlock'] = $this->canBlock;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->need) {
            $res['Need'] = $this->need;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (isset($map['CanBlock'])) {
            $model->canBlock = $map['CanBlock'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['Need'])) {
            $model->need = $map['Need'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['SizeBytes'])) {
            $model->sizeBytes = $map['SizeBytes'];
        }

        return $model;
    }
}
