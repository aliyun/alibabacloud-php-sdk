<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Dara\Model;

class CreateLoadForecastByFileUrlJobRequest extends Model
{
    /**
     * @var string
     */
    public $businessKey;

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
    public $freq;

    /**
     * @var string
     */
    public $historyUrl;

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
    public $timeColumn;

    /**
     * @var string
     */
    public $timeZone;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
