<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\GetSummaryDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Converted aircraft carbon emissions.
     *
     * @example 2.5
     *
     * @var string
     */
    public $aircraftConsumptionConversion;

    /**
     * @description Converted car carbon emissions.
     *
     * @example 0
     *
     * @var string
     */
    public $carConsumptionConversion;

    /**
     * @description The carbon emissions in the previous month, in kgCO₂e.
     *
     * @example 301.83
     *
     * @var string
     */
    public $lastMonthConsumptionConversion;

    /**
     * @description The carbon emissions in the same month of the previous year, in kgCO₂e.
     *
     * @example 1074.53
     *
     * @var string
     */
    public $lastYearConsumptionConversion;

    /**
     * @description The carbon emissions of the previous year, in kgCO₂e.
     *
     * @example 2844.58
     *
     * @var string
     */
    public $lastYearConsumptionConversionSum;

    /**
     * @description The point in time at which the data is last updated.
     *
     * @example 2023-06-01 00:00:00
     *
     * @var string
     */
    public $latestDataTime;

    /**
     * @description The carbon emissions in this month, in kgCO₂e.
     *
     * @example 193.47
     *
     * @var string
     */
    public $thisMonthConsumptionConversion;

    /**
     * @description The carbon emissions in the year of this month, in kgCO₂e.
     *
     * @example 1621.06
     *
     * @var string
     */
    public $thisYearConsumptionConversion;

    /**
     * @description The total carbon emissions within the specified time range, in kgCO₂e.
     *
     * @example 1621.06
     *
     * @var string
     */
    public $totalCarbonConsumptionConversion;

    /**
     * @description Converted tree carbon absorption.
     *
     * @example 686.4
     *
     * @var string
     */
    public $treeConsumptionConversion;
    protected $_name = [
        'aircraftConsumptionConversion'    => 'AircraftConsumptionConversion',
        'carConsumptionConversion'         => 'CarConsumptionConversion',
        'lastMonthConsumptionConversion'   => 'LastMonthConsumptionConversion',
        'lastYearConsumptionConversion'    => 'LastYearConsumptionConversion',
        'lastYearConsumptionConversionSum' => 'LastYearConsumptionConversionSum',
        'latestDataTime'                   => 'LatestDataTime',
        'thisMonthConsumptionConversion'   => 'ThisMonthConsumptionConversion',
        'thisYearConsumptionConversion'    => 'ThisYearConsumptionConversion',
        'totalCarbonConsumptionConversion' => 'TotalCarbonConsumptionConversion',
        'treeConsumptionConversion'        => 'TreeConsumptionConversion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aircraftConsumptionConversion) {
            $res['AircraftConsumptionConversion'] = $this->aircraftConsumptionConversion;
        }
        if (null !== $this->carConsumptionConversion) {
            $res['CarConsumptionConversion'] = $this->carConsumptionConversion;
        }
        if (null !== $this->lastMonthConsumptionConversion) {
            $res['LastMonthConsumptionConversion'] = $this->lastMonthConsumptionConversion;
        }
        if (null !== $this->lastYearConsumptionConversion) {
            $res['LastYearConsumptionConversion'] = $this->lastYearConsumptionConversion;
        }
        if (null !== $this->lastYearConsumptionConversionSum) {
            $res['LastYearConsumptionConversionSum'] = $this->lastYearConsumptionConversionSum;
        }
        if (null !== $this->latestDataTime) {
            $res['LatestDataTime'] = $this->latestDataTime;
        }
        if (null !== $this->thisMonthConsumptionConversion) {
            $res['ThisMonthConsumptionConversion'] = $this->thisMonthConsumptionConversion;
        }
        if (null !== $this->thisYearConsumptionConversion) {
            $res['ThisYearConsumptionConversion'] = $this->thisYearConsumptionConversion;
        }
        if (null !== $this->totalCarbonConsumptionConversion) {
            $res['TotalCarbonConsumptionConversion'] = $this->totalCarbonConsumptionConversion;
        }
        if (null !== $this->treeConsumptionConversion) {
            $res['TreeConsumptionConversion'] = $this->treeConsumptionConversion;
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
        if (isset($map['AircraftConsumptionConversion'])) {
            $model->aircraftConsumptionConversion = $map['AircraftConsumptionConversion'];
        }
        if (isset($map['CarConsumptionConversion'])) {
            $model->carConsumptionConversion = $map['CarConsumptionConversion'];
        }
        if (isset($map['LastMonthConsumptionConversion'])) {
            $model->lastMonthConsumptionConversion = $map['LastMonthConsumptionConversion'];
        }
        if (isset($map['LastYearConsumptionConversion'])) {
            $model->lastYearConsumptionConversion = $map['LastYearConsumptionConversion'];
        }
        if (isset($map['LastYearConsumptionConversionSum'])) {
            $model->lastYearConsumptionConversionSum = $map['LastYearConsumptionConversionSum'];
        }
        if (isset($map['LatestDataTime'])) {
            $model->latestDataTime = $map['LatestDataTime'];
        }
        if (isset($map['ThisMonthConsumptionConversion'])) {
            $model->thisMonthConsumptionConversion = $map['ThisMonthConsumptionConversion'];
        }
        if (isset($map['ThisYearConsumptionConversion'])) {
            $model->thisYearConsumptionConversion = $map['ThisYearConsumptionConversion'];
        }
        if (isset($map['TotalCarbonConsumptionConversion'])) {
            $model->totalCarbonConsumptionConversion = $map['TotalCarbonConsumptionConversion'];
        }
        if (isset($map['TreeConsumptionConversion'])) {
            $model->treeConsumptionConversion = $map['TreeConsumptionConversion'];
        }

        return $model;
    }
}
