<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute\inactiveDisks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute\migrationOptions;
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
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $hostType;

    /**
     * @var inactiveDisks
     */
    public $inactiveDisks;

    /**
     * @var migrationOptions
     */
    public $migrationOptions;

    /**
     * @var string
     */
    public $onlineRepairPolicy;

    /**
     * @var string
     */
    public $rack;
    protected $_name = [
        'device'             => 'Device',
        'diskId'             => 'DiskId',
        'hostId'             => 'HostId',
        'hostType'           => 'HostType',
        'inactiveDisks'      => 'InactiveDisks',
        'migrationOptions'   => 'MigrationOptions',
        'onlineRepairPolicy' => 'OnlineRepairPolicy',
        'rack'               => 'Rack',
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
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }
        if (null !== $this->inactiveDisks) {
            $res['InactiveDisks'] = null !== $this->inactiveDisks ? $this->inactiveDisks->toMap() : null;
        }
        if (null !== $this->migrationOptions) {
            $res['MigrationOptions'] = null !== $this->migrationOptions ? $this->migrationOptions->toMap() : null;
        }
        if (null !== $this->onlineRepairPolicy) {
            $res['OnlineRepairPolicy'] = $this->onlineRepairPolicy;
        }
        if (null !== $this->rack) {
            $res['Rack'] = $this->rack;
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }
        if (isset($map['InactiveDisks'])) {
            $model->inactiveDisks = inactiveDisks::fromMap($map['InactiveDisks']);
        }
        if (isset($map['MigrationOptions'])) {
            $model->migrationOptions = migrationOptions::fromMap($map['MigrationOptions']);
        }
        if (isset($map['OnlineRepairPolicy'])) {
            $model->onlineRepairPolicy = $map['OnlineRepairPolicy'];
        }
        if (isset($map['Rack'])) {
            $model->rack = $map['Rack'];
        }

        return $model;
    }
}
