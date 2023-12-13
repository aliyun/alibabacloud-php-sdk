<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records;

use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @description The name of the disk.
     *
     * @example /dev/vda
     *
     * @var string
     */
    public $device;

    /**
     * @description The amount of data that was read from the disk. Unit: bytes.
     *
     * @example 210714112
     *
     * @var int
     */
    public $readBytes;

    /**
     * @description This parameter is unavailable for public use.
     *
     * @example 123
     *
     * @var int
     */
    public $readIO;

    /**
     * @description The amount of data that was written to the disk. Unit: bytes.
     *
     * @example 1375109120
     *
     * @var int
     */
    public $writeBytes;

    /**
     * @description This parameter is unavailable for public use.
     *
     * @example 123
     *
     * @var int
     */
    public $writeIO;
    protected $_name = [
        'device'     => 'Device',
        'readBytes'  => 'ReadBytes',
        'readIO'     => 'ReadIO',
        'writeBytes' => 'WriteBytes',
        'writeIO'    => 'WriteIO',
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
        if (null !== $this->readBytes) {
            $res['ReadBytes'] = $this->readBytes;
        }
        if (null !== $this->readIO) {
            $res['ReadIO'] = $this->readIO;
        }
        if (null !== $this->writeBytes) {
            $res['WriteBytes'] = $this->writeBytes;
        }
        if (null !== $this->writeIO) {
            $res['WriteIO'] = $this->writeIO;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['ReadBytes'])) {
            $model->readBytes = $map['ReadBytes'];
        }
        if (isset($map['ReadIO'])) {
            $model->readIO = $map['ReadIO'];
        }
        if (isset($map['WriteBytes'])) {
            $model->writeBytes = $map['WriteBytes'];
        }
        if (isset($map['WriteIO'])) {
            $model->writeIO = $map['WriteIO'];
        }

        return $model;
    }
}
