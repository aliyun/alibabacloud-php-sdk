<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateRepositoryResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateRepositoryResponseBody\result\namespace_;
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
    public $createdAt;

    /**
     * @var int
     */
    public $creatorId;

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
    public $path;

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
     * @var namespace_
     */
    public $namespace;
    protected $_name = [
        'lastActivityAt'    => 'LastActivityAt',
        'defaultBranch'     => 'DefaultBranch',
        'avatarUrl'         => 'AvatarUrl',
        'archive'           => 'Archive',
        'createdAt'         => 'CreatedAt',
        'creatorId'         => 'CreatorId',
        'httpUrlToRepo'     => 'HttpUrlToRepo',
        'webUrl'            => 'WebUrl',
        'description'       => 'Description',
        'nameWithNamespace' => 'NameWithNamespace',
        'pathWithNamespace' => 'PathWithNamespace',
        'visibilityLevel'   => 'VisibilityLevel',
        'path'              => 'Path',
        'sshUrlToRepo'      => 'SshUrlToRepo',
        'name'              => 'Name',
        'id'                => 'Id',
        'namespace'         => 'Namespace',
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
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
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
        if (null !== $this->pathWithNamespace) {
            $res['PathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->visibilityLevel) {
            $res['VisibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (null !== $this->namespace) {
            $res['Namespace'] = null !== $this->namespace ? $this->namespace->toMap() : null;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
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
        if (isset($map['PathWithNamespace'])) {
            $model->pathWithNamespace = $map['PathWithNamespace'];
        }
        if (isset($map['VisibilityLevel'])) {
            $model->visibilityLevel = $map['VisibilityLevel'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
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
        if (isset($map['Namespace'])) {
            $model->namespace = namespace_::fromMap($map['Namespace']);
        }

        return $model;
    }
}
