<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateScriptVersionRequest\interactionConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateScriptVersionRequest\interactionConfig\silenceDetectionConfig\fallbackControlParamsList;

class silenceDetectionConfig extends Model
{
    /**
     * @var fallbackControlParamsList[]
     */
    public $fallbackControlParamsList;

    /**
     * @var int
     */
    public $maxRepeats;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'fallbackControlParamsList' => 'FallbackControlParamsList',
        'maxRepeats' => 'MaxRepeats',
        'prompt' => 'Prompt',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        if (\is_array($this->fallbackControlParamsList)) {
            Model::validateArray($this->fallbackControlParamsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fallbackControlParamsList) {
            if (\is_array($this->fallbackControlParamsList)) {
                $res['FallbackControlParamsList'] = [];
                $n1 = 0;
                foreach ($this->fallbackControlParamsList as $item1) {
                    $res['FallbackControlParamsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxRepeats) {
            $res['MaxRepeats'] = $this->maxRepeats;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['FallbackControlParamsList'])) {
            if (!empty($map['FallbackControlParamsList'])) {
                $model->fallbackControlParamsList = [];
                $n1 = 0;
                foreach ($map['FallbackControlParamsList'] as $item1) {
                    $model->fallbackControlParamsList[$n1] = fallbackControlParamsList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxRepeats'])) {
            $model->maxRepeats = $map['MaxRepeats'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
