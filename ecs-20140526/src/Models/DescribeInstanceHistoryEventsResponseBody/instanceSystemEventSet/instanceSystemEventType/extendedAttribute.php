<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute\inactiveDisks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute\migrationOptions;
use AlibabaCloud\Tea\Model;

class extendedAttribute extends Model
{
    /**
     * @description The device name of the local disk.
     *
     * @example /dev/vda
     *
     * @var string
     */
    public $device;

    /**
     * @description The ID of the local disk.
     *
     * @example d-diskid1
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The ID of the host.
     *
     * @example dh-bp1ewce1gk3iwv2****
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The type of the host. Valid values:
     *
     *   ddh: dedicated host.
     *   managehost: physical machine in a smart hosting pool.
     *
     * @example ddh
     *
     * @var string
     */
    public $hostType;

    /**
     * @description Details about the inactive cloud disks or local disks that have been released and must be removed.
     *
     * @var inactiveDisks
     */
    public $inactiveDisks;

    /**
     * @description The migration solution of the instance. Valid value: MigrationOptions. Instances can be migrated only by using migration plans.
     *
     * @var migrationOptions
     */
    public $migrationOptions;

    /**
     * @description The online repair policy of the damaged disk. Valid value: IsolateOnly, which indicates that damaged disks are isolated but not repaired.
     *
     * @example IsolateOnly
     *
     * @var string
     */
    public $onlineRepairPolicy;

    /**
     * @description The rack number of the cloud box.
     *
     * @example A01
     *
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
