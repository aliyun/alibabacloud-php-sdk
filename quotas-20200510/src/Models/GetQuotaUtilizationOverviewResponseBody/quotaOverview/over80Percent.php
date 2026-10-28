<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaUtilizationOverviewResponseBody\quotaOverview;

use AlibabaCloud\Dara\Model;

class over80Percent extends Model
{
    /**
     * @var int
     */
    public $adjustable;

    /**
     * @var float
     */
    public $adjustableRatio;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'adjustable' => 'Adjustable',
        'adjustableRatio' => 'AdjustableRatio',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adjustable) {
            $res['Adjustable'] = $this->adjustable;
        }

        if (null !== $this->adjustableRatio) {
            $res['AdjustableRatio'] = $this->adjustableRatio;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Adjustable'])) {
            $model->adjustable = $map['Adjustable'];
        }

        if (isset($map['AdjustableRatio'])) {
            $model->adjustableRatio = $map['AdjustableRatio'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
