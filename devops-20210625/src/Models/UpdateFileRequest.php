<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdateFileRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $branchName;

    /**
     * @var string
     */
    public $commitMessage;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $encoding;

    /**
     * @var string
     */
    public $newPath;

    /**
     * @var string
     */
    public $oldPath;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'branchName'     => 'branchName',
        'commitMessage'  => 'commitMessage',
        'content'        => 'content',
        'encoding'       => 'encoding',
        'newPath'        => 'newPath',
        'oldPath'        => 'oldPath',
        'organizationId' => 'organizationId',
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
        if (null !== $this->branchName) {
            $res['branchName'] = $this->branchName;
        }
        if (null !== $this->commitMessage) {
            $res['commitMessage'] = $this->commitMessage;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->encoding) {
            $res['encoding'] = $this->encoding;
        }
        if (null !== $this->newPath) {
            $res['newPath'] = $this->newPath;
        }
        if (null !== $this->oldPath) {
            $res['oldPath'] = $this->oldPath;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['branchName'])) {
            $model->branchName = $map['branchName'];
        }
        if (isset($map['commitMessage'])) {
            $model->commitMessage = $map['commitMessage'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['encoding'])) {
            $model->encoding = $map['encoding'];
        }
        if (isset($map['newPath'])) {
            $model->newPath = $map['newPath'];
        }
        if (isset($map['oldPath'])) {
            $model->oldPath = $map['oldPath'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
