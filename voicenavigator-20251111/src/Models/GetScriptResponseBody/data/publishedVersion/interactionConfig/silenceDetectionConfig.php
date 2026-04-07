<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponseBody\data\publishedVersion\interactionConfig;

use AlibabaCloud\Dara\Model;

class silenceDetectionConfig extends Model
{
    /**
     * @var int
     */
    public $maxRepeats;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'maxRepeats' => 'MaxRepeats',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxRepeats) {
            $res['MaxRepeats'] = $this->maxRepeats;
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
        if (isset($map['MaxRepeats'])) {
            $model->maxRepeats = $map['MaxRepeats'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
