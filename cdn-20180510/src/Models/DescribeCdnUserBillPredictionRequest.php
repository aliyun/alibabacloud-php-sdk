<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnUserBillPredictionRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example CN,OverSeas
     *
     * @var string
     */
    public $area;

    /**
     * @description The start time of the estimation.
     *
     * @example flow
     *
     * @var string
     */
    public $dimension;

    /**
     * @description The end time of the estimation.
     *
     * @example 2018-10-25T10:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The billable region. Valid values:
     *
     *   **CN**: the Chinese mainland
     *   **OverSeas**: outside the Chinese mainland
     *   **AP1**: Asia Pacific 1
     *   **AP2**: Asia Pacific 2
     *   **AP3**: Asia Pacific 3
     *   **NA**: North America
     *   **SA**: South America
     *   **EU**: Europe
     *   **MEAA**: Middle East and Africa
     *
     * By default, the value of this parameter is determined by the metering method that is currently used. Regions inside and outside the Chinese mainland are classified into the **CN** and **OverSeas** billable regions. Billable regions inside the Chinese mainland include **CN**. Billable regions outside the Chinese mainland include **AP1**, **AP2**, **AP3**, **NA**, **SA**, **EU**, and **MEAA**.
     *
     * > For more information about billable regions, see [Billable regions](~~142221~~).
     * @example 2018-09-30T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'area'      => 'Area',
        'dimension' => 'Dimension',
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnUserBillPredictionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
