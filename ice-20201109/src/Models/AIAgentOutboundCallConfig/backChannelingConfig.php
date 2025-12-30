<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\backChannelingConfig\words;

class backChannelingConfig extends Model
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
     * @var words
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
        if (null !== $this->words) {
            $this->words->validate();
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
            $res['Words'] = null !== $this->words ? $this->words->toArray($noStream) : $this->words;
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
            $model->words = words::fromMap($map['Words']);
        }

        return $model;
    }
}
