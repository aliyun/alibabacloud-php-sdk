<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class QueryCategoriesRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $knowledgeType;

    /**
     * @var int
     */
    public $parentCategoryId;

    /**
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
