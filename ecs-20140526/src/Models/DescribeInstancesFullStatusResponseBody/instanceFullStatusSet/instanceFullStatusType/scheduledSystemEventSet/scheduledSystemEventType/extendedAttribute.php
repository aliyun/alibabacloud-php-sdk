<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\extendedAttribute\inactiveDisks;

class extendedAttribute extends Model
{
    /**
     * @var string
     */
    public $device;
    /**
     * @var string
     */
    public $diskId;
    /**
     * @var inactiveDisks
     */
    public $inactiveDisks;
    protected $_name = [
        'device'        => 'Device',
        'diskId'        => 'DiskId',
        'inactiveDisks' => 'InactiveDisks',
    ];

    public function validate()
    {
        if (null !== $this->inactiveDisks) {
            $this->inactiveDisks->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }

        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->inactiveDisks) {
            $res['InactiveDisks'] = null !== $this->inactiveDisks ? $this->inactiveDisks->toArray($noStream) : $this->inactiveDisks;
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

        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        if (isset($map['InactiveDisks'])) {
            $model->inactiveDisks = inactiveDisks::fromMap($map['InactiveDisks']);
        }

        return $model;
    }
}
