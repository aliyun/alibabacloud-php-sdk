<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestCommentsResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestCommentsResponseBody\result\childComments\author;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestCommentsResponseBody\result\childComments\finalChildComments;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestCommentsResponseBody\result\childComments\relatedPatchSet;

class childComments extends Model
{
    /**
     * @var author
     */
    public $author;

    /**
     * @var string
     */
    public $commentBizId;

    /**
     * @var string
     */
    public $commentTime;

    /**
     * @var string
     */
    public $commentType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var finalChildComments[]
     */
    public $finalChildComments;

    /**
     * @var string
     */
    public $lastEditTime;

    /**
     * @var string
     */
    public $lineNumber;

    /**
     * @var string
     */
    public $parentCommentBizId;

    /**
     * @var relatedPatchSet
     */
    public $relatedPatchSet;

    /**
     * @var bool
     */
    public $resolved;

    /**
     * @var string
     */
    public $rootCommentBizId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'author' => 'author',
        'commentBizId' => 'commentBizId',
        'commentTime' => 'commentTime',
        'commentType' => 'commentType',
        'content' => 'content',
        'deleted' => 'deleted',
        'filePath' => 'filePath',
        'finalChildComments' => 'finalChildComments',
        'lastEditTime' => 'lastEditTime',
        'lineNumber' => 'lineNumber',
        'parentCommentBizId' => 'parentCommentBizId',
        'relatedPatchSet' => 'relatedPatchSet',
        'resolved' => 'resolved',
        'rootCommentBizId' => 'rootCommentBizId',
        'state' => 'state',
    ];

    public function validate()
    {
        if (null !== $this->author) {
            $this->author->validate();
        }
        if (\is_array($this->finalChildComments)) {
            Model::validateArray($this->finalChildComments);
        }
        if (null !== $this->relatedPatchSet) {
            $this->relatedPatchSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->author) {
            $res['author'] = null !== $this->author ? $this->author->toArray($noStream) : $this->author;
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

        if (null !== $this->finalChildComments) {
            if (\is_array($this->finalChildComments)) {
                $res['finalChildComments'] = [];
                $n1 = 0;
                foreach ($this->finalChildComments as $item1) {
                    $res['finalChildComments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $res['relatedPatchSet'] = null !== $this->relatedPatchSet ? $this->relatedPatchSet->toArray($noStream) : $this->relatedPatchSet;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['finalChildComments'])) {
            if (!empty($map['finalChildComments'])) {
                $model->finalChildComments = [];
                $n1 = 0;
                foreach ($map['finalChildComments'] as $item1) {
                    $model->finalChildComments[$n1] = finalChildComments::fromMap($item1);
                    ++$n1;
                }
            }
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
