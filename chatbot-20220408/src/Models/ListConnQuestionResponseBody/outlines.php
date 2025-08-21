<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListConnQuestionResponseBody;

use AlibabaCloud\Dara\Model;

class outlines extends Model
{
    /**
     * @var int
     */
    public $connQuestionId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $outlineId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'connQuestionId' => 'ConnQuestionId',
        'createTime' => 'CreateTime',
        'modifyTime' => 'ModifyTime',
        'outlineId' => 'OutlineId',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connQuestionId) {
            $res['ConnQuestionId'] = $this->connQuestionId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->outlineId) {
            $res['OutlineId'] = $this->outlineId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnQuestionId'])) {
            $model->connQuestionId = $map['ConnQuestionId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['OutlineId'])) {
            $model->outlineId = $map['OutlineId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
