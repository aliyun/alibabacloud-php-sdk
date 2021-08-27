<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute\inactiveDisks;
use AlibabaCloud\Tea\Model;

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

    /**
     * @var string
     */
    public $hostType;

    /**
     * @var string
     */
    public $hostId;
    protected $_name = [
        'device'        => 'Device',
        'diskId'        => 'DiskId',
        'inactiveDisks' => 'InactiveDisks',
        'hostType'      => 'HostType',
        'hostId'        => 'HostId',
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
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->inactiveDisks) {
            $res['InactiveDisks'] = null !== $this->inactiveDisks ? $this->inactiveDisks->toMap() : null;
        }
        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendedAttribute
     */
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
        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        return $model;
    }
}
