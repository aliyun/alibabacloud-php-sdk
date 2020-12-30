<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotasResponseBody\quotas;

use AlibabaCloud\Tea\Model;

class period extends Model
{
    /**
     * @var int
     */
    public $periodValue;

    /**
     * @var string
     */
    public $periodUnit;
    protected $_name = [
        'periodValue' => 'PeriodValue',
        'periodUnit'  => 'PeriodUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->periodValue) {
            $res['PeriodValue'] = $this->periodValue;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
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
        if (isset($map['PeriodValue'])) {
            $model->periodValue = $map['PeriodValue'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        return $model;
    }
}
