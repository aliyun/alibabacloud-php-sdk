<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeKnowledgeResponseBody;

use AlibabaCloud\Tea\Model;

class simQuestions extends Model
{
    /**
     * @example 2020-11-25T11:44:09Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2020-11-26T06:36:14Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 30001979424
     *
     * @var int
     */
    public $simQuestionId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'modifyTime'    => 'ModifyTime',
        'simQuestionId' => 'SimQuestionId',
        'title'         => 'Title',
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
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->simQuestionId) {
            $res['SimQuestionId'] = $this->simQuestionId;
        }
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['SimQuestionId'])) {
            $model->simQuestionId = $map['SimQuestionId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
