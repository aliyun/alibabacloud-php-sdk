<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAutoRenewAttributeResponseBody\items;

use AlibabaCloud\Dara\Model;

class autoRenewAttribute extends Model
{
    /**
     * @var bool
     */
    public $autoRenewEnabled;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $renewalStatus;
    protected $_name = [
        'autoRenewEnabled' => 'AutoRenewEnabled',
        'DBClusterId' => 'DBClusterId',
        'duration' => 'Duration',
        'periodUnit' => 'PeriodUnit',
        'regionId' => 'RegionId',
        'renewalStatus' => 'RenewalStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewEnabled) {
            $res['AutoRenewEnabled'] = $this->autoRenewEnabled;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
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
        if (isset($map['AutoRenewEnabled'])) {
            $model->autoRenewEnabled = $map['AutoRenewEnabled'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }

        return $model;
    }
}
