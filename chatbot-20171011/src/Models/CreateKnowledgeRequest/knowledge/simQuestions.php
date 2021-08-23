<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateKnowledgeRequest\knowledge;

use AlibabaCloud\Tea\Model;

class simQuestions extends Model
{
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'title' => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return simQuestions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
