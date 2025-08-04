<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates\asrConfig;

use AlibabaCloud\Tea\Model;

class vadConfig extends Model
{
    /**
     * @var int
     */
    public $interruptSpeechDuration;
    protected $_name = [
        'interruptSpeechDuration' => 'InterruptSpeechDuration',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->interruptSpeechDuration) {
            $res['InterruptSpeechDuration'] = $this->interruptSpeechDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vadConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InterruptSpeechDuration'])) {
            $model->interruptSpeechDuration = $map['InterruptSpeechDuration'];
        }

        return $model;
    }
}
