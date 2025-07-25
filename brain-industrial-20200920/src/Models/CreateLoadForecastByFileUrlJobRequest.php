<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class CreateLoadForecastByFileUrlJobRequest extends Model
{
    /**
     * @example stationA
     *
     * @var string
     */
    public $businessKey;

    /**
     * @example electricityMeter
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @example FIFTEEN_MIN
     *
     * @var string
     */
    public $freq;

    /**
     * @example https://bucket.oss-cn-hangzhou.aliyuncs.com/dir/target_file.csv
     *
     * @var string
     */
    public $historyUrl;

    /**
     * @example latest
     *
     * @var string
     */
    public $modelVersion;

    /**
     * @example 2025-01-01
     *
     * @var string
     */
    public $runDate;

    /**
     * @example load
     *
     * @var string
     */
    public $systemType;

    /**
     * @example runTime
     *
     * @var string
     */
    public $timeColumn;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;

    /**
     * @example value
     *
     * @var string
     */
    public $valueColumn;
    protected $_name = [
        'businessKey' => 'BusinessKey',
        'deviceType' => 'DeviceType',
        'duration' => 'Duration',
        'freq' => 'Freq',
        'historyUrl' => 'HistoryUrl',
        'modelVersion' => 'ModelVersion',
        'runDate' => 'RunDate',
        'systemType' => 'SystemType',
        'timeColumn' => 'TimeColumn',
        'timeZone' => 'TimeZone',
        'valueColumn' => 'ValueColumn',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessKey) {
            $res['BusinessKey'] = $this->businessKey;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->freq) {
            $res['Freq'] = $this->freq;
        }
        if (null !== $this->historyUrl) {
            $res['HistoryUrl'] = $this->historyUrl;
        }
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }
        if (null !== $this->runDate) {
            $res['RunDate'] = $this->runDate;
        }
        if (null !== $this->systemType) {
            $res['SystemType'] = $this->systemType;
        }
        if (null !== $this->timeColumn) {
            $res['TimeColumn'] = $this->timeColumn;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->valueColumn) {
            $res['ValueColumn'] = $this->valueColumn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadForecastByFileUrlJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessKey'])) {
            $model->businessKey = $map['BusinessKey'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Freq'])) {
            $model->freq = $map['Freq'];
        }
        if (isset($map['HistoryUrl'])) {
            $model->historyUrl = $map['HistoryUrl'];
        }
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }
        if (isset($map['RunDate'])) {
            $model->runDate = $map['RunDate'];
        }
        if (isset($map['SystemType'])) {
            $model->systemType = $map['SystemType'];
        }
        if (isset($map['TimeColumn'])) {
            $model->timeColumn = $map['TimeColumn'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['ValueColumn'])) {
            $model->valueColumn = $map['ValueColumn'];
        }

        return $model;
    }
}
