<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\backChannelingConfigs\words;

class backChannelingConfigs extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var float
     */
    public $probability;

    /**
     * @var string
     */
    public $triggerStage;

    /**
     * @var words[]
     */
    public $words;
    protected $_name = [
        'enabled' => 'Enabled',
        'probability' => 'Probability',
        'triggerStage' => 'TriggerStage',
        'words' => 'Words',
    ];

    public function validate()
    {
        if (\is_array($this->words)) {
            Model::validateArray($this->words);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->probability) {
            $res['Probability'] = $this->probability;
        }

        if (null !== $this->triggerStage) {
            $res['TriggerStage'] = $this->triggerStage;
        }

        if (null !== $this->words) {
            if (\is_array($this->words)) {
                $res['Words'] = [];
                $n1 = 0;
                foreach ($this->words as $item1) {
                    $res['Words'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Probability'])) {
            $model->probability = $map['Probability'];
        }

        if (isset($map['TriggerStage'])) {
            $model->triggerStage = $map['TriggerStage'];
        }

        if (isset($map['Words'])) {
            if (!empty($map['Words'])) {
                $model->words = [];
                $n1 = 0;
                foreach ($map['Words'] as $item1) {
                    $model->words[$n1] = words::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
