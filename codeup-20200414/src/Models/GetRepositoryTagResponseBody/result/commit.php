<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryTagResponseBody\result;

use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryTagResponseBody\result\commit\signature;
use AlibabaCloud\Tea\Model;

class commit extends Model
{
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
     * @var string
     */
    public $committedDate;

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
        'authorEmail'    => 'AuthorEmail',
        'authorName'     => 'AuthorName',
        'authoredDate'   => 'AuthoredDate',
        'committedDate'  => 'CommittedDate',
        'committerEmail' => 'CommitterEmail',
        'committerName'  => 'CommitterName',
        'createdAt'      => 'CreatedAt',
        'id'             => 'Id',
        'message'        => 'Message',
        'parentIds'      => 'ParentIds',
        'shortId'        => 'ShortId',
        'signature'      => 'Signature',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorEmail) {
            $res['AuthorEmail'] = $this->authorEmail;
        }
        if (null !== $this->authorName) {
            $res['AuthorName'] = $this->authorName;
        }
        if (null !== $this->authoredDate) {
            $res['AuthoredDate'] = $this->authoredDate;
        }
        if (null !== $this->committedDate) {
            $res['CommittedDate'] = $this->committedDate;
        }
        if (null !== $this->committerEmail) {
            $res['CommitterEmail'] = $this->committerEmail;
        }
        if (null !== $this->committerName) {
            $res['CommitterName'] = $this->committerName;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->parentIds) {
            $res['ParentIds'] = $this->parentIds;
        }
        if (null !== $this->shortId) {
            $res['ShortId'] = $this->shortId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = null !== $this->signature ? $this->signature->toMap() : null;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['AuthorEmail'])) {
            $model->authorEmail = $map['AuthorEmail'];
        }
        if (isset($map['AuthorName'])) {
            $model->authorName = $map['AuthorName'];
        }
        if (isset($map['AuthoredDate'])) {
            $model->authoredDate = $map['AuthoredDate'];
        }
        if (isset($map['CommittedDate'])) {
            $model->committedDate = $map['CommittedDate'];
        }
        if (isset($map['CommitterEmail'])) {
            $model->committerEmail = $map['CommitterEmail'];
        }
        if (isset($map['CommitterName'])) {
            $model->committerName = $map['CommitterName'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ParentIds'])) {
            if (!empty($map['ParentIds'])) {
                $model->parentIds = $map['ParentIds'];
            }
        }
        if (isset($map['ShortId'])) {
            $model->shortId = $map['ShortId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = signature::fromMap($map['Signature']);
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
