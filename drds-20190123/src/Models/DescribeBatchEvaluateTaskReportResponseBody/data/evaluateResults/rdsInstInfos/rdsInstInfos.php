<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBatchEvaluateTaskReportResponseBody\data\evaluateResults\rdsInstInfos;

use AlibabaCloud\Tea\Model;

class rdsInstInfos extends Model
{
    /**
     * @var int
     */
    public $avgQpsGrowthScale;

    /**
     * @var int
     */
    public $dataGrowthScale;

    /**
     * @var string
     */
    public $instId;

    /**
     * @var int
     */
    public $rdsPeakIopsWeekly;

    /**
     * @var int
     */
    public $rdsPeakQpsWeekly;

    /**
     * @var int
     */
    public $rdsPeakSessionsWeekly;

    /**
     * @var int
     */
    public $rdsUsedSpace;
    protected $_name = [
        'avgQpsGrowthScale'     => 'AvgQpsGrowthScale',
        'dataGrowthScale'       => 'DataGrowthScale',
        'instId'                => 'InstId',
        'rdsPeakIopsWeekly'     => 'RdsPeakIopsWeekly',
        'rdsPeakQpsWeekly'      => 'RdsPeakQpsWeekly',
        'rdsPeakSessionsWeekly' => 'RdsPeakSessionsWeekly',
        'rdsUsedSpace'          => 'RdsUsedSpace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgQpsGrowthScale) {
            $res['AvgQpsGrowthScale'] = $this->avgQpsGrowthScale;
        }
        if (null !== $this->dataGrowthScale) {
            $res['DataGrowthScale'] = $this->dataGrowthScale;
        }
        if (null !== $this->instId) {
            $res['InstId'] = $this->instId;
        }
        if (null !== $this->rdsPeakIopsWeekly) {
            $res['RdsPeakIopsWeekly'] = $this->rdsPeakIopsWeekly;
        }
        if (null !== $this->rdsPeakQpsWeekly) {
            $res['RdsPeakQpsWeekly'] = $this->rdsPeakQpsWeekly;
        }
        if (null !== $this->rdsPeakSessionsWeekly) {
            $res['RdsPeakSessionsWeekly'] = $this->rdsPeakSessionsWeekly;
        }
        if (null !== $this->rdsUsedSpace) {
            $res['RdsUsedSpace'] = $this->rdsUsedSpace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsInstInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgQpsGrowthScale'])) {
            $model->avgQpsGrowthScale = $map['AvgQpsGrowthScale'];
        }
        if (isset($map['DataGrowthScale'])) {
            $model->dataGrowthScale = $map['DataGrowthScale'];
        }
        if (isset($map['InstId'])) {
            $model->instId = $map['InstId'];
        }
        if (isset($map['RdsPeakIopsWeekly'])) {
            $model->rdsPeakIopsWeekly = $map['RdsPeakIopsWeekly'];
        }
        if (isset($map['RdsPeakQpsWeekly'])) {
            $model->rdsPeakQpsWeekly = $map['RdsPeakQpsWeekly'];
        }
        if (isset($map['RdsPeakSessionsWeekly'])) {
            $model->rdsPeakSessionsWeekly = $map['RdsPeakSessionsWeekly'];
        }
        if (isset($map['RdsUsedSpace'])) {
            $model->rdsUsedSpace = $map['RdsUsedSpace'];
        }

        return $model;
    }
}
