<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class CreateRepositoryRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var string
     */
    public $avatarUrl;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $gitignoreType;
    /**
     * @var string
     */
    public $importAccount;
    /**
     * @var bool
     */
    public $importDemoProject;
    /**
     * @var string
     */
    public $importRepoType;
    /**
     * @var string
     */
    public $importToken;
    /**
     * @var string
     */
    public $importTokenEncrypted;
    /**
     * @var string
     */
    public $importUrl;
    /**
     * @var bool
     */
    public $initStandardService;
    /**
     * @var bool
     */
    public $isCryptoEnabled;
    /**
     * @var string
     */
    public $localImportUrl;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $namespaceId;
    /**
     * @var string
     */
    public $path;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
