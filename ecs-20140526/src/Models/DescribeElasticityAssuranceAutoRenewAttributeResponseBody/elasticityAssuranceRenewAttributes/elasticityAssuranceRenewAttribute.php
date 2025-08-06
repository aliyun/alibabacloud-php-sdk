<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceAutoRenewAttributeResponseBody\elasticityAssuranceRenewAttributes;

use AlibabaCloud\Dara\Model;

class elasticityAssuranceRenewAttribute extends Model
{
    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @var string
     */
    public $renewalStatus;
    protected $_name = [
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'privatePoolOptionsId' => 'PrivatePoolOptionsId',
        'renewalStatus' => 'RenewalStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
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
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PrivatePoolOptionsId'])) {
            $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
        }

        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }

        return $model;
    }
}
