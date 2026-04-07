<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetRealtimeInstanceStatsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetRealtimeInstanceStatsResponseBody\data\realtimeScriptStatsList;

class data extends Model
{
    /**
     * @var int
     */
    public $configuredConcurrency;

    /**
     * @var realtimeScriptStatsList[]
     */
    public $realtimeScriptStatsList;

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
        'realtimeScriptStatsList' => 'RealtimeScriptStatsList',
        'statsTime' => 'StatsTime',
        'usedConcurrency' => 'UsedConcurrency',
    ];

    public function validate()
    {
        if (\is_array($this->realtimeScriptStatsList)) {
            Model::validateArray($this->realtimeScriptStatsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuredConcurrency) {
            $res['ConfiguredConcurrency'] = $this->configuredConcurrency;
        }

        if (null !== $this->realtimeScriptStatsList) {
            if (\is_array($this->realtimeScriptStatsList)) {
                $res['RealtimeScriptStatsList'] = [];
                $n1 = 0;
                foreach ($this->realtimeScriptStatsList as $item1) {
                    $res['RealtimeScriptStatsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['RealtimeScriptStatsList'])) {
            if (!empty($map['RealtimeScriptStatsList'])) {
                $model->realtimeScriptStatsList = [];
                $n1 = 0;
                foreach ($map['RealtimeScriptStatsList'] as $item1) {
                    $model->realtimeScriptStatsList[$n1] = realtimeScriptStatsList::fromMap($item1);
                    ++$n1;
                }
            }
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
