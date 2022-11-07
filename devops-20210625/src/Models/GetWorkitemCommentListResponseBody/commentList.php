<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemCommentListResponseBody;

use AlibabaCloud\Tea\Model;

class commentList extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $formatType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isTop;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $targetIdentifier;

    /**
     * @var string
     */
    public $targetType;

    /**
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
