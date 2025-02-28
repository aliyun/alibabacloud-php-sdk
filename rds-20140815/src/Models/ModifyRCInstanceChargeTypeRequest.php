<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyRCInstanceChargeTypeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var bool
     */
    public $includeDataDisks;
    /**
     * @var string
     */
    public $instanceChargeType;
    /**
     * @var string
     */
    public $instanceIds;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoPay'            => 'AutoPay',
        'dryRun'             => 'DryRun',
        'includeDataDisks'   => 'IncludeDataDisks',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceIds'        => 'InstanceIds',
        'regionId'           => 'RegionId',
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

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->includeDataDisks) {
            $res['IncludeDataDisks'] = $this->includeDataDisks;
        }

        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['IncludeDataDisks'])) {
            $model->includeDataDisks = $map['IncludeDataDisks'];
        }

        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
