<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCallInfoResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var int
     */
    public $finishTotal;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $unCallTotal;
    protected $_name = [
        'finishTotal' => 'FinishTotal',
        'total' => 'Total',
        'unCallTotal' => 'UnCallTotal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
