<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetBranchInfoResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetBranchInfoResponseBody\result\commit\author;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetBranchInfoResponseBody\result\commit\committer;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetBranchInfoResponseBody\result\commit\signature;

class commit extends Model
{
    /**
     * @var author
     */
    public $author;
    /**
     * @var string
     */
    public $authorEmail;
    /**
     * @var string
     */
    public $authorName;
    /**
     * @var string
     */
    public $authoredDate;
    /**
     * @var int
     */
    public $commentsCount;
    /**
     * @var string
     */
    public $committedDate;
    /**
     * @var committer
     */
    public $committer;
    /**
     * @var string
     */
    public $committerEmail;
    /**
     * @var string
     */
    public $committerName;
    /**
     * @var string
     */
    public $createdAt;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string[]
     */
    public $parentIds;
    /**
     * @var string
     */
    public $shortId;
    /**
     * @var signature
     */
    public $signature;
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'author'         => 'author',
        'authorEmail'    => 'authorEmail',
        'authorName'     => 'authorName',
        'authoredDate'   => 'authoredDate',
        'commentsCount'  => 'commentsCount',
        'committedDate'  => 'committedDate',
        'committer'      => 'committer',
        'committerEmail' => 'committerEmail',
        'committerName'  => 'committerName',
        'createdAt'      => 'createdAt',
        'id'             => 'id',
        'message'        => 'message',
        'parentIds'      => 'parentIds',
        'shortId'        => 'shortId',
        'signature'      => 'signature',
        'title'          => 'title',
    ];

    public function validate()
    {
        if (null !== $this->author) {
            $this->author->validate();
        }
        if (null !== $this->committer) {
            $this->committer->validate();
        }
        if (\is_array($this->parentIds)) {
            Model::validateArray($this->parentIds);
        }
        if (null !== $this->signature) {
            $this->signature->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->author) {
            $res['author'] = null !== $this->author ? $this->author->toArray($noStream) : $this->author;
        }

        if (null !== $this->authorEmail) {
            $res['authorEmail'] = $this->authorEmail;
        }

        if (null !== $this->authorName) {
            $res['authorName'] = $this->authorName;
        }

        if (null !== $this->authoredDate) {
            $res['authoredDate'] = $this->authoredDate;
        }

        if (null !== $this->commentsCount) {
            $res['commentsCount'] = $this->commentsCount;
        }

        if (null !== $this->committedDate) {
            $res['committedDate'] = $this->committedDate;
        }

        if (null !== $this->committer) {
            $res['committer'] = null !== $this->committer ? $this->committer->toArray($noStream) : $this->committer;
        }

        if (null !== $this->committerEmail) {
            $res['committerEmail'] = $this->committerEmail;
        }

        if (null !== $this->committerName) {
            $res['committerName'] = $this->committerName;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->parentIds) {
            if (\is_array($this->parentIds)) {
                $res['parentIds'] = [];
                $n1               = 0;
                foreach ($this->parentIds as $item1) {
                    $res['parentIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->shortId) {
            $res['shortId'] = $this->shortId;
        }

        if (null !== $this->signature) {
            $res['signature'] = null !== $this->signature ? $this->signature->toArray($noStream) : $this->signature;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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

        if (isset($map['authorEmail'])) {
            $model->authorEmail = $map['authorEmail'];
        }

        if (isset($map['authorName'])) {
            $model->authorName = $map['authorName'];
        }

        if (isset($map['authoredDate'])) {
            $model->authoredDate = $map['authoredDate'];
        }

        if (isset($map['commentsCount'])) {
            $model->commentsCount = $map['commentsCount'];
        }

        if (isset($map['committedDate'])) {
            $model->committedDate = $map['committedDate'];
        }

        if (isset($map['committer'])) {
            $model->committer = committer::fromMap($map['committer']);
        }

        if (isset($map['committerEmail'])) {
            $model->committerEmail = $map['committerEmail'];
        }

        if (isset($map['committerName'])) {
            $model->committerName = $map['committerName'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['parentIds'])) {
            if (!empty($map['parentIds'])) {
                $model->parentIds = [];
                $n1               = 0;
                foreach ($map['parentIds'] as $item1) {
                    $model->parentIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['shortId'])) {
            $model->shortId = $map['shortId'];
        }

        if (isset($map['signature'])) {
            $model->signature = signature::fromMap($map['signature']);
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
