<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryInfoResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryInfoResponseBody\result\namespace_;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryInfoResponseBody\result\permissions;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $defaultBranch;

    /**
     * @var string
     */
    public $importUrl;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $webUrl;

    /**
     * @var string[]
     */
    public $tagList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $public;

    /**
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @var string
     */
    public $visibilityLevel;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $lastActivityAt;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var bool
     */
    public $archive;

    /**
     * @var namespace_
     */
    public $namespace;

    /**
     * @var bool
     */
    public $demoProjectStatus;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $importStatus;

    /**
     * @var string
     */
    public $httpUrlToRepo;

    /**
     * @var permissions
     */
    public $permissions;

    /**
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $accessLevel;

    /**
     * @var bool
     */
    public $importFromSubversion;

    /**
     * @var string
     */
    public $sshUrlToRepo;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'defaultBranch'        => 'DefaultBranch',
        'importUrl'            => 'ImportUrl',
        'createdAt'            => 'CreatedAt',
        'webUrl'               => 'WebUrl',
        'tagList'              => 'TagList',
        'description'          => 'Description',
        'public'               => 'Public',
        'pathWithNamespace'    => 'PathWithNamespace',
        'visibilityLevel'      => 'VisibilityLevel',
        'name'                 => 'Name',
        'lastActivityAt'       => 'LastActivityAt',
        'avatarUrl'            => 'AvatarUrl',
        'archive'              => 'Archive',
        'namespace'            => 'Namespace',
        'demoProjectStatus'    => 'DemoProjectStatus',
        'creatorId'            => 'CreatorId',
        'importStatus'         => 'ImportStatus',
        'httpUrlToRepo'        => 'HttpUrlToRepo',
        'permissions'          => 'Permissions',
        'nameWithNamespace'    => 'NameWithNamespace',
        'path'                 => 'Path',
        'accessLevel'          => 'AccessLevel',
        'importFromSubversion' => 'ImportFromSubversion',
        'sshUrlToRepo'         => 'SshUrlToRepo',
        'id'                   => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultBranch) {
            $res['DefaultBranch'] = $this->defaultBranch;
        }
        if (null !== $this->importUrl) {
            $res['ImportUrl'] = $this->importUrl;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->webUrl) {
            $res['WebUrl'] = $this->webUrl;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->public) {
            $res['Public'] = $this->public;
        }
        if (null !== $this->pathWithNamespace) {
            $res['PathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->visibilityLevel) {
            $res['VisibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->lastActivityAt) {
            $res['LastActivityAt'] = $this->lastActivityAt;
        }
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->archive) {
            $res['Archive'] = $this->archive;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = null !== $this->namespace ? $this->namespace->toMap() : null;
        }
        if (null !== $this->demoProjectStatus) {
            $res['DemoProjectStatus'] = $this->demoProjectStatus;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->importStatus) {
            $res['ImportStatus'] = $this->importStatus;
        }
        if (null !== $this->httpUrlToRepo) {
            $res['HttpUrlToRepo'] = $this->httpUrlToRepo;
        }
        if (null !== $this->permissions) {
            $res['Permissions'] = null !== $this->permissions ? $this->permissions->toMap() : null;
        }
        if (null !== $this->nameWithNamespace) {
            $res['NameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->accessLevel) {
            $res['AccessLevel'] = $this->accessLevel;
        }
        if (null !== $this->importFromSubversion) {
            $res['ImportFromSubversion'] = $this->importFromSubversion;
        }
        if (null !== $this->sshUrlToRepo) {
            $res['SshUrlToRepo'] = $this->sshUrlToRepo;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultBranch'])) {
            $model->defaultBranch = $map['DefaultBranch'];
        }
        if (isset($map['ImportUrl'])) {
            $model->importUrl = $map['ImportUrl'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['WebUrl'])) {
            $model->webUrl = $map['WebUrl'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = $map['TagList'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Public'])) {
            $model->public = $map['Public'];
        }
        if (isset($map['PathWithNamespace'])) {
            $model->pathWithNamespace = $map['PathWithNamespace'];
        }
        if (isset($map['VisibilityLevel'])) {
            $model->visibilityLevel = $map['VisibilityLevel'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['LastActivityAt'])) {
            $model->lastActivityAt = $map['LastActivityAt'];
        }
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['Archive'])) {
            $model->archive = $map['Archive'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = namespace_::fromMap($map['Namespace']);
        }
        if (isset($map['DemoProjectStatus'])) {
            $model->demoProjectStatus = $map['DemoProjectStatus'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['ImportStatus'])) {
            $model->importStatus = $map['ImportStatus'];
        }
        if (isset($map['HttpUrlToRepo'])) {
            $model->httpUrlToRepo = $map['HttpUrlToRepo'];
        }
        if (isset($map['Permissions'])) {
            $model->permissions = permissions::fromMap($map['Permissions']);
        }
        if (isset($map['NameWithNamespace'])) {
            $model->nameWithNamespace = $map['NameWithNamespace'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['AccessLevel'])) {
            $model->accessLevel = $map['AccessLevel'];
        }
        if (isset($map['ImportFromSubversion'])) {
            $model->importFromSubversion = $map['ImportFromSubversion'];
        }
        if (isset($map['SshUrlToRepo'])) {
            $model->sshUrlToRepo = $map['SshUrlToRepo'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
