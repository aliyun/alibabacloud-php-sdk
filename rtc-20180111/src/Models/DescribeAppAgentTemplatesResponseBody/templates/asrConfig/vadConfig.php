<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates\asrConfig;

use AlibabaCloud\Dara\Model;

class vadConfig extends Model
{
    /**
     * @var int
     */
    public $interruptSpeechDuration;
    protected $_name = [
        'interruptSpeechDuration' => 'InterruptSpeechDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interruptSpeechDuration) {
            $res['InterruptSpeechDuration'] = $this->interruptSpeechDuration;
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
        if (isset($map['InterruptSpeechDuration'])) {
            $model->interruptSpeechDuration = $map['InterruptSpeechDuration'];
        }

        return $model;
    }
}
