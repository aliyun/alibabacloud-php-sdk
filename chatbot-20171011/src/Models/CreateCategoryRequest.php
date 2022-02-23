<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateCategoryRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var int
     */
    public $knowledgeType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parentCategoryId;
    protected $_name = [
        'agentKey'         => 'AgentKey',
        'bizCode'          => 'BizCode',
        'knowledgeType'    => 'KnowledgeType',
        'name'             => 'Name',
        'parentCategoryId' => 'ParentCategoryId',
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
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->knowledgeType) {
            $res['KnowledgeType'] = $this->knowledgeType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['KnowledgeType'])) {
            $model->knowledgeType = $map['KnowledgeType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }

        return $model;
    }
}
