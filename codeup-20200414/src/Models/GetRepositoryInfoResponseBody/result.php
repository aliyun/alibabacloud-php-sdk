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
    public $lastActivityAt;

    /**
     * @var string
     */
    public $defaultBranch;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var bool
     */
    public $archive;

    /**
     * @var string
     */
    public $importUrl;

    /**
     * @var string
     */
    public $createdAt;

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
     * @var string
     */
    public $webUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $nameWithNamespace;

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
    public $path;

    /**
     * @var string
     */
    public $visibilityLevel;

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
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $tagList;

    /**
     * @var namespace_
     */
    public $namespace;

    /**
     * @var permissions
     */
    public $permissions;
    protected $_name = [
        'lastActivityAt'       => 'LastActivityAt',
        'defaultBranch'        => 'DefaultBranch',
        'avatarUrl'            => 'AvatarUrl',
        'archive'              => 'Archive',
        'importUrl'            => 'ImportUrl',
        'createdAt'            => 'CreatedAt',
        'demoProjectStatus'    => 'DemoProjectStatus',
        'creatorId'            => 'CreatorId',
        'importStatus'         => 'ImportStatus',
        'httpUrlToRepo'        => 'HttpUrlToRepo',
        'webUrl'               => 'WebUrl',
        'description'          => 'Description',
        'nameWithNamespace'    => 'NameWithNamespace',
        'public'               => 'Public',
        'pathWithNamespace'    => 'PathWithNamespace',
        'path'                 => 'Path',
        'visibilityLevel'      => 'VisibilityLevel',
        'accessLevel'          => 'AccessLevel',
        'importFromSubversion' => 'ImportFromSubversion',
        'sshUrlToRepo'         => 'SshUrlToRepo',
        'name'                 => 'Name',
        'id'                   => 'Id',
        'tagList'              => 'TagList',
        'namespace'            => 'Namespace',
        'permissions'          => 'Permissions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastActivityAt) {
            $res['LastActivityAt'] = $this->lastActivityAt;
        }
        if (null !== $this->defaultBranch) {
            $res['DefaultBranch'] = $this->defaultBranch;
        }
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->archive) {
            $res['Archive'] = $this->archive;
        }
        if (null !== $this->importUrl) {
            $res['ImportUrl'] = $this->importUrl;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
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
        if (null !== $this->webUrl) {
            $res['WebUrl'] = $this->webUrl;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nameWithNamespace) {
            $res['NameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->public) {
            $res['Public'] = $this->public;
        }
        if (null !== $this->pathWithNamespace) {
            $res['PathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->visibilityLevel) {
            $res['VisibilityLevel'] = $this->visibilityLevel;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = null !== $this->namespace ? $this->namespace->toMap() : null;
        }
        if (null !== $this->permissions) {
            $res['Permissions'] = null !== $this->permissions ? $this->permissions->toMap() : null;
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
        if (isset($map['LastActivityAt'])) {
            $model->lastActivityAt = $map['LastActivityAt'];
        }
        if (isset($map['DefaultBranch'])) {
            $model->defaultBranch = $map['DefaultBranch'];
        }
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['Archive'])) {
            $model->archive = $map['Archive'];
        }
        if (isset($map['ImportUrl'])) {
            $model->importUrl = $map['ImportUrl'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
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
        if (isset($map['WebUrl'])) {
            $model->webUrl = $map['WebUrl'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NameWithNamespace'])) {
            $model->nameWithNamespace = $map['NameWithNamespace'];
        }
        if (isset($map['Public'])) {
            $model->public = $map['Public'];
        }
        if (isset($map['PathWithNamespace'])) {
            $model->pathWithNamespace = $map['PathWithNamespace'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['VisibilityLevel'])) {
            $model->visibilityLevel = $map['VisibilityLevel'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = $map['TagList'];
            }
        }
        if (isset($map['Namespace'])) {
            $model->namespace = namespace_::fromMap($map['Namespace']);
        }
        if (isset($map['Permissions'])) {
            $model->permissions = permissions::fromMap($map['Permissions']);
        }

        return $model;
    }
}
