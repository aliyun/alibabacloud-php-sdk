<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class MoveKnowledgeCategoryRequest extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $knowledgeId;
    protected $_name = [
        'categoryId'  => 'CategoryId',
        'knowledgeId' => 'KnowledgeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveKnowledgeCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }

        return $model;
    }
}
