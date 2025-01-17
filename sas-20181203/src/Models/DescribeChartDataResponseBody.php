<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody\allChartSubTypeList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody\coordinateData;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody\multipleData;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody\singleData;

class DescribeChartDataResponseBody extends Model
{
    /**
     * @var allChartSubTypeList[]
     */
    public $allChartSubTypeList;
    /**
     * @var string
     */
    public $chartDataType;
    /**
     * @var string[]
     */
    public $chartSubTypeList;
    /**
     * @var string
     */
    public $chartType;
    /**
     * @var coordinateData
     */
    public $coordinateData;
    /**
     * @var multipleData[]
     */
    public $multipleData;
    /**
     * @var string
     */
    public $propertyArrayValue;
    /**
     * @var string
     */
    public $propertyValue;
    /**
     * @var string
     */
    public $properyArrayValue;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var singleData
     */
    public $singleData;
    protected $_name = [
        'allChartSubTypeList' => 'AllChartSubTypeList',
        'chartDataType'       => 'ChartDataType',
        'chartSubTypeList'    => 'ChartSubTypeList',
        'chartType'           => 'ChartType',
        'coordinateData'      => 'CoordinateData',
        'multipleData'        => 'MultipleData',
        'propertyArrayValue'  => 'PropertyArrayValue',
        'propertyValue'       => 'PropertyValue',
        'properyArrayValue'   => 'ProperyArrayValue',
        'requestId'           => 'RequestId',
        'singleData'          => 'SingleData',
    ];

    public function validate()
    {
        if (\is_array($this->allChartSubTypeList)) {
            Model::validateArray($this->allChartSubTypeList);
        }
        if (\is_array($this->chartSubTypeList)) {
            Model::validateArray($this->chartSubTypeList);
        }
        if (null !== $this->coordinateData) {
            $this->coordinateData->validate();
        }
        if (\is_array($this->multipleData)) {
            Model::validateArray($this->multipleData);
        }
        if (null !== $this->singleData) {
            $this->singleData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allChartSubTypeList) {
            if (\is_array($this->allChartSubTypeList)) {
                $res['AllChartSubTypeList'] = [];
                $n1                         = 0;
                foreach ($this->allChartSubTypeList as $item1) {
                    $res['AllChartSubTypeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->chartDataType) {
            $res['ChartDataType'] = $this->chartDataType;
        }

        if (null !== $this->chartSubTypeList) {
            if (\is_array($this->chartSubTypeList)) {
                $res['ChartSubTypeList'] = [];
                $n1                      = 0;
                foreach ($this->chartSubTypeList as $item1) {
                    $res['ChartSubTypeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->chartType) {
            $res['ChartType'] = $this->chartType;
        }

        if (null !== $this->coordinateData) {
            $res['CoordinateData'] = null !== $this->coordinateData ? $this->coordinateData->toArray($noStream) : $this->coordinateData;
        }

        if (null !== $this->multipleData) {
            if (\is_array($this->multipleData)) {
                $res['MultipleData'] = [];
                $n1                  = 0;
                foreach ($this->multipleData as $item1) {
                    $res['MultipleData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['SingleData'] = null !== $this->singleData ? $this->singleData->toArray($noStream) : $this->singleData;
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
        if (isset($map['AllChartSubTypeList'])) {
            if (!empty($map['AllChartSubTypeList'])) {
                $model->allChartSubTypeList = [];
                $n1                         = 0;
                foreach ($map['AllChartSubTypeList'] as $item1) {
                    $model->allChartSubTypeList[$n1++] = allChartSubTypeList::fromMap($item1);
                }
            }
        }

        if (isset($map['ChartDataType'])) {
            $model->chartDataType = $map['ChartDataType'];
        }

        if (isset($map['ChartSubTypeList'])) {
            if (!empty($map['ChartSubTypeList'])) {
                $model->chartSubTypeList = [];
                $n1                      = 0;
                foreach ($map['ChartSubTypeList'] as $item1) {
                    $model->chartSubTypeList[$n1++] = $item1;
                }
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
                $n1                  = 0;
                foreach ($map['MultipleData'] as $item1) {
                    $model->multipleData[$n1++] = multipleData::fromMap($item1);
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
