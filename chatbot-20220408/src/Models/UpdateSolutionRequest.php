<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class UpdateSolutionRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $contentType;

    /**
     * @var string[]
     */
    public $perspectiveCodes;

    /**
     * @var int
     */
    public $solutionId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'content' => 'Content',
        'contentType' => 'ContentType',
        'perspectiveCodes' => 'PerspectiveCodes',
        'solutionId' => 'SolutionId',
    ];

    public function validate()
    {
        if (\is_array($this->perspectiveCodes)) {
            Model::validateArray($this->perspectiveCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->perspectiveCodes) {
            if (\is_array($this->perspectiveCodes)) {
                $res['PerspectiveCodes'] = [];
                $n1 = 0;
                foreach ($this->perspectiveCodes as $item1) {
                    $res['PerspectiveCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
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

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['PerspectiveCodes'])) {
            if (!empty($map['PerspectiveCodes'])) {
                $model->perspectiveCodes = [];
                $n1 = 0;
                foreach ($map['PerspectiveCodes'] as $item1) {
                    $model->perspectiveCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }

        return $model;
    }
}
