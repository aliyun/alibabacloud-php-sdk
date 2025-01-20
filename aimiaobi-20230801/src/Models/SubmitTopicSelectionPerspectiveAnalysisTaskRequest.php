<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitTopicSelectionPerspectiveAnalysisTaskRequest\documents;

class SubmitTopicSelectionPerspectiveAnalysisTaskRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;
    /**
     * @var documents[]
     */
    public $documents;
    /**
     * @var string[]
     */
    public $perspectiveTypes;
    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'agentKey'         => 'AgentKey',
        'documents'        => 'Documents',
        'perspectiveTypes' => 'PerspectiveTypes',
        'topic'            => 'Topic',
    ];

    public function validate()
    {
        if (\is_array($this->documents)) {
            Model::validateArray($this->documents);
        }
        if (\is_array($this->perspectiveTypes)) {
            Model::validateArray($this->perspectiveTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->documents) {
            if (\is_array($this->documents)) {
                $res['Documents'] = [];
                $n1               = 0;
                foreach ($this->documents as $item1) {
                    $res['Documents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->perspectiveTypes) {
            if (\is_array($this->perspectiveTypes)) {
                $res['PerspectiveTypes'] = [];
                $n1                      = 0;
                foreach ($this->perspectiveTypes as $item1) {
                    $res['PerspectiveTypes'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['Documents'])) {
                $model->documents = [];
                $n1               = 0;
                foreach ($map['Documents'] as $item1) {
                    $model->documents[$n1++] = documents::fromMap($item1);
                }
            }
        }

        if (isset($map['PerspectiveTypes'])) {
            if (!empty($map['PerspectiveTypes'])) {
                $model->perspectiveTypes = [];
                $n1                      = 0;
                foreach ($map['PerspectiveTypes'] as $item1) {
                    $model->perspectiveTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
