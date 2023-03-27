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
    public $canAccept;

    /**
     * @var string
     */
    public $code;

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
     *   ddh: dedicated host
     *   managehost: physical machine in a smart hosting pool
     *
     * @example ddh
     *
     * @var string
     */
    public $hostType;

    /**
     * @description Details about the inactive cloud disks or local disks that have been released and must be cleared.
     *
     * @var inactiveDisks
     */
    public $inactiveDisks;

    /**
     * @description The migration solution of the instance. Valid value: MigrationPlan. Instances can be migrated only by using migration plans.
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
     * @var string
     */
    public $punishDomain;

    /**
     * @var string
     */
    public $punishType;

    /**
     * @var string
     */
    public $punishUrl;

    /**
     * @description The rack number of the cloud box.
     *
     * @example A01
     *
     * @var string
     */
    public $rack;
    protected $_name = [
        'canAccept'          => 'CanAccept',
        'code'               => 'Code',
        'device'             => 'Device',
        'diskId'             => 'DiskId',
        'hostId'             => 'HostId',
        'hostType'           => 'HostType',
        'inactiveDisks'      => 'InactiveDisks',
        'migrationOptions'   => 'MigrationOptions',
        'onlineRepairPolicy' => 'OnlineRepairPolicy',
        'punishDomain'       => 'PunishDomain',
        'punishType'         => 'PunishType',
        'punishUrl'          => 'PunishUrl',
        'rack'               => 'Rack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canAccept) {
            $res['CanAccept'] = $this->canAccept;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
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
        if (null !== $this->punishDomain) {
            $res['PunishDomain'] = $this->punishDomain;
        }
        if (null !== $this->punishType) {
            $res['PunishType'] = $this->punishType;
        }
        if (null !== $this->punishUrl) {
            $res['PunishUrl'] = $this->punishUrl;
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
        if (isset($map['CanAccept'])) {
            $model->canAccept = $map['CanAccept'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
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
        if (isset($map['PunishDomain'])) {
            $model->punishDomain = $map['PunishDomain'];
        }
        if (isset($map['PunishType'])) {
            $model->punishType = $map['PunishType'];
        }
        if (isset($map['PunishUrl'])) {
            $model->punishUrl = $map['PunishUrl'];
        }
        if (isset($map['Rack'])) {
            $model->rack = $map['Rack'];
        }

        return $model;
    }
}
