<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateFileRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example master
     *
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
     * @example text
     *
     * @var string
     */
    public $encoding;

    /**
     * @example /src/main/test.java
     *
     * @var string
     */
    public $filePath;

    /**
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'branchName'     => 'branchName',
        'commitMessage'  => 'commitMessage',
        'content'        => 'content',
        'encoding'       => 'encoding',
        'filePath'       => 'filePath',
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
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileRequest
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
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
