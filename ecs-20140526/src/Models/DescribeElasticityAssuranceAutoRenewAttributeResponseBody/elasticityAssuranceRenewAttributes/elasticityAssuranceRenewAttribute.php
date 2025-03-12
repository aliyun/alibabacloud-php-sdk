<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceAutoRenewAttributeResponseBody\elasticityAssuranceRenewAttributes;

use AlibabaCloud\Tea\Model;

class elasticityAssuranceRenewAttribute extends Model
{
    /**
     * @description The auto-renewal period. Valid values: Valid values: 1, 2, 3, 6, 12, 24, and 36.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the auto-renewal period. Valid values:
     *
     *   Month (default)
     *   Year
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the elasticity assurance.
     *
     * @example eap-bp67acfmxazb4****
     *
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @description Indicates whether auto-renewal is enabled for the elasticity assurance. Valid values:
     *
     *   AutoRenewal: Auto-renewal is enabled for the elasticity assurance.
     *   Normal: Auto-renewal is disabled for the elasticity assurance.
     *   NotRenewal: The elasticity assurance is not renewed.
     *
     * @example Normal
     *
     * @var string
     */
    public $renewalStatus;
    protected $_name = [
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'privatePoolOptionsId' => 'PrivatePoolOptionsId',
        'renewalStatus'        => 'RenewalStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return elasticityAssuranceRenewAttribute
     */
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
