<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig;

use AlibabaCloud\Dara\Model;

class interruptConfig extends Model
{
    /**
     * @var string
     */
    public $eagerness;

    /**
     * @var bool
     */
    public $enableVoiceInterrupt;

    /**
     * @var string[]
     */
    public $interruptWords;

    /**
     * @var string
     */
    public $noInterruptMode;
    protected $_name = [
        'eagerness' => 'Eagerness',
        'enableVoiceInterrupt' => 'EnableVoiceInterrupt',
        'interruptWords' => 'InterruptWords',
        'noInterruptMode' => 'NoInterruptMode',
    ];

    public function validate()
    {
        if (\is_array($this->interruptWords)) {
            Model::validateArray($this->interruptWords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eagerness) {
            $res['Eagerness'] = $this->eagerness;
        }

        if (null !== $this->enableVoiceInterrupt) {
            $res['EnableVoiceInterrupt'] = $this->enableVoiceInterrupt;
        }

        if (null !== $this->interruptWords) {
            if (\is_array($this->interruptWords)) {
                $res['InterruptWords'] = [];
                $n1 = 0;
                foreach ($this->interruptWords as $item1) {
                    $res['InterruptWords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->noInterruptMode) {
            $res['NoInterruptMode'] = $this->noInterruptMode;
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
        if (isset($map['Eagerness'])) {
            $model->eagerness = $map['Eagerness'];
        }

        if (isset($map['EnableVoiceInterrupt'])) {
            $model->enableVoiceInterrupt = $map['EnableVoiceInterrupt'];
        }

        if (isset($map['InterruptWords'])) {
            if (!empty($map['InterruptWords'])) {
                $model->interruptWords = [];
                $n1 = 0;
                foreach ($map['InterruptWords'] as $item1) {
                    $model->interruptWords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NoInterruptMode'])) {
            $model->noInterruptMode = $map['NoInterruptMode'];
        }

        return $model;
    }
}
