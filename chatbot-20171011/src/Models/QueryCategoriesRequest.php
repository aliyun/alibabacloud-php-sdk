<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class QueryCategoriesRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $knowledgeType;

    /**
     * @example -1
     *
     * @var int
     */
    public $parentCategoryId;

    /**
     * @example true
     *
     * @var bool
     */
    public $showChildrens;
    protected $_name = [
        'agentKey'         => 'AgentKey',
        'knowledgeType'    => 'KnowledgeType',
        'parentCategoryId' => 'ParentCategoryId',
        'showChildrens'    => 'ShowChildrens',
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
        if (null !== $this->knowledgeType) {
            $res['KnowledgeType'] = $this->knowledgeType;
        }
        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
        }
        if (null !== $this->showChildrens) {
            $res['ShowChildrens'] = $this->showChildrens;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCategoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['KnowledgeType'])) {
            $model->knowledgeType = $map['KnowledgeType'];
        }
        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }
        if (isset($map['ShowChildrens'])) {
            $model->showChildrens = $map['ShowChildrens'];
        }

        return $model;
    }
}
