<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetRealtimeInstanceStatsResponseBody\data;

use AlibabaCloud\Dara\Model;

class realtimeScriptStatsList extends Model
{
    /**
     * @var int
     */
    public $configuredConcurrency;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptName;

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
        'scriptId' => 'ScriptId',
        'scriptName' => 'ScriptName',
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

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
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

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
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
