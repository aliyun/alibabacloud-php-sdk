<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\GetChangeOrderMetricResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The application ID.
     *
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @var float
     */
    public $avgTimeCostMs;

    /**
     * @description The number of abnormal change orders.
     *
     * @example 1
     *
     * @var int
     */
    public $error;

    /**
     * @description The percentage of change failures.
     *
     * @example 0.25
     *
     * @var float
     */
    public $errorPercent;

    /**
     * @var float
     */
    public $maxTimeCostMs;

    /**
     * @description The application name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $optimizeSuggestions;

    /**
     * @description The namespace ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $taskTimeCostMsAvg;

    /**
     * @description The total number of change orders.
     *
     * @example 4
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'appId' => 'AppId',
        'avgTimeCostMs' => 'AvgTimeCostMs',
        'error' => 'Error',
        'errorPercent' => 'ErrorPercent',
        'maxTimeCostMs' => 'MaxTimeCostMs',
        'name' => 'Name',
        'optimizeSuggestions' => 'OptimizeSuggestions',
        'regionId' => 'RegionId',
        'taskTimeCostMsAvg' => 'TaskTimeCostMsAvg',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->avgTimeCostMs) {
            $res['AvgTimeCostMs'] = $this->avgTimeCostMs;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->errorPercent) {
            $res['ErrorPercent'] = $this->errorPercent;
        }
        if (null !== $this->maxTimeCostMs) {
            $res['MaxTimeCostMs'] = $this->maxTimeCostMs;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->optimizeSuggestions) {
            $res['OptimizeSuggestions'] = $this->optimizeSuggestions;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskTimeCostMsAvg) {
            $res['TaskTimeCostMsAvg'] = $this->taskTimeCostMsAvg;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AvgTimeCostMs'])) {
            $model->avgTimeCostMs = $map['AvgTimeCostMs'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['ErrorPercent'])) {
            $model->errorPercent = $map['ErrorPercent'];
        }
        if (isset($map['MaxTimeCostMs'])) {
            $model->maxTimeCostMs = $map['MaxTimeCostMs'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OptimizeSuggestions'])) {
            $model->optimizeSuggestions = $map['OptimizeSuggestions'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskTimeCostMsAvg'])) {
            $model->taskTimeCostMsAvg = $map['TaskTimeCostMsAvg'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
