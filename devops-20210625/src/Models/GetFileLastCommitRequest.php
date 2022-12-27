<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetFileLastCommitRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example src/main/java/Main.java
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

    /**
     * @example master
     *
     * @var string
     */
    public $sha;

    /**
     * @example false
     *
     * @var bool
     */
    public $showSignature;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'filePath'       => 'filePath',
        'organizationId' => 'organizationId',
        'sha'            => 'sha',
        'showSignature'  => 'showSignature',
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
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->sha) {
            $res['sha'] = $this->sha;
        }
        if (null !== $this->showSignature) {
            $res['showSignature'] = $this->showSignature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileLastCommitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['sha'])) {
            $model->sha = $map['sha'];
        }
        if (isset($map['showSignature'])) {
            $model->showSignature = $map['showSignature'];
        }

        return $model;
    }
}
