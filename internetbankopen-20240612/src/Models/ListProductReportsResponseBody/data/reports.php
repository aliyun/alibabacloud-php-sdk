<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\ListProductReportsResponseBody\data;

use AlibabaCloud\Dara\Model;

class reports extends Model
{
    /**
     * @var string
     */
    public $periodEnd;

    /**
     * @var string
     */
    public $periodStart;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $reportId;
    protected $_name = [
        'periodEnd' => 'PeriodEnd',
        'periodStart' => 'PeriodStart',
        'productCode' => 'ProductCode',
        'reportId' => 'ReportId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->periodEnd) {
            $res['PeriodEnd'] = $this->periodEnd;
        }

        if (null !== $this->periodStart) {
            $res['PeriodStart'] = $this->periodStart;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
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
        if (isset($map['PeriodEnd'])) {
            $model->periodEnd = $map['PeriodEnd'];
        }

        if (isset($map['PeriodStart'])) {
            $model->periodStart = $map['PeriodStart'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        return $model;
    }
}
