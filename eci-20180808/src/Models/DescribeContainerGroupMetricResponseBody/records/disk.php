<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records;

use AlibabaCloud\Dara\Model;

class disk extends Model
{
    /**
     * @var string
     */
    public $device;

    /**
     * @var int
     */
    public $readBytes;

    /**
     * @var int
     */
    public $readIO;

    /**
     * @var int
     */
    public $writeBytes;

    /**
     * @var int
     */
    public $writeIO;
    protected $_name = [
        'device' => 'Device',
        'readBytes' => 'ReadBytes',
        'readIO' => 'ReadIO',
        'writeBytes' => 'WriteBytes',
        'writeIO' => 'WriteIO',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
