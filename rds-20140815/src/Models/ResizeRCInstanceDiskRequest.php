<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ResizeRCInstanceDiskRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var string
     */
    public $diskId;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $newSize;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'autoPay'    => 'AutoPay',
        'diskId'     => 'DiskId',
        'dryRun'     => 'DryRun',
        'instanceId' => 'InstanceId',
        'newSize'    => 'NewSize',
        'regionId'   => 'RegionId',
        'type'       => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->newSize) {
            $res['NewSize'] = $this->newSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NewSize'])) {
            $model->newSize = $map['NewSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
