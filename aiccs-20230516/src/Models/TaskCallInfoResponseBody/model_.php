<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCallInfoResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 75
     *
     * @var int
     */
    public $finishTotal;

    /**
     * @example 59
     *
     * @var int
     */
    public $total;

    /**
     * @example 3
     *
     * @var int
     */
    public $unCallTotal;
    protected $_name = [
        'finishTotal' => 'FinishTotal',
        'total'       => 'Total',
        'unCallTotal' => 'UnCallTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishTotal) {
            $res['FinishTotal'] = $this->finishTotal;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->unCallTotal) {
            $res['UnCallTotal'] = $this->unCallTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinishTotal'])) {
            $model->finishTotal = $map['FinishTotal'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['UnCallTotal'])) {
            $model->unCallTotal = $map['UnCallTotal'];
        }

        return $model;
    }
}
