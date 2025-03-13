<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitsResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitsResponseBody\result\author;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitsResponseBody\result\committer;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitsResponseBody\result\signature;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var author
     */
    public $author;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $authorEmail;

    /**
     * @example test-codeup
     *
     * @var string
     */
    public $authorName;

    /**
     * @example 2022-03-18 15:00:00
     *
     * @var string
     */
    public $authoredDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $commentsCount;

    /**
     * @example 2022-03-18 16:00:00
     *
     * @var string
     */
    public $committedDate;

    /**
     * @var committer
     */
    public $committer;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $committerEmail;

    /**
     * @example committer-codeup
     *
     * @var string
     */
    public $committerName;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example de02b625ba8488f92eb204bcb3773a40c1b4ddac
     *
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
     * @example de02b625
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->author) {
            $res['author'] = null !== $this->author ? $this->author->toMap() : null;
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
            $res['committer'] = null !== $this->committer ? $this->committer->toMap() : null;
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
            $res['parentIds'] = $this->parentIds;
        }
        if (null !== $this->shortId) {
            $res['shortId'] = $this->shortId;
        }
        if (null !== $this->signature) {
            $res['signature'] = null !== $this->signature ? $this->signature->toMap() : null;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
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
                $model->parentIds = $map['parentIds'];
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
