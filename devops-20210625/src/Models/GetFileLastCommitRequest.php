<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetFileLastCommitRequest extends Model
{
    /**
     * @description 个人访问令牌
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description 文件路径
     *
     * @var string
     */
    public $filepath;

    /**
     * @description 云效企业ID
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description 分支名称、标签名称或Commit ID
     *
     * @var string
     */
    public $sha;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'filepath'       => 'filepath',
        'organizationId' => 'organizationId',
        'sha'            => 'sha',
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
        if (null !== $this->filepath) {
            $res['filepath'] = $this->filepath;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->sha) {
            $res['sha'] = $this->sha;
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
        if (isset($map['filepath'])) {
            $model->filepath = $map['filepath'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['sha'])) {
            $model->sha = $map['sha'];
        }

        return $model;
    }
}
