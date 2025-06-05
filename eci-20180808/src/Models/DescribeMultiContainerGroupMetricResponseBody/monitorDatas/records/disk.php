<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records;

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
    public $readIo;

    /**
     * @var int
     */
    public $writeBytes;

    /**
     * @var int
     */
    public $writeIo;
    protected $_name = [
        'device' => 'Device',
        'readBytes' => 'ReadBytes',
        'readIo' => 'ReadIo',
        'writeBytes' => 'WriteBytes',
        'writeIo' => 'WriteIo',
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

        if (null !== $this->readIo) {
            $res['ReadIo'] = $this->readIo;
        }

        if (null !== $this->writeBytes) {
            $res['WriteBytes'] = $this->writeBytes;
        }

        if (null !== $this->writeIo) {
            $res['WriteIo'] = $this->writeIo;
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

        if (isset($map['ReadIo'])) {
            $model->readIo = $map['ReadIo'];
        }

        if (isset($map['WriteBytes'])) {
            $model->writeBytes = $map['WriteBytes'];
        }

        if (isset($map['WriteIo'])) {
            $model->writeIo = $map['WriteIo'];
        }

        return $model;
    }
}
