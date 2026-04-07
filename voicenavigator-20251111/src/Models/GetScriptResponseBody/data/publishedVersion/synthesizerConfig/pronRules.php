<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponseBody\data\publishedVersion\synthesizerConfig;

use AlibabaCloud\Dara\Model;

class pronRules extends Model
{
    /**
     * @var string
     */
    public $pattern;

    /**
     * @var string
     */
    public $replacement;
    protected $_name = [
        'pattern' => 'Pattern',
        'replacement' => 'Replacement',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }

        if (null !== $this->replacement) {
            $res['Replacement'] = $this->replacement;
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
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }

        if (isset($map['Replacement'])) {
            $model->replacement = $map['Replacement'];
        }

        return $model;
    }
}
