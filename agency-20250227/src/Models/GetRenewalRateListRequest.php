<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models;

use AlibabaCloud\Dara\Model;

class GetRenewalRateListRequest extends Model
{
    /**
     * @var string
     */
    public $fiscalYearAndQuarter;
    protected $_name = [
        'fiscalYearAndQuarter' => 'FiscalYearAndQuarter',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fiscalYearAndQuarter) {
            $res['FiscalYearAndQuarter'] = $this->fiscalYearAndQuarter;
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
        if (isset($map['FiscalYearAndQuarter'])) {
            $model->fiscalYearAndQuarter = $map['FiscalYearAndQuarter'];
        }

        return $model;
    }
}
