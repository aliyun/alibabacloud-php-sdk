<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommentResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommentResponseBody\result\author;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommentResponseBody\result\relatedPatchSet;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var author
     */
    public $author;

    /**
     * @example 5c399e3685e542a28db16d93e9f82abb
     *
     * @var string
     */
    public $commentBizId;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $commentTime;

    /**
     * @example GLOBAL_COMMENT
     *
     * @var string
     */
    public $commentType;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $content;

    /**
     * @example false
     *
     * @var bool
     */
    public $deleted;

    /**
     * @example src/main/update.txt
     *
     * @var string
     */
    public $filePath;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $lastEditTime;

    /**
     * @example 3
     *
     * @var string
     */
    public $lineNumber;

    /**
     * @example 4c5dcec6a8dc41e69c369737dadc1841
     *
     * @var string
     */
    public $parentCommentBizId;

    /**
     * @var relatedPatchSet
     */
    public $relatedPatchSet;

    /**
     * @example false
     *
     * @var bool
     */
    public $resolved;

    /**
     * @example dcf2b23cebfc418f98dbd35e423d9fd3
     *
     * @var string
     */
    public $rootCommentBizId;

    /**
     * @example OPENED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'author'             => 'author',
        'commentBizId'       => 'commentBizId',
        'commentTime'        => 'commentTime',
        'commentType'        => 'commentType',
        'content'            => 'content',
        'deleted'            => 'deleted',
        'filePath'           => 'filePath',
        'lastEditTime'       => 'lastEditTime',
        'lineNumber'         => 'lineNumber',
        'parentCommentBizId' => 'parentCommentBizId',
        'relatedPatchSet'    => 'relatedPatchSet',
        'resolved'           => 'resolved',
        'rootCommentBizId'   => 'rootCommentBizId',
        'state'              => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->author) {
            $res['author'] = null !== $this->author ? $this->author->toMap() : null;
        }
        if (null !== $this->commentBizId) {
            $res['commentBizId'] = $this->commentBizId;
        }
        if (null !== $this->commentTime) {
            $res['commentTime'] = $this->commentTime;
        }
        if (null !== $this->commentType) {
            $res['commentType'] = $this->commentType;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->deleted) {
            $res['deleted'] = $this->deleted;
        }
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }
        if (null !== $this->lastEditTime) {
            $res['lastEditTime'] = $this->lastEditTime;
        }
        if (null !== $this->lineNumber) {
            $res['lineNumber'] = $this->lineNumber;
        }
        if (null !== $this->parentCommentBizId) {
            $res['parentCommentBizId'] = $this->parentCommentBizId;
        }
        if (null !== $this->relatedPatchSet) {
            $res['relatedPatchSet'] = null !== $this->relatedPatchSet ? $this->relatedPatchSet->toMap() : null;
        }
        if (null !== $this->resolved) {
            $res['resolved'] = $this->resolved;
        }
        if (null !== $this->rootCommentBizId) {
            $res['rootCommentBizId'] = $this->rootCommentBizId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['author'])) {
            $model->author = author::fromMap($map['author']);
        }
        if (isset($map['commentBizId'])) {
            $model->commentBizId = $map['commentBizId'];
        }
        if (isset($map['commentTime'])) {
            $model->commentTime = $map['commentTime'];
        }
        if (isset($map['commentType'])) {
            $model->commentType = $map['commentType'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['deleted'])) {
            $model->deleted = $map['deleted'];
        }
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }
        if (isset($map['lastEditTime'])) {
            $model->lastEditTime = $map['lastEditTime'];
        }
        if (isset($map['lineNumber'])) {
            $model->lineNumber = $map['lineNumber'];
        }
        if (isset($map['parentCommentBizId'])) {
            $model->parentCommentBizId = $map['parentCommentBizId'];
        }
        if (isset($map['relatedPatchSet'])) {
            $model->relatedPatchSet = relatedPatchSet::fromMap($map['relatedPatchSet']);
        }
        if (isset($map['resolved'])) {
            $model->resolved = $map['resolved'];
        }
        if (isset($map['rootCommentBizId'])) {
            $model->rootCommentBizId = $map['rootCommentBizId'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
