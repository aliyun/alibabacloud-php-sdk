<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class SaveAgentDataSemanticsRequest extends Model
{
    /**
     * @var string
     */
    public $agentName;

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
     * @var AgentDataSemanticsText
     */
    public $text;
    protected $_name = [
        'agentName' => 'AgentName',
        'examples' => 'Examples',
        'joins' => 'Joins',
        'metrics' => 'Metrics',
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
        if (null !== $this->text) {
            $this->text->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
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

        if (isset($map['Text'])) {
            $model->text = AgentDataSemanticsText::fromMap($map['Text']);
        }

        return $model;
    }
}
