<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitDynamicChartJobRequest extends Model
{
    /**
     * @description The axis configurations. If XAxisFontInterval is set to 0 or left empty, the system automatically determines an optimal interval.
     *
     * @example {"FontFile":"Microsoft YaHei","XAxisFontSize":"30","YAxisFontSize":"30","XAxisFontInterval":"30","AxisColor":"30"}
     *
     * @var string
     */
    public $axisParams;

    /**
     * @description The chart background.
     *
     * @example {"Color":"#000000","ImageUrl":"http://your-bucket.oss-cn-shanghai.aliyuncs.com/obj.jpg"}
     *
     * @var string
     */
    public $background;

    /**
     * @description The chart configurations.
     *
     * @example {"Style":"Normal","TitleStartTime":"3000","ChartStartTime":"3000","VideoDuration":"15000"}
     *
     * @var string
     */
    public $chartConfig;

    /**
     * @description The chart title.
     *
     * @var string
     */
    public $chartTitle;

    /**
     * @description The chart type.
     *
     * Valid values:
     *
     *   Line: line chart
     *   Histogram: bar chart
     *   Pie: pie chart
     *
     * This parameter is required.
     * @example Line
     *
     * @var string
     */
    public $chartType;

    /**
     * @description The data source.
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description The job description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The input data for the chart.
     *
     * This parameter is required.
     * @example {"XlsFile":"https://your-bucket.oss-cn-shanghai.aliyuncs.com/obj.xls"}
     *
     * @var string
     */
    public $input;

    /**
     * @description The output configurations.
     *
     * This parameter is required.
     * @example {"MediaURL":"https://your-bucket.oss-cn-shanghai.aliyuncs.com/obj.mp4","Bitrate":2000,"Width":800,"Height":680}
     *
     * @var string
     */
    public $outputConfig;

    /**
     * @description The subtitle.
     *
     * @var string
     */
    public $subtitle;

    /**
     * @description The job title.
     *
     * @var string
     */
    public $title;

    /**
     * @description Unit
     *
     * @var string
     */
    public $unit;

    /**
     * @description The custom data in JSON format.
     *
     * @example {"user":"data"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'axisParams'   => 'AxisParams',
        'background'   => 'Background',
        'chartConfig'  => 'ChartConfig',
        'chartTitle'   => 'ChartTitle',
        'chartType'    => 'ChartType',
        'dataSource'   => 'DataSource',
        'description'  => 'Description',
        'input'        => 'Input',
        'outputConfig' => 'OutputConfig',
        'subtitle'     => 'Subtitle',
        'title'        => 'Title',
        'unit'         => 'Unit',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->axisParams) {
            $res['AxisParams'] = $this->axisParams;
        }
        if (null !== $this->background) {
            $res['Background'] = $this->background;
        }
        if (null !== $this->chartConfig) {
            $res['ChartConfig'] = $this->chartConfig;
        }
        if (null !== $this->chartTitle) {
            $res['ChartTitle'] = $this->chartTitle;
        }
        if (null !== $this->chartType) {
            $res['ChartType'] = $this->chartType;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->subtitle) {
            $res['Subtitle'] = $this->subtitle;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDynamicChartJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AxisParams'])) {
            $model->axisParams = $map['AxisParams'];
        }
        if (isset($map['Background'])) {
            $model->background = $map['Background'];
        }
        if (isset($map['ChartConfig'])) {
            $model->chartConfig = $map['ChartConfig'];
        }
        if (isset($map['ChartTitle'])) {
            $model->chartTitle = $map['ChartTitle'];
        }
        if (isset($map['ChartType'])) {
            $model->chartType = $map['ChartType'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['Subtitle'])) {
            $model->subtitle = $map['Subtitle'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
