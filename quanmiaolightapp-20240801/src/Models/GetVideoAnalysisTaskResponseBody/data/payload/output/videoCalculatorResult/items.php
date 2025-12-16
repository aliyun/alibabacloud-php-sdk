<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoCalculatorResult;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var float
     */
    public $inputExpense;

    /**
     * @var int
     */
    public $inputToken;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $outputExpense;

    /**
     * @var int
     */
    public $outputToken;

    /**
     * @var int
     */
    public $time;

    /**
     * @var float
     */
    public $timeExpense;

    /**
     * @var float
     */
    public $totalExpense;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'inputExpense' => 'inputExpense',
        'inputToken' => 'inputToken',
        'name' => 'name',
        'outputExpense' => 'outputExpense',
        'outputToken' => 'outputToken',
        'time' => 'time',
        'timeExpense' => 'timeExpense',
        'totalExpense' => 'totalExpense',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputExpense) {
            $res['inputExpense'] = $this->inputExpense;
        }

        if (null !== $this->inputToken) {
            $res['inputToken'] = $this->inputToken;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->outputExpense) {
            $res['outputExpense'] = $this->outputExpense;
        }

        if (null !== $this->outputToken) {
            $res['outputToken'] = $this->outputToken;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->timeExpense) {
            $res['timeExpense'] = $this->timeExpense;
        }

        if (null !== $this->totalExpense) {
            $res['totalExpense'] = $this->totalExpense;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['inputExpense'])) {
            $model->inputExpense = $map['inputExpense'];
        }

        if (isset($map['inputToken'])) {
            $model->inputToken = $map['inputToken'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['outputExpense'])) {
            $model->outputExpense = $map['outputExpense'];
        }

        if (isset($map['outputToken'])) {
            $model->outputToken = $map['outputToken'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['timeExpense'])) {
            $model->timeExpense = $map['timeExpense'];
        }

        if (isset($map['totalExpense'])) {
            $model->totalExpense = $map['totalExpense'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
