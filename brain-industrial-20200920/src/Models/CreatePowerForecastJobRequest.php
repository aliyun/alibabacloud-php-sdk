<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePowerForecastJobRequest\historyData;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePowerForecastJobRequest\location;

class CreatePowerForecastJobRequest extends Model
{
    /**
     * @var string
     */
    public $businessKey;

    /**
     * @var string
     */
    public $dataMode;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $forecastHorizon;

    /**
     * @var string
     */
    public $freq;

    /**
     * @var historyData[]
     */
    public $historyData;

    /**
     * @var location
     */
    public $location;

    /**
     * @var string
     */
    public $modelVersion;

    /**
     * @var string
     */
    public $runDate;

    /**
     * @var string
     */
    public $systemType;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'businessKey' => 'BusinessKey',
        'dataMode' => 'DataMode',
        'deviceType' => 'DeviceType',
        'duration' => 'Duration',
        'forecastHorizon' => 'ForecastHorizon',
        'freq' => 'Freq',
        'historyData' => 'HistoryData',
        'location' => 'Location',
        'modelVersion' => 'ModelVersion',
        'runDate' => 'RunDate',
        'systemType' => 'SystemType',
        'timeZone' => 'TimeZone',
    ];

    public function validate()
    {
        if (\is_array($this->historyData)) {
            Model::validateArray($this->historyData);
        }
        if (null !== $this->location) {
            $this->location->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessKey) {
            $res['BusinessKey'] = $this->businessKey;
        }

        if (null !== $this->dataMode) {
            $res['DataMode'] = $this->dataMode;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->forecastHorizon) {
            $res['ForecastHorizon'] = $this->forecastHorizon;
        }

        if (null !== $this->freq) {
            $res['Freq'] = $this->freq;
        }

        if (null !== $this->historyData) {
            if (\is_array($this->historyData)) {
                $res['HistoryData'] = [];
                $n1 = 0;
                foreach ($this->historyData as $item1) {
                    $res['HistoryData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toArray($noStream) : $this->location;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessKey'])) {
            $model->businessKey = $map['BusinessKey'];
        }

        if (isset($map['DataMode'])) {
            $model->dataMode = $map['DataMode'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['ForecastHorizon'])) {
            $model->forecastHorizon = $map['ForecastHorizon'];
        }

        if (isset($map['Freq'])) {
            $model->freq = $map['Freq'];
        }

        if (isset($map['HistoryData'])) {
            if (!empty($map['HistoryData'])) {
                $model->historyData = [];
                $n1 = 0;
                foreach ($map['HistoryData'] as $item1) {
                    $model->historyData[$n1] = historyData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
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
