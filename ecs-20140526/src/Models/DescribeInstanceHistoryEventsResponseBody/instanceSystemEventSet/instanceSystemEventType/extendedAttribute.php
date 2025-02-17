<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute\inactiveDisks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute\migrationOptions;

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
     * @var string
     */
    public $rack;
    /**
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
        if (null !== $this->inactiveDisks) {
            $this->inactiveDisks->validate();
        }
        if (null !== $this->migrationOptions) {
            $this->migrationOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['InactiveDisks'] = null !== $this->inactiveDisks ? $this->inactiveDisks->toArray($noStream) : $this->inactiveDisks;
        }

        if (null !== $this->migrationOptions) {
            $res['MigrationOptions'] = null !== $this->migrationOptions ? $this->migrationOptions->toArray($noStream) : $this->migrationOptions;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
