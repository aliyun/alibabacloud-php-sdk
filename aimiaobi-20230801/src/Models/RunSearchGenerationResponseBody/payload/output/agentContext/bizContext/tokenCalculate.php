<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext;

use AlibabaCloud\Tea\Model;

class tokenCalculate extends Model
{
    /**
     * @var float
     */
    public $firstTokenTime;

    /**
     * @var float
     */
    public $outputAvgTime;

    /**
     * @var float
     */
    public $searchTime;

    /**
     * @var float
     */
    public $time;

    /**
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'firstTokenTime' => 'FirstTokenTime',
        'outputAvgTime' => 'OutputAvgTime',
        'searchTime' => 'SearchTime',
        'time' => 'Time',
        'totalTokens' => 'TotalTokens',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstTokenTime) {
            $res['FirstTokenTime'] = $this->firstTokenTime;
        }
        if (null !== $this->outputAvgTime) {
            $res['OutputAvgTime'] = $this->outputAvgTime;
        }
        if (null !== $this->searchTime) {
            $res['SearchTime'] = $this->searchTime;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tokenCalculate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirstTokenTime'])) {
            $model->firstTokenTime = $map['FirstTokenTime'];
        }
        if (isset($map['OutputAvgTime'])) {
            $model->outputAvgTime = $map['OutputAvgTime'];
        }
        if (isset($map['SearchTime'])) {
            $model->searchTime = $map['SearchTime'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        return $model;
    }
}
