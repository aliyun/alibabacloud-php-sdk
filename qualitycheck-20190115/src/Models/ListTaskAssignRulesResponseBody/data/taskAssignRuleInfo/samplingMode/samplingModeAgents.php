<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\samplingMode;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\samplingMode\samplingModeAgents\samplingModeAgent;

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
        if (\is_array($this->samplingModeAgent)) {
            Model::validateArray($this->samplingModeAgent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->samplingModeAgent) {
            if (\is_array($this->samplingModeAgent)) {
                $res['SamplingModeAgent'] = [];
                $n1 = 0;
                foreach ($this->samplingModeAgent as $item1) {
                    $res['SamplingModeAgent'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SamplingModeAgent'])) {
            if (!empty($map['SamplingModeAgent'])) {
                $model->samplingModeAgent = [];
                $n1 = 0;
                foreach ($map['SamplingModeAgent'] as $item1) {
                    $model->samplingModeAgent[$n1] = samplingModeAgent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
