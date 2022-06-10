<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\knowledge;

use AlibabaCloud\Tea\Model;

class relatedKnowledges extends Model
{
    /**
     * @description 知识关联知识的ID
     *
     * @var string
     */
    public $knowledgeId;

    /**
     * @description 知识的关联知识的标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'knowledgeId' => 'KnowledgeId',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedKnowledges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
