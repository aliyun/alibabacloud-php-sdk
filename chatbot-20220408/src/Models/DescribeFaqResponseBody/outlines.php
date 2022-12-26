<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeFaqResponseBody;

use AlibabaCloud\Tea\Model;

class outlines extends Model
{
    /**
     * @example 1000098002
     *
     * @var int
     */
    public $connQuestionId;

    /**
     * @example 2022-05-26T10:24:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2022-05-26T18:12:02Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 797
     *
     * @var int
     */
    public $outlineId;

    /**
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
