<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class CreateSolutionRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $content;

    /**
     * @example 1
     *
     * @var int
     */
    public $contentType;

    /**
     * @description This parameter is required.
     *
     * @example 30001905617
     *
     * @var int
     */
    public $knowledgeId;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $perspectiveCodes;
    protected $_name = [
        'agentKey'         => 'AgentKey',
        'content'          => 'Content',
        'contentType'      => 'ContentType',
        'knowledgeId'      => 'KnowledgeId',
        'perspectiveCodes' => 'PerspectiveCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->perspectiveCodes) {
            $res['PerspectiveCodes'] = $this->perspectiveCodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSolutionRequest
     */
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
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['PerspectiveCodes'])) {
            if (!empty($map['PerspectiveCodes'])) {
                $model->perspectiveCodes = $map['PerspectiveCodes'];
            }
        }

        return $model;
    }
}
