<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ModelParameters extends Model
{
    /**
     * @var float
     */
    public $frequencyPenalty;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var float
     */
    public $presencePenalty;

    /**
     * @var string[]
     */
    public $stopSequences;

    /**
     * @var float
     */
    public $temperature;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var float
     */
    public $topP;
    protected $_name = [
        'frequencyPenalty' => 'frequencyPenalty',
        'maxTokens' => 'maxTokens',
        'presencePenalty' => 'presencePenalty',
        'stopSequences' => 'stopSequences',
        'temperature' => 'temperature',
        'topK' => 'topK',
        'topP' => 'topP',
    ];

    public function validate()
    {
        if (\is_array($this->stopSequences)) {
            Model::validateArray($this->stopSequences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frequencyPenalty) {
            $res['frequencyPenalty'] = $this->frequencyPenalty;
        }

        if (null !== $this->maxTokens) {
            $res['maxTokens'] = $this->maxTokens;
        }

        if (null !== $this->presencePenalty) {
            $res['presencePenalty'] = $this->presencePenalty;
        }

        if (null !== $this->stopSequences) {
            if (\is_array($this->stopSequences)) {
                $res['stopSequences'] = [];
                $n1 = 0;
                foreach ($this->stopSequences as $item1) {
                    $res['stopSequences'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->temperature) {
            $res['temperature'] = $this->temperature;
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        if (null !== $this->topP) {
            $res['topP'] = $this->topP;
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
        if (isset($map['frequencyPenalty'])) {
            $model->frequencyPenalty = $map['frequencyPenalty'];
        }

        if (isset($map['maxTokens'])) {
            $model->maxTokens = $map['maxTokens'];
        }

        if (isset($map['presencePenalty'])) {
            $model->presencePenalty = $map['presencePenalty'];
        }

        if (isset($map['stopSequences'])) {
            if (!empty($map['stopSequences'])) {
                $model->stopSequences = [];
                $n1 = 0;
                foreach ($map['stopSequences'] as $item1) {
                    $model->stopSequences[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['temperature'])) {
            $model->temperature = $map['temperature'];
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        if (isset($map['topP'])) {
            $model->topP = $map['topP'];
        }

        return $model;
    }
}
