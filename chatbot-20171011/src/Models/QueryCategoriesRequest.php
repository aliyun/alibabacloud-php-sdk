<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class QueryCategoriesRequest extends Model
{
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
