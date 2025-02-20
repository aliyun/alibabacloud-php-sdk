<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class CreateCommentRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
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
    public $draft;
    /**
     * @var string
     */
    public $filePath;
    /**
     * @var string
     */
    public $fromPachSetBizId;
    /**
     * @var int
     */
    public $lineNumber;
    /**
     * @var string
     */
    public $parentCommentBizId;
    /**
     * @var string
     */
    public $patchSetBizId;
    /**
     * @var bool
     */
    public $resolved;
    /**
     * @var string
     */
    public $toPatchSetBizId;
    /**
     * @var int
     */
    public $localId;
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var string
     */
    public $repositoryIdentity;
    protected $_name = [
        'accessToken'        => 'accessToken',
        'commentType'        => 'commentType',
        'content'            => 'content',
        'draft'              => 'draft',
        'filePath'           => 'filePath',
        'fromPachSetBizId'   => 'fromPachSetBizId',
        'lineNumber'         => 'lineNumber',
        'parentCommentBizId' => 'parentCommentBizId',
        'patchSetBizId'      => 'patchSetBizId',
        'resolved'           => 'resolved',
        'toPatchSetBizId'    => 'toPatchSetBizId',
        'localId'            => 'localId',
        'organizationId'     => 'organizationId',
        'repositoryIdentity' => 'repositoryIdentity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->fromPachSetBizId) {
            $res['fromPachSetBizId'] = $this->fromPachSetBizId;
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

        if (null !== $this->toPatchSetBizId) {
            $res['toPatchSetBizId'] = $this->toPatchSetBizId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['fromPachSetBizId'])) {
            $model->fromPachSetBizId = $map['fromPachSetBizId'];
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

        if (isset($map['toPatchSetBizId'])) {
            $model->toPatchSetBizId = $map['toPatchSetBizId'];
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
