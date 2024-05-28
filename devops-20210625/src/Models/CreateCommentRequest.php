<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateCommentRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description This parameter is required.
     *
     * @example GLOBAL_COMMENT
     *
     * @var string
     */
    public $commentType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $content;

    /**
     * @example false
     *
     * @var bool
     */
    public $draft;

    /**
     * @example /src/main/test.java
     *
     * @var string
     */
    public $filePath;

    /**
     * @example 1
     *
     * @var int
     */
    public $lineNumber;

    /**
     * @example 2666ac1ac53841b0ba1b042e383279cc
     *
     * @var string
     */
    public $parentCommentBizId;

    /**
     * @example b7d8386be17c4ca68a07140db4836257
     *
     * @var string
     */
    public $patchSetBizId;

    /**
     * @example false
     *
     * @var bool
     */
    public $resolved;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $localId;

    /**
     * @description This parameter is required.
     *
     * @example 5ebbc0228123212b59xxxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $repositoryIdentity;
    protected $_name = [
        'accessToken'        => 'accessToken',
        'commentType'        => 'commentType',
        'content'            => 'content',
        'draft'              => 'draft',
        'filePath'           => 'filePath',
        'lineNumber'         => 'lineNumber',
        'parentCommentBizId' => 'parentCommentBizId',
        'patchSetBizId'      => 'patchSetBizId',
        'resolved'           => 'resolved',
        'localId'            => 'localId',
        'organizationId'     => 'organizationId',
        'repositoryIdentity' => 'repositoryIdentity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->commentType) {
            $res['commentType'] = $this->commentType;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->draft) {
            $res['draft'] = $this->draft;
        }
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }
        if (null !== $this->lineNumber) {
            $res['lineNumber'] = $this->lineNumber;
        }
        if (null !== $this->parentCommentBizId) {
            $res['parentCommentBizId'] = $this->parentCommentBizId;
        }
        if (null !== $this->patchSetBizId) {
            $res['patchSetBizId'] = $this->patchSetBizId;
        }
        if (null !== $this->resolved) {
            $res['resolved'] = $this->resolved;
        }
        if (null !== $this->localId) {
            $res['localId'] = $this->localId;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->repositoryIdentity) {
            $res['repositoryIdentity'] = $this->repositoryIdentity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCommentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['commentType'])) {
            $model->commentType = $map['commentType'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['draft'])) {
            $model->draft = $map['draft'];
        }
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }
        if (isset($map['lineNumber'])) {
            $model->lineNumber = $map['lineNumber'];
        }
        if (isset($map['parentCommentBizId'])) {
            $model->parentCommentBizId = $map['parentCommentBizId'];
        }
        if (isset($map['patchSetBizId'])) {
            $model->patchSetBizId = $map['patchSetBizId'];
        }
        if (isset($map['resolved'])) {
            $model->resolved = $map['resolved'];
        }
        if (isset($map['localId'])) {
            $model->localId = $map['localId'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['repositoryIdentity'])) {
            $model->repositoryIdentity = $map['repositoryIdentity'];
        }

        return $model;
    }
}
