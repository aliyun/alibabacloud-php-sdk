<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

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

    /**
     * @description 文件路径
     *
     * @var string
     */
    public $filePath;
    protected $_name = [
        'accessToken'    => 'AccessToken',
        'organizationId' => 'OrganizationId',
        'sha'            => 'Sha',
        'filePath'       => 'FilePath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->sha) {
            $res['Sha'] = $this->sha;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Sha'])) {
            $model->sha = $map['Sha'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        return $model;
    }
}
