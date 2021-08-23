<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeKnowledgeResponseBody;

use AlibabaCloud\Tea\Model;

class simQuestions extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $simQuestionId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'simQuestionId' => 'SimQuestionId',
        'title'         => 'Title',
        'modifyTime'    => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->simQuestionId) {
            $res['SimQuestionId'] = $this->simQuestionId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SimQuestionId'])) {
            $model->simQuestionId = $map['SimQuestionId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
