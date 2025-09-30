<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest\modelParams\messages;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest\modelParams\tools;

class modelParams extends Model
{
    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $n;

    /**
     * @var float
     */
    public $presencePenalty;

    /**
     * @var int
     */
    public $seed;

    /**
     * @var string[]
     */
    public $stop;

    /**
     * @var float
     */
    public $temperature;

    /**
     * @var tools[]
     */
    public $tools;

    /**
     * @var float
     */
    public $topP;
    protected $_name = [
        'maxTokens' => 'MaxTokens',
        'messages' => 'Messages',
        'model' => 'Model',
        'n' => 'N',
        'presencePenalty' => 'PresencePenalty',
        'seed' => 'Seed',
        'stop' => 'Stop',
        'temperature' => 'Temperature',
        'tools' => 'Tools',
        'topP' => 'TopP',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (\is_array($this->stop)) {
            Model::validateArray($this->stop);
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxTokens) {
            $res['MaxTokens'] = $this->maxTokens;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['Messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['Messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->n) {
            $res['N'] = $this->n;
        }

        if (null !== $this->presencePenalty) {
            $res['PresencePenalty'] = $this->presencePenalty;
        }

        if (null !== $this->seed) {
            $res['Seed'] = $this->seed;
        }

        if (null !== $this->stop) {
            if (\is_array($this->stop)) {
                $res['Stop'] = [];
                $n1 = 0;
                foreach ($this->stop as $item1) {
                    $res['Stop'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->temperature) {
            $res['Temperature'] = $this->temperature;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['Tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['Tools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topP) {
            $res['TopP'] = $this->topP;
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
        if (isset($map['MaxTokens'])) {
            $model->maxTokens = $map['MaxTokens'];
        }

        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['Messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['N'])) {
            $model->n = $map['N'];
        }

        if (isset($map['PresencePenalty'])) {
            $model->presencePenalty = $map['PresencePenalty'];
        }

        if (isset($map['Seed'])) {
            $model->seed = $map['Seed'];
        }

        if (isset($map['Stop'])) {
            if (!empty($map['Stop'])) {
                $model->stop = [];
                $n1 = 0;
                foreach ($map['Stop'] as $item1) {
                    $model->stop[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Temperature'])) {
            $model->temperature = $map['Temperature'];
        }

        if (isset($map['Tools'])) {
            if (!empty($map['Tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['Tools'] as $item1) {
                    $model->tools[$n1] = tools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopP'])) {
            $model->topP = $map['TopP'];
        }

        return $model;
    }
}
