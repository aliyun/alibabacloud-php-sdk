<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemCommentListResponseBody;

use AlibabaCloud\Tea\Model;

class commentList extends Model
{
    /**
     * @example 066961
     *
     * @var string
     */
    public $content;

    /**
     * @example 1667205617061
     *
     * @var int
     */
    public $createTime;

    /**
     * @example RICHTEXT/MARKDOWN
     *
     * @var string
     */
    public $formatType;

    /**
     * @example 6573
     *
     * @var int
     */
    public $id;

    /**
     * @example true/false
     *
     * @var bool
     */
    public $isTop;

    /**
     * @example 1646323200000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example 1013131897677566
     *
     * @var int
     */
    public $parentId;

    /**
     * @example 9144ef6b72d8exxxxx9e61a4d0
     *
     * @var string
     */
    public $targetIdentifier;

    /**
     * @example workitem
     *
     * @var string
     */
    public $targetType;

    /**
     * @example 1667205617089
     *
     * @var int
     */
    public $topTime;
    protected $_name = [
        'content'          => 'content',
        'createTime'       => 'createTime',
        'formatType'       => 'formatType',
        'id'               => 'id',
        'isTop'            => 'isTop',
        'modifiedTime'     => 'modifiedTime',
        'parentId'         => 'parentId',
        'targetIdentifier' => 'targetIdentifier',
        'targetType'       => 'targetType',
        'topTime'          => 'topTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->formatType) {
            $res['formatType'] = $this->formatType;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->isTop) {
            $res['isTop'] = $this->isTop;
        }
        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }
        if (null !== $this->targetIdentifier) {
            $res['targetIdentifier'] = $this->targetIdentifier;
        }
        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }
        if (null !== $this->topTime) {
            $res['topTime'] = $this->topTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['formatType'])) {
            $model->formatType = $map['formatType'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['isTop'])) {
            $model->isTop = $map['isTop'];
        }
        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }
        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }
        if (isset($map['targetIdentifier'])) {
            $model->targetIdentifier = $map['targetIdentifier'];
        }
        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }
        if (isset($map['topTime'])) {
            $model->topTime = $map['topTime'];
        }

        return $model;
    }
}
