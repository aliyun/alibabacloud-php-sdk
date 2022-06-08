<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitDynamicChartJobRequest extends Model
{
    /**
     * @description 坐标样式。XAxisFontInterval不传或为0则算法自动计算间距
     *
     * @var string
     */
    public $axisParams;

    /**
     * @description 图表背景
     *
     * @var string
     */
    public $background;

    /**
     * @description 图表配置
     *
     * @var string
     */
    public $chartConfig;

    /**
     * @description 主标题
     *
     * @var string
     */
    public $chartTitle;

    /**
     * @description 图表类型
     *
     * @var string
     */
    public $chartType;

    /**
     * @description 数据来源
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description 任务描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 图表输入数据
     *
     * @var string
     */
    public $input;

    /**
     * @description 输出设置
     *
     * @var string
     */
    public $outputConfig;

    /**
     * @description 副标题
     *
     * @var string
     */
    public $subtitle;

    /**
     * @description 任务标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 单位
     *
     * @var string
     */
    public $unit;

    /**
     * @description 自定义数据，JSON格式
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
