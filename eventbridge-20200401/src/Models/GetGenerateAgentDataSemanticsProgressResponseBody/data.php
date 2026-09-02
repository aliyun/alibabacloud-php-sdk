<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetGenerateAgentDataSemanticsProgressResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AgentDataSemanticsExample;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AgentDataSemanticsJoin;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AgentDataSemanticsMetric;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AgentDataSemanticsStageProgress;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AgentDataSemanticsText;

class data extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var AgentDataSemanticsExample[]
     */
    public $examples;

    /**
     * @var AgentDataSemanticsJoin[]
     */
    public $joins;

    /**
     * @var AgentDataSemanticsMetric[]
     */
    public $metrics;

    /**
     * @var AgentDataSemanticsStageProgress[]
     */
    public $progress;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var AgentDataSemanticsText
     */
    public $text;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'examples' => 'Examples',
        'joins' => 'Joins',
        'metrics' => 'Metrics',
        'progress' => 'Progress',
        'stage' => 'Stage',
        'text' => 'Text',
    ];

    public function validate()
    {
        if (\is_array($this->examples)) {
            Model::validateArray($this->examples);
        }
        if (\is_array($this->joins)) {
            Model::validateArray($this->joins);
        }
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        if (\is_array($this->progress)) {
            Model::validateArray($this->progress);
        }
        if (null !== $this->text) {
            $this->text->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->examples) {
            if (\is_array($this->examples)) {
                $res['Examples'] = [];
                $n1 = 0;
                foreach ($this->examples as $item1) {
                    $res['Examples'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->joins) {
            if (\is_array($this->joins)) {
                $res['Joins'] = [];
                $n1 = 0;
                foreach ($this->joins as $item1) {
                    $res['Joins'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['Metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['Metrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->progress) {
            if (\is_array($this->progress)) {
                $res['Progress'] = [];
                $n1 = 0;
                foreach ($this->progress as $item1) {
                    $res['Progress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }

        if (null !== $this->text) {
            $res['Text'] = null !== $this->text ? $this->text->toArray($noStream) : $this->text;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Examples'])) {
            if (!empty($map['Examples'])) {
                $model->examples = [];
                $n1 = 0;
                foreach ($map['Examples'] as $item1) {
                    $model->examples[$n1] = AgentDataSemanticsExample::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Joins'])) {
            if (!empty($map['Joins'])) {
                $model->joins = [];
                $n1 = 0;
                foreach ($map['Joins'] as $item1) {
                    $model->joins[$n1] = AgentDataSemanticsJoin::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['Metrics'] as $item1) {
                    $model->metrics[$n1] = AgentDataSemanticsMetric::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Progress'])) {
            if (!empty($map['Progress'])) {
                $model->progress = [];
                $n1 = 0;
                foreach ($map['Progress'] as $item1) {
                    $model->progress[$n1] = AgentDataSemanticsStageProgress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        if (isset($map['Text'])) {
            $model->text = AgentDataSemanticsText::fromMap($map['Text']);
        }

        return $model;
    }
}
