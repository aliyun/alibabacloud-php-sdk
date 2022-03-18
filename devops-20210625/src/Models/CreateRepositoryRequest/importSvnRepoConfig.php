<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateRepositoryRequest;

use AlibabaCloud\Tea\Model;

class importSvnRepoConfig extends Model
{
    /**
     * @description author 映射
     *
     * @var string
     */
    public $authorMapping;

    /**
     * @description 分支映射
     *
     * @var string
     */
    public $branchMapping;

    /**
     * @description 不导入branch
     *
     * @var bool
     */
    public $noBranches;

    /**
     * @description 不导入tag
     *
     * @var bool
     */
    public $noTags;

    /**
     * @description svn密码
     *
     * @var string
     */
    public $password;

    /**
     * @description 导入代码库目标path
     *
     * @var string
     */
    public $path;

    /**
     * @description 根目录映射trunk
     *
     * @var bool
     */
    public $rootIsTrunk;

    /**
     * @description 标准布局
     *
     * @var bool
     */
    public $standardLayout;

    /**
     * @description svn仓库地址
     *
     * @var string
     */
    public $svnImportUrl;

    /**
     * @description 标签映射
     *
     * @var string
     */
    public $tagMapping;

    /**
     * @description trunk映射
     *
     * @var string
     */
    public $trunkMapping;

    /**
     * @description svn用户名
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'authorMapping'  => 'authorMapping',
        'branchMapping'  => 'branchMapping',
        'noBranches'     => 'noBranches',
        'noTags'         => 'noTags',
        'password'       => 'password',
        'path'           => 'path',
        'rootIsTrunk'    => 'rootIsTrunk',
        'standardLayout' => 'standardLayout',
        'svnImportUrl'   => 'svnImportUrl',
        'tagMapping'     => 'tagMapping',
        'trunkMapping'   => 'trunkMapping',
        'username'       => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorMapping) {
            $res['authorMapping'] = $this->authorMapping;
        }
        if (null !== $this->branchMapping) {
            $res['branchMapping'] = $this->branchMapping;
        }
        if (null !== $this->noBranches) {
            $res['noBranches'] = $this->noBranches;
        }
        if (null !== $this->noTags) {
            $res['noTags'] = $this->noTags;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->rootIsTrunk) {
            $res['rootIsTrunk'] = $this->rootIsTrunk;
        }
        if (null !== $this->standardLayout) {
            $res['standardLayout'] = $this->standardLayout;
        }
        if (null !== $this->svnImportUrl) {
            $res['svnImportUrl'] = $this->svnImportUrl;
        }
        if (null !== $this->tagMapping) {
            $res['tagMapping'] = $this->tagMapping;
        }
        if (null !== $this->trunkMapping) {
            $res['trunkMapping'] = $this->trunkMapping;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return importSvnRepoConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authorMapping'])) {
            $model->authorMapping = $map['authorMapping'];
        }
        if (isset($map['branchMapping'])) {
            $model->branchMapping = $map['branchMapping'];
        }
        if (isset($map['noBranches'])) {
            $model->noBranches = $map['noBranches'];
        }
        if (isset($map['noTags'])) {
            $model->noTags = $map['noTags'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['rootIsTrunk'])) {
            $model->rootIsTrunk = $map['rootIsTrunk'];
        }
        if (isset($map['standardLayout'])) {
            $model->standardLayout = $map['standardLayout'];
        }
        if (isset($map['svnImportUrl'])) {
            $model->svnImportUrl = $map['svnImportUrl'];
        }
        if (isset($map['tagMapping'])) {
            $model->tagMapping = $map['tagMapping'];
        }
        if (isset($map['trunkMapping'])) {
            $model->trunkMapping = $map['trunkMapping'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
