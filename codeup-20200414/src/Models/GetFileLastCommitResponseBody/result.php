<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetFileLastCommitResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\GetFileLastCommitResponseBody\result\signature;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Commit短ID
     *
     * @var string
     */
    public $shortId;

    /**
     * @description 作者姓名
     *
     * @var string
     */
    public $authorName;

    /**
     * @description 作者提交时间
     *
     * @var string
     */
    public $authorDate;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description 提交内容
     *
     * @var string
     */
    public $message;

    /**
     * @description 标题，提交的第一行内容
     *
     * @var string
     */
    public $title;

    /**
     * @description 提交者姓名
     *
     * @var string
     */
    public $committerName;

    /**
     * @description 提交者邮箱
     *
     * @var string
     */
    public $authorEmail;

    /**
     * @description Commit ID
     *
     * @var string
     */
    public $id;

    /**
     * @description 提交者邮箱
     *
     * @var string
     */
    public $committerEmail;

    /**
     * @description 提交者提交时间
     *
     * @var string
     */
    public $committedDate;

    /**
     * @description 父提交ID
     *
     * @var string[]
     */
    public $parentIds;

    /**
     * @description 签名
     *
     * @var signature
     */
    public $signature;
    protected $_name = [
        'shortId'        => 'ShortId',
        'authorName'     => 'AuthorName',
        'authorDate'     => 'AuthorDate',
        'createdAt'      => 'CreatedAt',
        'message'        => 'Message',
        'title'          => 'Title',
        'committerName'  => 'CommitterName',
        'authorEmail'    => 'AuthorEmail',
        'id'             => 'Id',
        'committerEmail' => 'CommitterEmail',
        'committedDate'  => 'CommittedDate',
        'parentIds'      => 'ParentIds',
        'signature'      => 'Signature',
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
        if (null !== $this->authorDate) {
            $res['AuthorDate'] = $this->authorDate;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->committerName) {
            $res['CommitterName'] = $this->committerName;
        }
        if (null !== $this->authorEmail) {
            $res['AuthorEmail'] = $this->authorEmail;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->committerEmail) {
            $res['CommitterEmail'] = $this->committerEmail;
        }
        if (null !== $this->committedDate) {
            $res['CommittedDate'] = $this->committedDate;
        }
        if (null !== $this->parentIds) {
            $res['ParentIds'] = $this->parentIds;
        }
        if (null !== $this->signature) {
            $res['Signature'] = null !== $this->signature ? $this->signature->toMap() : null;
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
        if (isset($map['ShortId'])) {
            $model->shortId = $map['ShortId'];
        }
        if (isset($map['AuthorName'])) {
            $model->authorName = $map['AuthorName'];
        }
        if (isset($map['AuthorDate'])) {
            $model->authorDate = $map['AuthorDate'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['CommitterName'])) {
            $model->committerName = $map['CommitterName'];
        }
        if (isset($map['AuthorEmail'])) {
            $model->authorEmail = $map['AuthorEmail'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['CommitterEmail'])) {
            $model->committerEmail = $map['CommitterEmail'];
        }
        if (isset($map['CommittedDate'])) {
            $model->committedDate = $map['CommittedDate'];
        }
        if (isset($map['ParentIds'])) {
            if (!empty($map['ParentIds'])) {
                $model->parentIds = $map['ParentIds'];
            }
        }
        if (isset($map['Signature'])) {
            $model->signature = signature::fromMap($map['Signature']);
        }

        return $model;
    }
}
