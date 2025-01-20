<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SubmitTopicSelectionPerspectiveAnalysisTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;
    /**
     * @var string
     */
    public $documentsShrink;
    /**
     * @var string
     */
    public $perspectiveTypesShrink;
    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'agentKey'               => 'AgentKey',
        'documentsShrink'        => 'Documents',
        'perspectiveTypesShrink' => 'PerspectiveTypes',
        'topic'                  => 'Topic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->documentsShrink) {
            $res['Documents'] = $this->documentsShrink;
        }

        if (null !== $this->perspectiveTypesShrink) {
            $res['PerspectiveTypes'] = $this->perspectiveTypesShrink;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['Documents'])) {
            $model->documentsShrink = $map['Documents'];
        }

        if (isset($map['PerspectiveTypes'])) {
            $model->perspectiveTypesShrink = $map['PerspectiveTypes'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
