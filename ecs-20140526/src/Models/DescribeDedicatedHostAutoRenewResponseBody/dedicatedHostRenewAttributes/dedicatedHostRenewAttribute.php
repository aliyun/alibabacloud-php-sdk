<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewResponseBody\dedicatedHostRenewAttributes;

use AlibabaCloud\Tea\Model;

class dedicatedHostRenewAttribute extends Model
{
    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $renewalStatus;

    /**
     * @var bool
     */
    public $autoRenewEnabled;
    protected $_name = [
        'periodUnit'       => 'PeriodUnit',
        'duration'         => 'Duration',
        'dedicatedHostId'  => 'DedicatedHostId',
        'renewalStatus'    => 'RenewalStatus',
        'autoRenewEnabled' => 'AutoRenewEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }
        if (null !== $this->autoRenewEnabled) {
            $res['AutoRenewEnabled'] = $this->autoRenewEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostRenewAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }
        if (isset($map['AutoRenewEnabled'])) {
            $model->autoRenewEnabled = $map['AutoRenewEnabled'];
        }

        return $model;
    }
}
