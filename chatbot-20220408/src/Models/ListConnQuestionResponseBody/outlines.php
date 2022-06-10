<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListConnQuestionResponseBody;

use AlibabaCloud\Tea\Model;

class outlines extends Model
{
    /**
     * @description 关联知识ID
     *
     * @var int
     */
    public $connQuestionId;

    /**
     * @description 创建时间(UTC 时间)
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 修改时间(UTC 时间)
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description 关联关系ID
     *
     * @var int
     */
    public $outlineId;

    /**
     * @description 关联知识题目
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'connQuestionId' => 'ConnQuestionId',
        'createTime'     => 'CreateTime',
        'modifyTime'     => 'ModifyTime',
        'outlineId'      => 'OutlineId',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return outlines
     */
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
