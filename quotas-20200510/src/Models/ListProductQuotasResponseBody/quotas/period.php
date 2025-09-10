<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotasResponseBody\quotas;

use AlibabaCloud\Dara\Model;

class period extends Model
{
    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var int
     */
    public $periodValue;
    protected $_name = [
        'periodUnit' => 'PeriodUnit',
        'periodValue' => 'PeriodValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
