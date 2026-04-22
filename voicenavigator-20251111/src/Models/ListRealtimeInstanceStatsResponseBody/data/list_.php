<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListRealtimeInstanceStatsResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $configuredConcurrency;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $statsTime;

    /**
     * @var int
     */
    public $usedConcurrency;
    protected $_name = [
        'configuredConcurrency' => 'ConfiguredConcurrency',
        'instanceId' => 'InstanceId',
        'statsTime' => 'StatsTime',
        'usedConcurrency' => 'UsedConcurrency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuredConcurrency) {
            $res['ConfiguredConcurrency'] = $this->configuredConcurrency;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->statsTime) {
            $res['StatsTime'] = $this->statsTime;
        }

        if (null !== $this->usedConcurrency) {
            $res['UsedConcurrency'] = $this->usedConcurrency;
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
        if (isset($map['ConfiguredConcurrency'])) {
            $model->configuredConcurrency = $map['ConfiguredConcurrency'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['StatsTime'])) {
            $model->statsTime = $map['StatsTime'];
        }

        if (isset($map['UsedConcurrency'])) {
            $model->usedConcurrency = $map['UsedConcurrency'];
        }

        return $model;
    }
}
