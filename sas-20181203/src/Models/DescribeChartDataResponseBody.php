<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody\allChartSubTypeList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody\coordinateData;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody\multipleData;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody\singleData;
use AlibabaCloud\Tea\Model;

class DescribeChartDataResponseBody extends Model
{
    /**
     * @description The valid values for all subtypes of the chart.
     *
     * @var allChartSubTypeList[]
     */
    public $allChartSubTypeList;

    /**
     * @description The data type of the chart. Valid values:
     *
     *   **commonCoordinate**
     *   **timeCoordinate**
     *   **multipleValue**
     *   **singleValue**
     *   **propertyValue**
     *   **propertyArrayValue**
     *
     * @example propertyArrayValue
     *
     * @var string
     */
    public $chartDataType;

    /**
     * @description The subtype values in which the chart is selected.
     *
     * @var string[]
     */
    public $chartSubTypeList;

    /**
     * @description The type of the chart. Valid values:
     *
     *   **timeLine**
     *   **timeBar**
     *   **bar**
     *   **line**
     *   **pie**
     *   **gauge**
     *   **table**
     *   **text**
     *
     * @example timeBar
     *
     * @var string
     */
    public $chartType;

    /**
     * @description The coordinate data.
     *
     * @var coordinateData
     */
    public $coordinateData;

    /**
     * @description The values in the multi-value charts.
     *
     * @var multipleData[]
     */
    public $multipleData;

    /**
     * @description The attribute value of the array chart.
     *
     * @example []
     *
     * @var string
     */
    public $propertyArrayValue;

    /**
     * @description The data of the chart.
     *
     * @example {\\"totalCount\\": \\"0\\"}
     *
     * @var string
     */
    public $propertyValue;

    /**
     * @description The array data of the chart.
     *
     * @example []
     *
     * @var string
     */
    public $properyArrayValue;

    /**
     * @description The request ID.
     *
     * @example 50CCE62A-2BC4-5CF8-B976-E4F62A31****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The data of the single value chart.
     *
     * @var singleData
     */
    public $singleData;
    protected $_name = [
        'allChartSubTypeList' => 'AllChartSubTypeList',
        'chartDataType' => 'ChartDataType',
        'chartSubTypeList' => 'ChartSubTypeList',
        'chartType' => 'ChartType',
        'coordinateData' => 'CoordinateData',
        'multipleData' => 'MultipleData',
        'propertyArrayValue' => 'PropertyArrayValue',
        'propertyValue' => 'PropertyValue',
        'properyArrayValue' => 'ProperyArrayValue',
        'requestId' => 'RequestId',
        'singleData' => 'SingleData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allChartSubTypeList) {
            $res['AllChartSubTypeList'] = [];
            if (null !== $this->allChartSubTypeList && \is_array($this->allChartSubTypeList)) {
                $n = 0;
                foreach ($this->allChartSubTypeList as $item) {
                    $res['AllChartSubTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chartDataType) {
            $res['ChartDataType'] = $this->chartDataType;
        }
        if (null !== $this->chartSubTypeList) {
            $res['ChartSubTypeList'] = $this->chartSubTypeList;
        }
        if (null !== $this->chartType) {
            $res['ChartType'] = $this->chartType;
        }
        if (null !== $this->coordinateData) {
            $res['CoordinateData'] = null !== $this->coordinateData ? $this->coordinateData->toMap() : null;
        }
        if (null !== $this->multipleData) {
            $res['MultipleData'] = [];
            if (null !== $this->multipleData && \is_array($this->multipleData)) {
                $n = 0;
                foreach ($this->multipleData as $item) {
                    $res['MultipleData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->propertyArrayValue) {
            $res['PropertyArrayValue'] = $this->propertyArrayValue;
        }
        if (null !== $this->propertyValue) {
            $res['PropertyValue'] = $this->propertyValue;
        }
        if (null !== $this->properyArrayValue) {
            $res['ProperyArrayValue'] = $this->properyArrayValue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->singleData) {
            $res['SingleData'] = null !== $this->singleData ? $this->singleData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChartDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllChartSubTypeList'])) {
            if (!empty($map['AllChartSubTypeList'])) {
                $model->allChartSubTypeList = [];
                $n = 0;
                foreach ($map['AllChartSubTypeList'] as $item) {
                    $model->allChartSubTypeList[$n++] = null !== $item ? allChartSubTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ChartDataType'])) {
            $model->chartDataType = $map['ChartDataType'];
        }
        if (isset($map['ChartSubTypeList'])) {
            if (!empty($map['ChartSubTypeList'])) {
                $model->chartSubTypeList = $map['ChartSubTypeList'];
            }
        }
        if (isset($map['ChartType'])) {
            $model->chartType = $map['ChartType'];
        }
        if (isset($map['CoordinateData'])) {
            $model->coordinateData = coordinateData::fromMap($map['CoordinateData']);
        }
        if (isset($map['MultipleData'])) {
            if (!empty($map['MultipleData'])) {
                $model->multipleData = [];
                $n = 0;
                foreach ($map['MultipleData'] as $item) {
                    $model->multipleData[$n++] = null !== $item ? multipleData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PropertyArrayValue'])) {
            $model->propertyArrayValue = $map['PropertyArrayValue'];
        }
        if (isset($map['PropertyValue'])) {
            $model->propertyValue = $map['PropertyValue'];
        }
        if (isset($map['ProperyArrayValue'])) {
            $model->properyArrayValue = $map['ProperyArrayValue'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SingleData'])) {
            $model->singleData = singleData::fromMap($map['SingleData']);
        }

        return $model;
    }
}
