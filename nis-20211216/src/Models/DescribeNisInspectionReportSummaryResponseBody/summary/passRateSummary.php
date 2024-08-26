<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportSummaryResponseBody\summary;

use AlibabaCloud\Tea\Model;

class passRateSummary extends Model
{
    /**
     * @example 0.98
     *
     * @var float
     */
    public $passRate;

    /**
     * @example Stability
     *
     * @var string
     */
    public $passRateScope;
    protected $_name = [
        'passRate'      => 'PassRate',
        'passRateScope' => 'PassRateScope',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return passRateSummary
     */
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
