<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class CreateSolutionRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description 答案内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 答案类型
     *
     * @var int
     */
    public $contentType;

    /**
     * @description 知识ID
     *
     * @var int
     */
    public $knowledgeId;

    /**
     * @description 视角code列表
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
