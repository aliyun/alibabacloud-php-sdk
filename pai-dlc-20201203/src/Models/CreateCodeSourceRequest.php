<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class CreateCodeSourceRequest extends Model
{
    /**
     * @description 代码分支
     *
     * @var string
     */
    public $codeBranch;

    /**
     * @description 代码仓库地址
     *
     * @var string
     */
    public $codeRepo;

    /**
     * @description 密码
     *
     * @var string
     */
    public $codeRepoAccessToken;

    /**
     * @description 用户名
     *
     * @var string
     */
    public $codeRepoUserName;

    /**
     * @description 代码源详细描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 代码源配置名称
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 代码本地挂载目录，默认挂载到/root/code/下
     *
     * @var string
     */
    public $mountPath;
    protected $_name = [
        'codeBranch'          => 'CodeBranch',
        'codeRepo'            => 'CodeRepo',
        'codeRepoAccessToken' => 'CodeRepoAccessToken',
        'codeRepoUserName'    => 'CodeRepoUserName',
        'description'         => 'Description',
        'displayName'         => 'DisplayName',
        'mountPath'           => 'MountPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeBranch) {
            $res['CodeBranch'] = $this->codeBranch;
        }
        if (null !== $this->codeRepo) {
            $res['CodeRepo'] = $this->codeRepo;
        }
        if (null !== $this->codeRepoAccessToken) {
            $res['CodeRepoAccessToken'] = $this->codeRepoAccessToken;
        }
        if (null !== $this->codeRepoUserName) {
            $res['CodeRepoUserName'] = $this->codeRepoUserName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCodeSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeBranch'])) {
            $model->codeBranch = $map['CodeBranch'];
        }
        if (isset($map['CodeRepo'])) {
            $model->codeRepo = $map['CodeRepo'];
        }
        if (isset($map['CodeRepoAccessToken'])) {
            $model->codeRepoAccessToken = $map['CodeRepoAccessToken'];
        }
        if (isset($map['CodeRepoUserName'])) {
            $model->codeRepoUserName = $map['CodeRepoUserName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        return $model;
    }
}
