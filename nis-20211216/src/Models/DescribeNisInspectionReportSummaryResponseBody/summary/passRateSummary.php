<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportSummaryResponseBody\summary;

use AlibabaCloud\Dara\Model;

class passRateSummary extends Model
{
    /**
     * @var float
     */
    public $passRate;

    /**
     * @var string
     */
    public $passRateScope;
    protected $_name = [
        'passRate' => 'PassRate',
        'passRateScope' => 'PassRateScope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passRate) {
            $res['PassRate'] = $this->passRate;
        }

        if (null !== $this->passRateScope) {
            $res['PassRateScope'] = $this->passRateScope;
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
        if (isset($map['PassRate'])) {
            $model->passRate = $map['PassRate'];
        }

        if (isset($map['PassRateScope'])) {
            $model->passRateScope = $map['PassRateScope'];
        }

        return $model;
    }
}
