<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\CreateTagResponseBody\result;

use AlibabaCloud\Tea\Model;

class commitInfo extends Model
{
    /**
     * @var string
     */
    public $shortId;

    /**
     * @var string
     */
    public $authorName;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $authoredDate;

    /**
     * @var string
     */
    public $committerName;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $authorEmail;

    /**
     * @var string
     */
    public $committerEmail;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $committedDate;

    /**
     * @var string[]
     */
    public $parentIds;
    protected $_name = [
        'shortId'        => 'ShortId',
        'authorName'     => 'AuthorName',
        'createdAt'      => 'CreatedAt',
        'message'        => 'Message',
        'authoredDate'   => 'AuthoredDate',
        'committerName'  => 'CommitterName',
        'title'          => 'Title',
        'authorEmail'    => 'AuthorEmail',
        'committerEmail' => 'CommitterEmail',
        'id'             => 'Id',
        'committedDate'  => 'CommittedDate',
        'parentIds'      => 'ParentIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shortId) {
            $res['ShortId'] = $this->shortId;
        }
        if (null !== $this->authorName) {
            $res['AuthorName'] = $this->authorName;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->authoredDate) {
            $res['AuthoredDate'] = $this->authoredDate;
        }
        if (null !== $this->committerName) {
            $res['CommitterName'] = $this->committerName;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->authorEmail) {
            $res['AuthorEmail'] = $this->authorEmail;
        }
        if (null !== $this->committerEmail) {
            $res['CommitterEmail'] = $this->committerEmail;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->committedDate) {
            $res['CommittedDate'] = $this->committedDate;
        }
        if (null !== $this->parentIds) {
            $res['ParentIds'] = $this->parentIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commitInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShortId'])) {
            $model->shortId = $map['ShortId'];
        }
        if (isset($map['AuthorName'])) {
            $model->authorName = $map['AuthorName'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['AuthoredDate'])) {
            $model->authoredDate = $map['AuthoredDate'];
        }
        if (isset($map['CommitterName'])) {
            $model->committerName = $map['CommitterName'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['AuthorEmail'])) {
            $model->authorEmail = $map['AuthorEmail'];
        }
        if (isset($map['CommitterEmail'])) {
            $model->committerEmail = $map['CommitterEmail'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['CommittedDate'])) {
            $model->committedDate = $map['CommittedDate'];
        }
        if (isset($map['ParentIds'])) {
            if (!empty($map['ParentIds'])) {
                $model->parentIds = $map['ParentIds'];
            }
        }

        return $model;
    }
}
