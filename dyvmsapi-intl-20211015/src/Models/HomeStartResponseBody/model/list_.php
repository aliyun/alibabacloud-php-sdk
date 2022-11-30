<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\HomeStartResponseBody\model;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $callFailed;

    /**
     * @var int
     */
    public $callSuccess;

    /**
     * @var int
     */
    public $callTotal;

    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $successRate;
    protected $_name = [
        'callFailed'  => 'CallFailed',
        'callSuccess' => 'CallSuccess',
        'callTotal'   => 'CallTotal',
        'date'        => 'Date',
        'successRate' => 'SuccessRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callFailed) {
            $res['CallFailed'] = $this->callFailed;
        }
        if (null !== $this->callSuccess) {
            $res['CallSuccess'] = $this->callSuccess;
        }
        if (null !== $this->callTotal) {
            $res['CallTotal'] = $this->callTotal;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->successRate) {
            $res['SuccessRate'] = $this->successRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallFailed'])) {
            $model->callFailed = $map['CallFailed'];
        }
        if (isset($map['CallSuccess'])) {
            $model->callSuccess = $map['CallSuccess'];
        }
        if (isset($map['CallTotal'])) {
            $model->callTotal = $map['CallTotal'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['SuccessRate'])) {
            $model->successRate = $map['SuccessRate'];
        }

        return $model;
    }
}
