<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute\inactiveDisks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute\migrationOptions;
use AlibabaCloud\Tea\Model;

class extendedAttribute extends Model
{
    /**
     * @description Indicates whether the event can be handled.
     *
     * @example true
     *
     * @var string
     */
    public $canAccept;

    /**
     * @description The code of the security violation.
     *
     * @example PR111
     *
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
     * - managehost: physical machine in a smart hosting pool
     * @example ddh
     *
     * @var string
     */
    public $hostType;

    /**
     * @description The information about the inactive disks that have been released and must be cleared.
     *
     * @var inactiveDisks
     */
    public $inactiveDisks;

    /**
     * @description The migration solution of the instance. Valid value: MigrationPlan, which indicates that instances can be migrated only by using migration plans.
     *
     * @var migrationOptions
     */
    public $migrationOptions;

    /**
     * @description The online repair policy for the damaged disk. Valid value: IsolateOnly, which indicates that damaged disks are isolated but not repaired.
     *
     * @example IsolateOnly
     *
     * @var string
     */
    public $onlineRepairPolicy;

    /**
     * @description The illegal domain name.
     *
     * @example 1228.test.com
     *
     * @var string
     */
    public $punishDomain;

    /**
     * @description The type of the penalty.
     *
     * @example ecs_message_alert
     *
     * @var string
     */
    public $punishType;

    /**
     * @description The illegal URL.
     *
     * @example http://1228.test.com/1
     *
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

    /**
     * @description The response result of the event. Valid values:
     *
     * - false: The event failed to be handled.
     * @example true
     *
     * @var string
     */
    public $responseResult;
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
        'responseResult'     => 'ResponseResult',
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
        if (null !== $this->responseResult) {
            $res['ResponseResult'] = $this->responseResult;
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
        if (isset($map['ResponseResult'])) {
            $model->responseResult = $map['ResponseResult'];
        }

        return $model;
    }
}
