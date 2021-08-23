<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateKnowledgeRequest\knowledge;

use AlibabaCloud\Tea\Model;

class simQuestions extends Model
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $simQuestionId;

    /**
     * @var string
     */
    public $action;
    protected $_name = [
        'title'         => 'Title',
        'simQuestionId' => 'SimQuestionId',
        'action'        => 'Action',
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
        if (null !== $this->simQuestionId) {
            $res['SimQuestionId'] = $this->simQuestionId;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
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
        if (isset($map['SimQuestionId'])) {
            $model->simQuestionId = $map['SimQuestionId'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        return $model;
    }
}
