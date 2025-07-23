<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class CreatePowerForecastJobShrinkRequest extends Model
{
    /**
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
     * @var string
     */
    public $historyDataShrink;

    /**
     * @var string
     */
    public $locationShrink;

    /**
     * @example latest
     *
     * @var string
     */
    public $modelVersion;

    /**
     * @example 2025-02-12
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
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'businessKey' => 'BusinessKey',
        'deviceType' => 'DeviceType',
        'duration' => 'Duration',
        'freq' => 'Freq',
        'historyDataShrink' => 'HistoryData',
        'locationShrink' => 'Location',
        'modelVersion' => 'ModelVersion',
        'runDate' => 'RunDate',
        'systemType' => 'SystemType',
        'timeZone' => 'TimeZone',
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
        if (null !== $this->historyDataShrink) {
            $res['HistoryData'] = $this->historyDataShrink;
        }
        if (null !== $this->locationShrink) {
            $res['Location'] = $this->locationShrink;
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
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePowerForecastJobShrinkRequest
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
        if (isset($map['HistoryData'])) {
            $model->historyDataShrink = $map['HistoryData'];
        }
        if (isset($map['Location'])) {
            $model->locationShrink = $map['Location'];
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
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
