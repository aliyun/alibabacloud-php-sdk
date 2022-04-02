<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateRepositoryRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @description 代码库头像地址
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @description 代码库描述
     *
     * @var string
     */
    public $description;

    /**
     * @description gitignore模板类型
     *
     * @var string
     */
    public $gitignoreType;

    /**
     * @description 导入时使用的账号
     *
     * @var string
     */
    public $importAccount;

    /**
     * @description 使用使用demo库内容进行初始化
     *
     * @var bool
     */
    public $importDemoProject;

    /**
     * @description 导入代码库类型 (GIT: Git库, SVN: SVN库)
     *
     * @var string
     */
    public $importRepoType;

    /**
     * @description 导入时账号的token
     *
     * @var string
     */
    public $importToken;

    /**
     * @description import_token字段的传输格式，使用明文或rsa加密
     *
     * @var string
     */
    public $importTokenEncrypted;

    /**
     * @description 导入地址（http协议地址）
     *
     * @var string
     */
    public $importUrl;

    /**
     * @description 初始化标准智能化服务
     *
     * @var bool
     */
    public $initStandardService;

    /**
     * @description 是否启用加密
     *
     * @var bool
     */
    public $isCryptoEnabled;

    /**
     * @description 本地导入代码库的远程地址
     *
     * @var string
     */
    public $localImportUrl;

    /**
     * @description 代码库名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 代码库父路径id
     *
     * @var int
     */
    public $namespaceId;

    /**
     * @description 代码库路径
     *
     * @var string
     */
    public $path;

    /**
     * @description 自动创建readme类型 (EMPTY: 仅创建README.md, USER_GUIDE: 包含新手引导)
     *
     * @var string
     */
    public $readmeType;

    /**
     * @var int
     */
    public $visibilityLevel;

    /**
     * @var bool
     */
    public $createParentPath;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var bool
     */
    public $sync;
    protected $_name = [
        'accessToken'          => 'accessToken',
        'avatarUrl'            => 'avatarUrl',
        'description'          => 'description',
        'gitignoreType'        => 'gitignoreType',
        'importAccount'        => 'importAccount',
        'importDemoProject'    => 'importDemoProject',
        'importRepoType'       => 'importRepoType',
        'importToken'          => 'importToken',
        'importTokenEncrypted' => 'importTokenEncrypted',
        'importUrl'            => 'importUrl',
        'initStandardService'  => 'initStandardService',
        'isCryptoEnabled'      => 'isCryptoEnabled',
        'localImportUrl'       => 'localImportUrl',
        'name'                 => 'name',
        'namespaceId'          => 'namespaceId',
        'path'                 => 'path',
        'readmeType'           => 'readmeType',
        'visibilityLevel'      => 'visibilityLevel',
        'createParentPath'     => 'createParentPath',
        'organizationId'       => 'organizationId',
        'sync'                 => 'sync',
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
        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gitignoreType) {
            $res['gitignoreType'] = $this->gitignoreType;
        }
        if (null !== $this->importAccount) {
            $res['importAccount'] = $this->importAccount;
        }
        if (null !== $this->importDemoProject) {
            $res['importDemoProject'] = $this->importDemoProject;
        }
        if (null !== $this->importRepoType) {
            $res['importRepoType'] = $this->importRepoType;
        }
        if (null !== $this->importToken) {
            $res['importToken'] = $this->importToken;
        }
        if (null !== $this->importTokenEncrypted) {
            $res['importTokenEncrypted'] = $this->importTokenEncrypted;
        }
        if (null !== $this->importUrl) {
            $res['importUrl'] = $this->importUrl;
        }
        if (null !== $this->initStandardService) {
            $res['initStandardService'] = $this->initStandardService;
        }
        if (null !== $this->isCryptoEnabled) {
            $res['isCryptoEnabled'] = $this->isCryptoEnabled;
        }
        if (null !== $this->localImportUrl) {
            $res['localImportUrl'] = $this->localImportUrl;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespaceId) {
            $res['namespaceId'] = $this->namespaceId;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->readmeType) {
            $res['readmeType'] = $this->readmeType;
        }
        if (null !== $this->visibilityLevel) {
            $res['visibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->createParentPath) {
            $res['createParentPath'] = $this->createParentPath;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->sync) {
            $res['sync'] = $this->sync;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepositoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gitignoreType'])) {
            $model->gitignoreType = $map['gitignoreType'];
        }
        if (isset($map['importAccount'])) {
            $model->importAccount = $map['importAccount'];
        }
        if (isset($map['importDemoProject'])) {
            $model->importDemoProject = $map['importDemoProject'];
        }
        if (isset($map['importRepoType'])) {
            $model->importRepoType = $map['importRepoType'];
        }
        if (isset($map['importToken'])) {
            $model->importToken = $map['importToken'];
        }
        if (isset($map['importTokenEncrypted'])) {
            $model->importTokenEncrypted = $map['importTokenEncrypted'];
        }
        if (isset($map['importUrl'])) {
            $model->importUrl = $map['importUrl'];
        }
        if (isset($map['initStandardService'])) {
            $model->initStandardService = $map['initStandardService'];
        }
        if (isset($map['isCryptoEnabled'])) {
            $model->isCryptoEnabled = $map['isCryptoEnabled'];
        }
        if (isset($map['localImportUrl'])) {
            $model->localImportUrl = $map['localImportUrl'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespaceId'])) {
            $model->namespaceId = $map['namespaceId'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['readmeType'])) {
            $model->readmeType = $map['readmeType'];
        }
        if (isset($map['visibilityLevel'])) {
            $model->visibilityLevel = $map['visibilityLevel'];
        }
        if (isset($map['createParentPath'])) {
            $model->createParentPath = $map['createParentPath'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['sync'])) {
            $model->sync = $map['sync'];
        }

        return $model;
    }
}
