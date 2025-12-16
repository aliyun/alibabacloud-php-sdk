<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAutoRenewalAttributeResponseBody\items;

use AlibabaCloud\Dara\Model;

class autoRenewalAttribute extends Model
{
    /**
     * @var bool
     */
    public $autoRenewalEnabled;

    /**
     * @var int
     */
    public $autoRenewalPeriod;

    /**
     * @var string
     */
    public $autoRenewalPeriodUnit;

    /**
     * @var string
     */
    public $autoRenewalStatus;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoRenewalEnabled' => 'AutoRenewalEnabled',
        'autoRenewalPeriod' => 'AutoRenewalPeriod',
        'autoRenewalPeriodUnit' => 'AutoRenewalPeriodUnit',
        'autoRenewalStatus' => 'AutoRenewalStatus',
        'DBClusterId' => 'DBClusterId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewalEnabled) {
            $res['AutoRenewalEnabled'] = $this->autoRenewalEnabled;
        }

        if (null !== $this->autoRenewalPeriod) {
            $res['AutoRenewalPeriod'] = $this->autoRenewalPeriod;
        }

        if (null !== $this->autoRenewalPeriodUnit) {
            $res['AutoRenewalPeriodUnit'] = $this->autoRenewalPeriodUnit;
        }

        if (null !== $this->autoRenewalStatus) {
            $res['AutoRenewalStatus'] = $this->autoRenewalStatus;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (isset($map['AutoRenewalEnabled'])) {
            $model->autoRenewalEnabled = $map['AutoRenewalEnabled'];
        }

        if (isset($map['AutoRenewalPeriod'])) {
            $model->autoRenewalPeriod = $map['AutoRenewalPeriod'];
        }

        if (isset($map['AutoRenewalPeriodUnit'])) {
            $model->autoRenewalPeriodUnit = $map['AutoRenewalPeriodUnit'];
        }

        if (isset($map['AutoRenewalStatus'])) {
            $model->autoRenewalStatus = $map['AutoRenewalStatus'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
