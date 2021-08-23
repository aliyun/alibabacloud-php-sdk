<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateCategoryRequest extends Model
{
    /**
     * @var int
     */
    public $parentCategoryId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $knowledgeType;

    /**
     * @var string
     */
    public $bizCode;
    protected $_name = [
        'parentCategoryId' => 'ParentCategoryId',
        'name'             => 'Name',
        'knowledgeType'    => 'KnowledgeType',
        'bizCode'          => 'BizCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->knowledgeType) {
            $res['KnowledgeType'] = $this->knowledgeType;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
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
        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['KnowledgeType'])) {
            $model->knowledgeType = $map['KnowledgeType'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        return $model;
    }
}
