<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class SaveAgentDataSemanticsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $examplesShrink;

    /**
     * @var string
     */
    public $joinsShrink;

    /**
     * @var string
     */
    public $metricsShrink;

    /**
     * @var string
     */
    public $textShrink;
    protected $_name = [
        'agentName' => 'AgentName',
        'examplesShrink' => 'Examples',
        'joinsShrink' => 'Joins',
        'metricsShrink' => 'Metrics',
        'textShrink' => 'Text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->examplesShrink) {
            $res['Examples'] = $this->examplesShrink;
        }

        if (null !== $this->joinsShrink) {
            $res['Joins'] = $this->joinsShrink;
        }

        if (null !== $this->metricsShrink) {
            $res['Metrics'] = $this->metricsShrink;
        }

        if (null !== $this->textShrink) {
            $res['Text'] = $this->textShrink;
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
            $model->examplesShrink = $map['Examples'];
        }

        if (isset($map['Joins'])) {
            $model->joinsShrink = $map['Joins'];
        }

        if (isset($map['Metrics'])) {
            $model->metricsShrink = $map['Metrics'];
        }

        if (isset($map['Text'])) {
            $model->textShrink = $map['Text'];
        }

        return $model;
    }
}
