<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingTrendResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingTrendResponseBody\data\resultByTime\periodDetails;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingTrendResponseBody\data\resultByTime\total;

class resultByTime extends Model
{
    /**
     * @var string
     */
    public $period;

    /**
     * @var periodDetails[]
     */
    public $periodDetails;

    /**
     * @var total
     */
    public $total;
    protected $_name = [
        'period' => 'period',
        'periodDetails' => 'periodDetails',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->periodDetails)) {
            Model::validateArray($this->periodDetails);
        }
        if (null !== $this->total) {
            $this->total->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        if (null !== $this->periodDetails) {
            if (\is_array($this->periodDetails)) {
                $res['periodDetails'] = [];
                $n1 = 0;
                foreach ($this->periodDetails as $item1) {
                    $res['periodDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = null !== $this->total ? $this->total->toArray($noStream) : $this->total;
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
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        if (isset($map['periodDetails'])) {
            if (!empty($map['periodDetails'])) {
                $model->periodDetails = [];
                $n1 = 0;
                foreach ($map['periodDetails'] as $item1) {
                    $model->periodDetails[$n1] = periodDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = total::fromMap($map['total']);
        }

        return $model;
    }
}
