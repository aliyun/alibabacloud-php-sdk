<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationTemplatesResponseBody\quotaApplicationTemplates;

use AlibabaCloud\Tea\Model;

class period extends Model
{
    /**
     * @description The unit of the calculation cycle. Valid values:
     *
     *   second
     *   minute
     *   hour
     *   day
     *   week
     *
     * @example day
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The value of the calculation cycle.
     *
     * @example 1
     *
     * @var int
     */
    public $periodValue;
    protected $_name = [
        'periodUnit'  => 'PeriodUnit',
        'periodValue' => 'PeriodValue',
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
        if (null !== $this->periodValue) {
            $res['PeriodValue'] = $this->periodValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return period
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PeriodValue'])) {
            $model->periodValue = $map['PeriodValue'];
        }

        return $model;
    }
}
