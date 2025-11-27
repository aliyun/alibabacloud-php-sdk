<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceHistoryEventsResponseBody\instanceSystemEventSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceHistoryEventsResponseBody\instanceSystemEventSet\extendedAttribute\inactiveDisks;

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
     * @var inactiveDisks[]
     */
    public $inactiveDisks;

    /**
     * @var string[]
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
        'canAccept' => 'CanAccept',
        'code' => 'Code',
        'device' => 'Device',
        'diskId' => 'DiskId',
        'hostId' => 'HostId',
        'hostType' => 'HostType',
        'inactiveDisks' => 'InactiveDisks',
        'migrationOptions' => 'MigrationOptions',
        'onlineRepairPolicy' => 'OnlineRepairPolicy',
        'punishDomain' => 'PunishDomain',
        'punishType' => 'PunishType',
        'punishUrl' => 'PunishUrl',
        'rack' => 'Rack',
        'responseResult' => 'ResponseResult',
    ];

    public function validate()
    {
        if (\is_array($this->inactiveDisks)) {
            Model::validateArray($this->inactiveDisks);
        }
        if (\is_array($this->migrationOptions)) {
            Model::validateArray($this->migrationOptions);
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
            if (\is_array($this->inactiveDisks)) {
                $res['InactiveDisks'] = [];
                $n1 = 0;
                foreach ($this->inactiveDisks as $item1) {
                    $res['InactiveDisks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->migrationOptions) {
            if (\is_array($this->migrationOptions)) {
                $res['MigrationOptions'] = [];
                $n1 = 0;
                foreach ($this->migrationOptions as $item1) {
                    $res['MigrationOptions'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['InactiveDisks'])) {
                $model->inactiveDisks = [];
                $n1 = 0;
                foreach ($map['InactiveDisks'] as $item1) {
                    $model->inactiveDisks[$n1] = inactiveDisks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MigrationOptions'])) {
            if (!empty($map['MigrationOptions'])) {
                $model->migrationOptions = [];
                $n1 = 0;
                foreach ($map['MigrationOptions'] as $item1) {
                    $model->migrationOptions[$n1] = $item1;
                    ++$n1;
                }
            }
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
