<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\samplingMode;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\samplingMode\samplingModeAgents\samplingModeAgent;
use AlibabaCloud\Tea\Model;

class samplingModeAgents extends Model
{
    /**
     * @var samplingModeAgent[]
     */
    public $samplingModeAgent;
    protected $_name = [
        'samplingModeAgent' => 'SamplingModeAgent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->samplingModeAgent) {
            $res['SamplingModeAgent'] = [];
            if (null !== $this->samplingModeAgent && \is_array($this->samplingModeAgent)) {
                $n = 0;
                foreach ($this->samplingModeAgent as $item) {
                    $res['SamplingModeAgent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return samplingModeAgents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SamplingModeAgent'])) {
            if (!empty($map['SamplingModeAgent'])) {
                $model->samplingModeAgent = [];
                $n                        = 0;
                foreach ($map['SamplingModeAgent'] as $item) {
                    $model->samplingModeAgent[$n++] = null !== $item ? samplingModeAgent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
