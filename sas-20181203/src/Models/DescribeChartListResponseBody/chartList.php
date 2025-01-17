<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartListResponseBody;

use AlibabaCloud\Dara\Model;

class chartList extends Model
{
    /**
     * @var string
     */
    public $businessName;
    /**
     * @var string
     */
    public $businessType;
    /**
     * @var string
     */
    public $chartId;
    /**
     * @var string
     */
    public $chartName;
    /**
     * @var string
     */
    public $chartType;
    protected $_name = [
        'businessName' => 'BusinessName',
        'businessType' => 'BusinessType',
        'chartId'      => 'ChartId',
        'chartName'    => 'ChartName',
        'chartType'    => 'ChartType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->chartId) {
            $res['ChartId'] = $this->chartId;
        }

        if (null !== $this->chartName) {
            $res['ChartName'] = $this->chartName;
        }

        if (null !== $this->chartType) {
            $res['ChartType'] = $this->chartType;
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
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['ChartId'])) {
            $model->chartId = $map['ChartId'];
        }

        if (isset($map['ChartName'])) {
            $model->chartName = $map['ChartName'];
        }

        if (isset($map['ChartType'])) {
            $model->chartType = $map['ChartType'];
        }

        return $model;
    }
}
