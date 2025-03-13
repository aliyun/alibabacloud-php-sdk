<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryTagsResponseBody\result;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryTagsResponseBody\result\commit\signature;
use AlibabaCloud\Tea\Model;

class commit extends Model
{
    /**
     * @example username@example.com
     *
     * @var string
     */
    public $authorEmail;

    /**
     * @var string
     */
    public $authorName;

    /**
     * @example 2022-03-18 10:00:00
     *
     * @var string
     */
    public $authoredDate;

    /**
     * @example 2022-03-18 09:00:00
     *
     * @var string
     */
    public $committedDate;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $committerEmail;

    /**
     * @var string
     */
    public $committerName;

    /**
     * @example 2022-03-18 10:00:00
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
        'authorEmail'    => 'authorEmail',
        'authorName'     => 'authorName',
        'authoredDate'   => 'authoredDate',
        'committedDate'  => 'committedDate',
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
        if (null !== $this->authorEmail) {
            $res['authorEmail'] = $this->authorEmail;
        }
        if (null !== $this->authorName) {
            $res['authorName'] = $this->authorName;
        }
        if (null !== $this->authoredDate) {
            $res['authoredDate'] = $this->authoredDate;
        }
        if (null !== $this->committedDate) {
            $res['committedDate'] = $this->committedDate;
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
     * @return commit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authorEmail'])) {
            $model->authorEmail = $map['authorEmail'];
        }
        if (isset($map['authorName'])) {
            $model->authorName = $map['authorName'];
        }
        if (isset($map['authoredDate'])) {
            $model->authoredDate = $map['authoredDate'];
        }
        if (isset($map['committedDate'])) {
            $model->committedDate = $map['committedDate'];
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
