<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetAgentDataSemanticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AgentDataSemanticsExample;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AgentDataSemanticsJoin;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AgentDataSemanticsMetric;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\AgentDataSemanticsText;

class data extends Model
{
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

    /**
     * @var int
     */
    public $versionNo;
    protected $_name = [
        'examples' => 'Examples',
        'joins' => 'Joins',
        'metrics' => 'Metrics',
        'text' => 'Text',
        'versionNo' => 'VersionNo',
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

        if (null !== $this->versionNo) {
            $res['VersionNo'] = $this->versionNo;
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

        if (isset($map['VersionNo'])) {
            $model->versionNo = $map['VersionNo'];
        }

        return $model;
    }
}
